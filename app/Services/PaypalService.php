<?php


namespace App\Services;


use App\Models\OrderStatus;
use App\Models\PayPalPayment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaypalService
{
    /**
     * @var ApiContext
     */
    private $_api_context;

    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = config('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payWithPayPal($order = [])
    {
        $auth = auth()->user();
        $orderProducts = $order->orderProducts()->get();
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $products = [];
        $amountToBePaid = 0;

        foreach ($orderProducts as $orderProduct) {
            $item = new Item();
            $item->setName(
                preg_replace('/[^ A-Za-z0-9\-]/', ''
                    , $orderProduct->product->title))/** item name **/
            ->setCurrency($auth->currency)
                ->setQuantity($orderProduct->quantity)
                ->setPrice($orderProduct->price_each);
            /** unit price **/
            $products[] = $item;
            $amountToBePaid += floatval($item->getPrice()*$orderProduct->quantity);
        }
        if ($order->discount > 0) {
            $item = new Item();
            $item->setName('Coupon Discount')/** item name **/
            ->setCurrency($order->currency)
                ->setQuantity(1)
                ->setPrice($order->discount * (-1));
            /** unit price **/
            $products[] = $item;
            $amountToBePaid += floatval($item->getPrice());
        }
        if ($order->fee > 0) {
            $item = new Item();
            $item->setName('Payment Processing Fee')/** item name **/
            ->setCurrency($order->currency)
                ->setQuantity(1)
                ->setPrice($order->fee);
            /** unit price **/
            $products[] = $item;
            $amountToBePaid += floatval($item->getPrice());
        }
        if ($order->vat_amount > 0) {
            $item = new Item();
            $item->setName($order->vat_rate . ' percent VAT')/** item name **/
            ->setCurrency($order->currency)
                ->setQuantity(1)
                ->setPrice($order->vat_amount);
            /** unit price **/
            $products[] = $item;
            $amountToBePaid += floatval($item->getPrice());
        }

        $item_list = new ItemList();
        $item_list->setItems($products);
        $amount = new Amount();
        $amount->setCurrency($order->currency)
            ->setTotal($amountToBePaid);

        $redirect_urls = new RedirectUrls();
        /** Specify return URL **/
        $redirect_urls->setReturnUrl(URL::route('paypal_status'))
            ->setCancelUrl(URL::route('checkout'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);

        } catch (\Exception $exception) {
            if (config('app.debug')) {
                Session::put('error', 'Connection timeout');
                Log::error($exception);
                return Redirect::route('/');
            } else {
                Session::put('error', 'Some error occur, sorry for inconvenient');
                Log::error($exception);
                return Redirect::route('/');
            }
        }
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }


        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        Session::put('order_id', $order->id);
        if (isset($redirect_url)) {
            /** redirect to paypal **/
            Log::info('redirect');
            return Redirect::away($redirect_url);
        }
        Log::error('Error');

        Session::put('error', 'Unknown error occurred');
        return Redirect::route('/');
    }

    public function getPaymentStatus($request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        $order_id = Session::get('order_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty($request->PayerID) || empty($request->token)) {
            $orderStatus = new OrderStatus();
            $orderStatus->order_id = $order_id;
            $orderStatus->status = 'rejected';
            $orderStatus->save();
            session()->flash('error', 'Payment failed');
            return Redirect::route('/');
        }
        $payment = Payment::get($request->paymentId, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            $paypal_payment = new PaypalPayment();
            $paypal_payment->token = $request->token;
            $paypal_payment->order_id = $order_id ;
            $paypal_payment->save();
            auth()->user()->cart->delete();
            Session::forget('products');
            session()->flash('success', 'Payment success');
            return Redirect::route('index');
        }
        session()->flash('error', 'Payment failed');
        return Redirect::route('index');
    }
}
