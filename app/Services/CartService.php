<?php


namespace App\Services;


use App\Models\BillingDetail;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Setting;
use App\Models\VatRate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CartService
{
    public $products = [];
    public $coupon_id = null;
    public $user_id = null;
    public $gift_email = null;
    public $vat = 0;
    public $country_code = '';

//  TODO:: Construct Start


    public function construct()
    {
        if (!auth()->check()) {
            $this->sessionRestore();
        } else {
            $this->user_id = auth()->id();
            $this->databaseRestore();
        }
        $this->setCountry();
        $this->setVatRate();
    }

    public function sessionRestore()
    {
        if (Session::exists('ICart')) {
            $iCart = Session::get('ICart');
            $this->products = $iCart['products'];
            $this->coupon_id = $iCart['coupon_id'];
            $this->gift_email = $iCart['gift_email'];
        }
    }

    public function databaseRestore()
    {
        // fetch everything from DB if Cart exists
        $cart = auth()->user()->cart;
        if ($cart && count($cart->cartProducts) > 0) {
            $this->coupon_id = $cart->coupon_id;
            $this->gift_email = $cart->gift_email;
            foreach ($cart->cartProducts as $cartProduct) {
                $this->products[$cartProduct->product_id] = $cartProduct->quantity;
            }
            // Delete session because DB > Session
            if (isset($_SESSION['ICart'])) {
                unset($_SESSION['ICart']);
            }
        } // or transfer from session to db and then delete session
        elseif (isset($_SESSION['ICart'])) {
            // Load everything from Session
            $this->sessionRestore();
            // Save them on DB
            $this->databaseSave(auth()->user());
            // Delete Session
            unset($_SESSION['ICart']);
        } else {
            Cart::where('user_id', $this->user_id)->delete();
            $cart = new Cart();
            $cart->user_id = $this->user_id;
            $cart->save();
        }
    }

    public function setCountry()
    {
        if (isset($_SERVER['HTTP_CF_IPCOUNTRY'])) {
            $this->country_code = $_SERVER['HTTP_CF_IPCOUNTRY'];
            return $this->country_code;
        } else {
            $this->country_code = 'GR';
            return $this->country_code;
        }
    }

    public function setVatRate()
    {
        if (!empty($this->country_code)) {
            $vat = VatRate::where('country_code', $this->country_code)->first();
            if ($vat) {
                $this->vat = $vat->rate;
                return $this->vat;
            }
        }
        $this->vat = 0;
        return $this->vat;
    }

//  TODO:: Construct End


    /**
     * @param $product_id
     * @param int $quantity
     * @return bool
     */
    public function addProduct($product_id, $quantity = 1): bool
    {
        if ($quantity < 1) {
            return false;
        } else if ($quantity > 100) {
            $quantity = 100;
        }
        $this->products = Session::get('products');
        $this->products[$product_id] = $quantity;
        $this->validate();
        Session::put('products', $this->products);
        Session::save();
        return true;
    }

    public function removeProduct($product_id)
    {
        $this->products = Session::get('products');
        unset($this->products[$product_id]);
        Session::put('products', $this->products);
        if (auth()->check()) {
            if ($cart = auth()->user()->cart) {
                $cart->cartProducts()->where('product_id', $product_id)->delete();
            }
        }
        $this->save(auth()->user());
        return true;
    }

//  Save Cart Product
    public function save($user)
    {
        if (empty($user)) {
            $this->sessionSave();
        } else {
            $this->databaseSave($user);
        }
    }

    public function sessionSave()
    {

        if (Session::exists('ICart')) {
            Session::forget('ICart');
        }
        Session::put('ICart', [
            'products' => Session::get('products'),
            'coupon_id' => $this->coupon_id,
            'gift_email' => $this->gift_email,
        ]);
        Session::save();
    }

    public function databaseSave($user): bool
    {
        try {
            $cartRelation = $user->cart();
            if ($cartRelation &&
                $cartRelation->first() &&
                $cartRelation->first()->cartProducts()->count() > 0) {
                $cart = $cartRelation->first();
            } else {
                $cartRelation->delete();
                $cart = $cartRelation->firstOrCreate([
                    'coupon_id' => $this->coupon_id,
                    'gift_email' => $this->gift_email,
                ]);
            }
            if ($cart) {
                foreach ($this->products as $product_key => $quantity) {
                    $cart->cartProducts()->where("product_id", $product_key)->delete();
                    $cart->cartProducts()->create([
                        'product_id' => $product_key,
                        'quantity' => $quantity,
                    ]);
                }
            }
            return true;
        } catch (\Exception $exception) {
            Log::error('Cart error for user ' . $this->user_id . ' ERROR:' . $exception->__toString());
//                  Yii::app()->user->setFlash('error','Your shopping cart crashed. Our technical team has been notified');
            return false;
        }


    }

    public function countProducts(): int
    {
        return (count($this->products));
    }

    public function getProduct()
    {
        $data = [
            'products_collection' => [],
            'total_price' => 0,
            'products' => []
        ];

        if (Session::exists('ICart') && !auth()->check()) {
            $cart = Session::get('ICart');
            $data['products'] = $cart['products'];
            $data['products_collection'] = Product::whereIn('id', array_keys($data['products']))->get();
            $data['total_price'] = $data['products_collection']->pluck('price')->sum();
        } elseif (auth()->check()) {
            $data['products_collection'] = [];
            if ($cart = auth()->user()->cart) {
                $data['cartProducts'] = $cart->cartProducts()->select('id', 'product_id', 'quantity')->get();
                foreach ($data['cartProducts'] as $cartProduct) {
                    $data['products'][$cartProduct->product_id] = $cartProduct->quantity;
                    $data['prices'][$cartProduct->product_id] = $cartProduct->quantity * Product::find($cartProduct->product_id)->price;
                    $data['total_price'] += $data['prices'][$cartProduct->product_id];
                }
                $data['products_collection'] = $cart->products()->get();
            }
        }

        return $data;
    }

    public function addProducts($products): bool
    {
        unset($products['_METHOD']);
        $this->products = $products;
        $this->validate();
        foreach ($this->products as $id => $quantity) {
                CartProduct::updateOrCreate(
                    ['product_id' => $id],
                    ['product_id' => $id, 'quantity' => $quantity]
                );
        }
        return true;
    }

    public function getProducts()
    {
        $data = [
            'products_collection' => [],
            'total_price' => 0,
        ];
        if ($cart = auth()->user()->cart) {
            $data['cartProducts'] = $cart->cartProducts()->select('id', 'product_id', 'quantity')->get();
            foreach ($data['cartProducts'] as $cartProduct) {
                $data['products'][$cartProduct->product_id] = $cartProduct->quantity;
                $data['prices'][$cartProduct->product_id] = $cartProduct->quantity * Product::find($cartProduct->product_id)->price;
                $data['total_price'] += $data['prices'][$cartProduct->product_id];
            }
            $data['products_collection'] = $cart->products()->get();

        }
        return $data;
    }

    public function createOrder($payment_method)
    {
        if (count($this->products) > 0 && !empty($this->user_id)) {
            $order = new Order();
            $order->vat_rate = $this->vat;
            $order->vat_amount = $this->getVatCharge();
            $order->country_code = $this->country_code;
            $order->user_id = $this->user_id;
            $order->status = 'unpaid';
            $order->payment_method = $payment_method;

            if ($payment_method == 'points') {
                $order->total_price = $this->pointsPrice();
                $order->currency = 'POINTS';
            } else {
                $order->total_price = $this->finalPrice();
                $order->currency = auth()->user()->currency;
            }
            $order->points2earn = $this->pointsToEarn();
            $order->discount = $this->discountAmount();
            if ($payment_method == 'paypal') {
                $order->fee = $this->getFee();
            } else {
                $order->fee = 0;
            }

            $order->coupon_id = $this->coupon_id;
            $order->gift_email = $this->gift_email;

            DB::beginTransaction();

            try {
                if ($order->save()) {
                    foreach ($this->products as $product_id => $quantity) {
                        $product = Product::findOrFail($product_id);
                        $product->price = $product->getPrice();
                        $product->points_price = $product->getPointsPrice();
                        $order_product = new OrderProduct();
                        $order_product->order_id = $order->id;
                        $order_product->product_id = $product_id;
                        $order_product->quantity = $quantity;
                        $order_product->initial_type = $product->type;
                        if ($order->currency == 'POINTS') {
                            $order_product->price_each = $product->points_price;
                        } else {
                            $order_product->price_each = $product->getFinalPrice(false);
                        }
                        $order_product->status = 'pending';
                        $order_product->date_finished = null;
                        // Check if owned by game publisher and give him his cut

                        if (!empty($product->publisher_id)) {
                            $order_product->publisher_id = $product->publisher_id;
                            $order_product->publisher_percentage = $product->publisher_percentage;
                            $publisher_earnings = $product->price * $order_product->quantity * ($product->publisher_percentage / 100);
                            $order_product->publisher_earnings = sprintf('%.2f', $publisher_earnings);
                        }
                        $order_product->save();
                    }
                } else {
                   Log::info(serialize($order->errors));
                    throw new \Exception('An error occurred with your order. Our technical team has been automatically notified.');
                }
            } catch (\Exception $ex) {
                Log::error('Order creation failed( user_id: ' . $this->user_id . ') Full error: ' . $ex);
                throw new \Exception('401', 'An error occurred with your order. Our technical team has been automatically notified.');
            }
            DB::commit();

            return $order->id;
        }
    }

    public function getVatCharge($formatted = false)
    {
        $charge = sprintf('%.2f', $this->finalPrice() * $this->vat / 100);

        if ($formatted) {
            $cn = new \NumberFormatter('en_us',\NumberFormatter::CURRENCY);
            return $cn->formatCurrency($charge,auth()->user()->currency);
        } else {
            return $charge;
        }
    }


//  TODO :: Validation Start
    public function validate()
    {
        $this->checkCoupon();
        $this->checkStock();
        $this->removeHiddenProducts();
        $this->checkGift();
    }

    public function checkCoupon()
    {
        if (!empty($this->coupon_id)) {
            if (!$this->validateCoupon($this->coupon_id)) {
                $this->coupon_id = null;
//                Yii::app()->user->setFlash('warning','Coupon code was removed because it is either invalid or expired');
            }
        }
    }

    public function validateCoupon($coupon_id)
    {
        $coupon = Coupon::where('active', true)->find($coupon_id);
        if ($coupon) {
            if ($coupon->limit_type == 'uses')
                $coupon->where('uses > 0');
            else
                $coupon->where('( start < UTC_TIMESTAMP() && end > UTC_TIMESTAMP() )');
            if ($coupon && $coupon->active)
                return true;
            else
                return false;
        }
    }

    public function checkStock()
    {
        foreach ($this->products as $product_key => $quantity) {
            $product = Product::find($product_key);
            $product->refreshStock();

            if (!$product->preorder && empty($product->stock)) {
                unset($this->products[$product_key]);
//                Yii::app()->user->setFlash('warning',$product->title.' was removed because it is out of stock');
            } elseif ($product->buyMax() < $quantity) {
                if ($product->buyMax() > 0) {
                    $this->products[$product_key] = $product->buyMax();
//                    Yii::app()->user->setFlash('warning',$product->title.' can be purchased only '.$product->buyMax().' times. Quantity was adjusted down');
                } else {
                    unset($this->products[$product_key]);
//                    Yii::app()->user->setFlash('warning','You have purchased the maximum number of '.$product->title.'. It was removed from your cart');
                }
            }
        }
    }

    public function removeHiddenProducts()
    {
        foreach ($this->products as $product_key => $quantity) {
            $product = Product::find($product_key);
            if ($product->hide_from_store) {
                unset($this->products[$product_key]);
//                Yii::app()->user->setFlash('warning',$product->title.'. is no longer available. It was removed from your cart');
            }
        }
    }

    public function checkGift()
    {
        if (!empty($this->gift_email)) {
//            $validator = new CEmailValidator();
//            if (!$validator->validateValue($this->gift_email)){
            $this->gift_email = null;
//            }
        }
    }

    public function checkCountry()
    {
        $billing_details = BillingDetail::where(['user_id' => $this->user_id])->first();
        if (!$billing_details || !$billing_details->country_code) {
//            Yii::app()->user->setFlash('warning', 'The country you selected in billing details does not match your IP. Please update your billing details in order to continue');
            return redirect('user/billingDetails');
        }
    }

//  TODO :: Validation End

    public function canBePaidWith($payment_method)
    {
        switch ($payment_method) {
            case 'paypal':
                return true;
            case 'points':
                if (auth()->user()->points >= $this->pointsPrice())
                    return true;
                else
                    return false;
            case 'credit':
                if (auth()->user()->credit >= $this->finalPrice())
                    return true;
                else
                    return false;
        }

        return false;
    }

    public function finalPrice($formatted = false, $currency = null, $withFee = false, $withVat = false)
    {
        if (empty($currency))
            $currency = auth()->user()->currency;

        $final_price = 0;
        foreach ($this->products as $product_key => $quantity) {
            $product = Product::find($product_key);
            $final_price += $quantity * $product->getFinalPrice(false, $currency);
        }

        if (!empty($this->coupon_id)) {
            $final_price = $this->applyCoupon($final_price);
        }

        if ($withFee) {
            $final_price += $this->getFee(false, $currency);
        }

        if ($withVat && $this->vat > 0) {
            $final_price += $this->getVatCharge();
        }

        if ($formatted) {
            $cn = new \NumberFormatter('en_us',1);
            return $cn->formatCurrency($final_price, $currency);
        } else {
            return $final_price;
        }
    }

    public function pointsToEarn()
    {
        $default_rate = Setting::getSetting('cashback_points_per_dollar_spent');
        $points = 0;

        foreach ($this->products as $product_id => $quantity)
        {
            $product = Product::find($product_id);
            $product->price = $product->getPrice();
            $rate = $product->cashback_points_per_dollar ? $product->cashback_points_per_dollar : $default_rate;
            $points += $product->price * $quantity * $rate;

        }

        return round($points);
    }

    public function discountAmount($formatted=false)
    {
        $amount = $this->totalPrice() - $this->finalPrice();

        if ($formatted)
        {
            $cn=new \NumberFormatter('en_us',\NumberFormatter::CURRENCY);
            return $cn->formatCurrency($amount, auth()->user()->currency);
        }
        else{
            return $amount;
        }
    }

    public function totalPrice($formatted=false)
    {
        $final_price = 0;
        foreach ($this->products as $product_key => $quantity)
        {
            $product = Product::find($product_key);
            $final_price += $quantity * $product->getFinalPrice(false);
        }

        if ($formatted)
        {
            $cn=new \NumberFormatter('en_us',\NumberFormatter::CURRENCY);
            return $cn->formatCurrency($final_price, auth()->user()->currency);
        }
        else{
            return $final_price;
        }
    }

    public function getFee($formatted=false,$currency=null)
    {
        if (empty($currency)){
            $currency = auth()->user()->currency;
        }

        if ($this->hasFee())
        {
            switch($currency)
            {
                case 'USD':
                    $fee = Setting::getSetting('min_order_fee_usd');
                    break;
                case 'EUR':
                    $fee = Setting::getSetting('min_order_fee_eur');
                    break;
                case 'GBP':
                    $fee = Setting::getSetting('min_order_fee_gbp');
                    break;
                default:
                    $fee = 0;
                    break;
            }
            if ($formatted)
            {
                $cn=new \NumberFormatter('en_us',\NumberFormatter::CURRENCY);
                return $cn->formatCurrency($fee, $currency);
            }
            else{
                return $fee;
            }
        }else{
            return 0;
        }
    }

    public function hasFee()
    {
        if ($this->minimumOrder() > $this->finalPrice()) {
            return true;
        } else {
            return false;
        }
    }

    public function minimumOrder()
    {
        switch(auth()->user()->currency)
        {
            case 'USD':
                $minimum_order = Setting::getSetting('min_order_amount_usd');
                break;
            case 'EUR':
                $minimum_order = Setting::getSetting('min_order_amount_eur');
                break;
            case 'GBP':
                $minimum_order = Setting::getSetting('min_order_amount_gbp');
                break;
            default:
                $minimum_order = 0;
                break;
        }

        return $minimum_order;
    }

    public function pointsPrice()
    {
        $points_price = 0;
        foreach ($this->products as $product_key => $quantity)
        {
            $product = Product::findOrFail($product_key);
            $product->points_price = $product->getPointsPrice();
            $points_price += $quantity * $product->points_price;
        }

        return $points_price;
    }

    public function delete()
    {
        if (empty($this->user_id)){
            if (isset($_SESSION['ICart'])){
                unset($_SESSION['ICart']);
            }
        }
        else{
            Cart::where(['user_id'=>$this->user_id])->delete();
        }
    }
//
//
//    public function getVatRate() {
//        return $this->vat;
//    }
//
//    public function addGift($gift_email)
//    {
//        $user = User::model()->findByAttributes(['username'=>$gift_email]);
//
//        if ($user){
//            $this->gift_email = $user->email;
//        }
//        else{
//            $validator = new CEmailValidator();
//            if (!$validator->validateValue($gift_email)){
//                $this->gift_email = null;
//                Yii::app()->user->setFlash('warning','Username or email were not correct');
//            }
//            else{
//                $this->gift_email = $gift_email;
//            }
//        }
//    }
//
//    public function hasGift()
//    {
//        if (!empty($this->gift_email)){
//            return true;
//        }else{
//            return false;
//        }
//    }
//
//    public function getGiftUser()
//    {
//        return User::model()->findByAttributes(['email'=>$this->gift_email]);
//    }
//
//    public function addCoupon($code){
//        $coupon = Coupon::model()->findByAttributes(['name'=>$code]);
//
//        if ($coupon && $this->validateCoupon($coupon->id)){
//            $this->coupon_id = $coupon->id;
//            Yii::app()->user->setFlash('success','Coupon successfully applied');
//        }
//        else{
//            Yii::app()->user->setFlash('warning','Coupon code invalid or expired');
//        }
//    }
//
//    public function getQuantity($product_id)
//    {
//        if (isset($this->products[$product_id]))
//        {
//            return $this->products[$product_id];
//        }
//    }
//

//
//    public function isEmpty()
//    {
//        if (count($this->products))
//            return false;
//        else
//            return true;
//    }
//

//

//

//

//    }
//

//

//

//

//
//    public function couponName()
//    {
//        if (!empty($this->coupon_id)){
//            $coupon = Coupon::model()->findByPk($this->coupon_id);
//            return $coupon->name;
//        }
//    }
//
//    private function applyCoupon($total_price)
//    {
//        if ($this->validateCoupon($this->coupon_id))
//        {
//            $coupon = Coupon::model()->findByPk($this->coupon_id);
//            if ($coupon->amount_type == 'percent'){
//                return $total_price*(100 - $coupon->amount)/100;
//            }else{
//                $final_price = $total_price - $coupon->amount;
//                return ($final_price > 0)?$final_price:0;
//            }
//        }
//    }
//

}
