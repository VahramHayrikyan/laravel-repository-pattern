<?php


namespace App\Repository;


interface OrderRepositoryInterface
{
    public function orderByPayPal($payment);

    public function paypalStatus($request);

    public function orderByAccount($request);

}
