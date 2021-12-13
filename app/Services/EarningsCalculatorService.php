<?php


namespace App\Services;


use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;

class EarningsCalculatorService
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

//
//    public function totalSales($publisher_id, $product_id = null)
//    {
//        $orderProduct = OrderProduct::where(function ($q) use ($publisher_id,$product_id) {
//            $q->where([
//                ['publisher_id', $publisher_id],
//                ['status', 'finished'],
//            ])->when($product_id, function ($q) use ($product_id) {
//                $q->where('product_id', $product_id);
//            });
//        })->select('SUM(quantity) as publisherSales')->first();
//
//
//        $criteria = new CDbCriteria();
//        $criteria->compare('publisher_id', $this->publisher_id);
//        if ($this->product) {
//            $criteria->compare('product_id', $this->product->id);
//        }
//        $criteria->compare('status', 'finished');
//        $criteria->compare('publisher_id', $this->publisher_id);
//        $criteria->select = 'sum(quantity) as publisherSales';
//        $orderProduct = OrderProduct::model()->find($criteria);
//
//        return empty($orderProduct->publisherSales) ? 0 : $orderProduct->publisherSales;
//    }
//
//    public function totalRevenueByCurrency($currency)
//    {
//        $criteria = new CDbCriteria();
//        $criteria->join = 'INNER JOIN `order` ON `order`.id = `t`.order_id';
//        $criteria->addCondition("`order`.currency = '$currency'");
//        if ($this->publisher_id) {
//            $criteria->compare('publisher_id', $this->publisher_id);
//        }
//        if ($this->product) {
//            $criteria->compare('product_id', $this->product->id);
//        }
//        $criteria->compare('t.status', 'finished');
//        $criteria->select = 'sum(price_each) * quantity as publisherEarnings';
//
//        $orderProduct = OrderProduct::model()->find($criteria);
//
//        return empty($orderProduct->publisherEarnings) ? 0 : $orderProduct->publisherEarnings;
//    }
//
//    public function salesPerMonth($months = 12)
//    {
//        $results = [];
//
//        for ($i = 0; $i < $months; $i++) {
//            // First run
//            if ($i == 0) {
//                $current_month = new Moment\Moment();
//            } else {
//                $current_month = $current_month->subtractDays(32);
//            }
//
//            $start_of_month = $current_month->startOf('month')->format('Y-m-d H:i:s');
//            $end_of_month = $current_month->endOf('month')->format('Y-m-d H:i:s');
//            $criteria = new CDbCriteria();
//            $criteria->compare('publisher_id', $this->publisher_id);
//            if ($this->product) {
//                $criteria->compare('product_id', $this->product->id);
//            }
//            $criteria->compare('status', 'finished');
//            $criteria->compare('publisher_id', $this->publisher_id);
//            $criteria->select = 'sum(quantity) as publisherSales';
//            $criteria->addCondition('date_finished >= "' . $start_of_month . '" AND date_finished <= "' . $end_of_month . '"');
//
//            $orderProduct = OrderProduct::model()->find($criteria);
//            $results[$i] = [
//                'month' => $current_month->format('Y-m'),
//                'sales' => empty($orderProduct->publisherSales) ? 0 : $orderProduct->publisherSales
//            ];
//        }
//
//        return $results;
//    }
//
//    public function salesPerMonthChart($months = 12)
//    {
//        $results = $this->salesPerMonth($months);
//
//        $data = [];
//        $legend = [];
//        foreach ($results as $key => $result) {
//            $data[$key] = $result['sales'];
//            $legend[$key] = $result['month'];
//        }
//
//        $chart = new Chart('line', 'Product_Sales_Per_Month');
//        $chart->set('data', array_reverse($data));
//        $chart->set('legend', array_reverse($legend));
//        $chart->set('scaleStartValue', 0);
//
//        return $chart;
//    }
//
//    public function revenuePerMonth($months = 12)
//    {
//        $results = [];
//
//        for ($i = 0; $i < $months; $i++) {
//            // First run
//            if ($i == 0) {
//                $current_month = new Moment\Moment();
//            } else {
//                $current_month = $current_month->subtractDays(32);
//            }
//
//            $start_of_month = $current_month->startOf('month')->format('Y-m-d H:i:s');
//            $end_of_month = $current_month->endOf('month')->format('Y-m-d H:i:s');
//            $earnings = 0;
//            foreach (['USD', 'GBP', 'EUR'] as $currency) {
//                $criteria = new CDbCriteria();
//                $criteria->join = 'INNER JOIN `order` ON `order`.id = `t`.order_id';
//                $criteria->compare('order.currency', $currency);
//                $criteria->compare('order.payment_method', 'paypal');
//                if ($this->publisher_id) {
//                    $criteria->compare('publisher_id', $this->publisher_id);
//                }
//                if ($this->product) {
//                    $criteria->compare('product_id', $this->product->id);
//                }
//                $criteria->compare('t.status', 'finished');
//                $criteria->compare('publisher_id', $this->publisher_id);
//                $criteria->select = 'sum(price_each) * quantity as publisherEarnings';
//                $criteria->addCondition('date_finished >= "' . $start_of_month . '" AND date_finished <= "' . $end_of_month . '"');
//                $orderProduct = OrderProduct::model()->find($criteria);
//                $amount = empty($orderProduct->publisherEarnings) ? 0 : $orderProduct->publisherEarnings;
//                switch ($currency) {
//                    case 'GBP':
//                        $earnings += $amount;
//                        break;
//                    case 'USD':
//                        if (!empty($amount)) {
//                            $earnings += ICurrency::convert($amount, 'GBP');
//                        }
//                        break;
//                    case 'EUR':
//                        $usd = $amount / ICurrency::getRate('EUR');
//                        $gbp = ICurrency::convert($usd, 'GBP');
//                        $earnings += $gbp;
//                        break;
//                }
//            }
//
//            $results[$i] = [
//                'month' => $current_month->format('Y-m'),
//                'earnings' => sprintf('%.2f', $earnings)
//            ];
//        }
//        return $results;
//    }
//
//    public function revenuePerMonthChart($months = 12)
//    {
//        $results = $this->revenuePerMonth($months);
//
//        $data = [];
//        $legend = [];
//        foreach ($results as $key => $result) {
//            $data[$key] = $result['earnings'];
//            $legend[$key] = $result['month'];
//        }
//
//        $chart = new Chart('line', 'Product_Earnings_Per_Month');
//        $chart->set('data', array_reverse($data));
//        $chart->set('legend', array_reverse($legend));
//        $chart->set('scaleStartValue', 0);
//
//        return $chart;
//    }
//
//    public function totalPublisherPayments()
//    {
//        $criteria = new CDbCriteria();
//        $criteria->compare('publisher_id', $this->publisher_id);
//        $criteria->compare('status', 'paid');
//        $criteria->select = 'sum(amount) as totalPayments';
//
//        $payments = PublisherPayment::model()->find($criteria);
//        return empty($payments->totalPayments) ? 0 : $payments->totalPayments;
//    }
//
//    public function opRevenuePerMonth($months = 12)
//    {
//        $results = [];
//
//        for ($i = 0; $i < $months; $i++) {
//            // First run
//            if ($i == 0) {
//                $current_month = new Moment\Moment();
//            } else {
//                $current_month = $current_month->subtractDays(32);
//            }
//
//            $start_of_month = $current_month->startOf('month')->format('Y-m-d H:i:s');
//            $end_of_month = $current_month->endOf('month')->format('Y-m-d H:i:s');
//            $earnings = 0;
//            foreach (['USD', 'GBP', 'EUR'] as $currency) {
//                $criteria = new CDbCriteria();
//                $criteria->compare('currency', $currency);
//                $criteria->compare('payment_method', 'paypal');
//                $criteria->addCondition('t.status != "unpaid"');
//                $criteria->select = 'sum(total_price) as revenue';
//                $criteria->addCondition('timestamp >= "' . $start_of_month . '" AND timestamp <= "' . $end_of_month . '"');
//                $order = Order::model()->find($criteria);
//                $amount = empty($order->revenue) ? 0 : $order->revenue;
//                switch ($currency) {
//                    case 'GBP':
//                        $earnings += $amount;
//                        break;
//                    case 'USD':
//                        if (!empty($amount)) {
//                            $earnings += ICurrency::convert($amount, 'GBP');
//                        }
//                        break;
//                    case 'EUR':
//                        $usd = $amount / ICurrency::getRate('EUR');
//                        $gbp = ICurrency::convert($usd, 'GBP');
//                        $earnings += $gbp;
//                        break;
//                }
//            }
//
//            $results[$i] = [
//                'month' => $current_month->format('Y-m'),
//                'earnings' => sprintf('%.2f', $earnings)
//            ];
//        }
//        return $results;
//    }
//
//    public function opRevenuePerMonthChart($months = 12)
//    {
//        $results = $this->opRevenuePerMonth($months);
//
//        $data = [];
//        $legend = [];
//        foreach ($results as $key => $result) {
//            $data[$key] = $result['earnings'];
//            $legend[$key] = $result['month'];
//        }
//
//        $chart = new Chart('line', 'Product_Earnings_Per_Month');
//        $chart->set('data', array_reverse($data));
//        $chart->set('legend', array_reverse($legend));
//        $chart->set('scaleStartValue', 0);
//
//        return $chart;
//    }

}
