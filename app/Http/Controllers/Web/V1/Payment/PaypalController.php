<?php

namespace App\Http\Controllers\Web\V1\Payment;

use App\Http\Controllers\Controller;
use App\Repository\OrderRepositoryInterface;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function payWithPayPal(Request $request)
    {
        if ($request->payment_method == 'paypal')
        {
            return $this->orderRepository->orderByPayPal($request->payment_method);
        }else {
            return $this->orderRepository->orderByAccount($request->payment_method);
        }
    }

    public function getPaymentStatus(Request $request)
    {
        return $this->orderRepository->paypalStatus($request);
    }
}
