<?php


namespace App\Repository\Eloquent;


use App\Models\Order;
use App\Models\OrderProduct;
use App\Repository\OrderRepositoryInterface;
use App\Services\CartService;
use App\Services\PaypalService;
use Illuminate\Support\Facades\Session;

class OrderRepository implements OrderRepositoryInterface
{
    protected $paypalService;
    protected $cartService;

    public function __construct(PaypalService $paypalService, CartService $cartService)
    {
        $this->paypalService = $paypalService;
        $this->cartService = $cartService;
    }

    public function orderByPayPal($payment)
    {
        $auth = auth()->user();
        $cart = $this->cartService;
        if ($cart->canBePaidWith($payment))
        {
            $cart->construct();
            $cart->validate();
            $cart->checkCountry();
            $order_id = $cart->createOrder($payment);
            if ($auth->trusted_customer == 1){
                if (!empty($order_id)) {
                    $order = Order::find($order_id);
                   return $order->pay();
                }
            }
        }

    }

    public function paypalStatus($request)
    {
        return $this->paypalService->getPaymentStatus($request);
    }
    public function orderByAccount($payment)
    {
        $auth = auth()->user();
        $cart = $this->cartService;
        $cart->construct();
        $cart->validate();
        $cart->checkCountry();
        if ($cart->canBePaidWith($payment))
        {
            $order_id = $cart->createOrder($payment);
            if ($auth->trusted_customer == 1){
                if (!empty($order_id)) {
                    $order = Order::find($order_id);
                    if ($order->pay()) {
//                        $cart->delete();
                        $url = $order->giveCashbackPoints();
                        $order->fetchProductUnits();
                        $order->updateStatus();
                        $order->rewardPublisher();
                        if ($order->payment_method === 'credit') {
                            $order->updateCoupon();
                        }
//                        IwebEmail::orderKeys($order_id, '96296eaadb@invite.trustpilot.com');

//                        Notification::addNotification('You just paid ' . ICurrency::priceFormat($order->total_price,
//                                $order->currency) . ' for Order #' . $order->id, null, false, $url);
                        $order->user->checkGameAchievements($order);
                        $order->user->checkFriendAchievements();
                        $orderProducts = OrderProduct::where(array('order_id'=>$order_id))->get();
                        $orderProduct = OrderProduct::find($orderProducts[0]->id);
                        $orderProduct->status = 'finished';
                        $orderProduct->save();
                        return redirect('order/view/'.$order_id);
                    }
                }
            }
        }else{
            switch ($_POST['payment_method']) {
                case 'points':
                    Session::flash('warning',
                        "You don\'t have enough points for this order. Choose a different payment method");
                    break;
                case 'credit':
                    Session::flash('warning',
                        "You don\'t have enough account credit for this order. Choose a different payment method");
                    break;
                default:
                    Session::flash('warning', 'Invalid payment method');
                    break;
            }
            return back();
        }
        $cart->save($auth);
    }

}
