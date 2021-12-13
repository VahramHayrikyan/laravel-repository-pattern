<?php
namespace App\Api;

class Kinguin
{

    public function GetProducts($page)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api2.kinguin.net/integration/v1/products?limit=100&page=$page");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

        $headers = array();
        $headers[] = "Api-Ecommerce-Auth: a8cf91b4ba4e4f26a3ab5b5625b8e45b";
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $curlResult = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $result = json_decode($curlResult);
        return $result;
    }

    public function GetCount(){
        $products = $this->GetProducts(1);
        $count = $products->item_count / 100;
        return ceil($count);
    }

    public function GetBalance()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api2.kinguin.net/integration/v1/balance");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


        $headers = array();
        $headers[] = "Api-Ecommerce-Auth: a8cf91b4ba4e4f26a3ab5b5625b8e45b";
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $curlResult = curl_exec($ch);
        $result = json_decode($curlResult);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $result;

    }

    public function GetSingleProduct($id)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api2.kinguin.net/integration/v1/products/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


        $headers = array();
        $headers[] = "Api-Ecommerce-Auth: a8cf91b4ba4e4f26a3ab5b5625b8e45b";
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $curlResult = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $result = json_decode($curlResult);
        return $result;
    }

    public function GetProductsByIds($ids)
    {
//        var_dump($ids);die();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $ids);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

        $headers = array();
        $headers[] = "Api-Ecommerce-Auth: a8cf91b4ba4e4f26a3ab5b5625b8e45b";
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $curlResult = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $result = json_decode($curlResult);

        return $result;
    }

    public function GetPageNumber($id){
        return $this->GetSingleProduct($id);
    }

    public function GetPrice($id){
        $product = $this->GetSingleProduct($id);
//        var_dump($product->price);die();
        return $product->price;
    }

    public function GetProductsList($page)
    {
        $products = $this->GetProducts($page);
        $productList = [];
        if (!empty($products)) {
            foreach ($products->results as $product) {
                if (isset($product->name)){
                    $productList[$product->kinguinId] = $product->name;
                }
                if (isset($product->platform)){
                    $productList[$product->kinguinId] .= ' - ' .$product->platform;
                }
                if (isset($product->qty)){
                    $productList[$product->kinguinId] .= ' - ' . $product->qty;
                }
                if (isset($product->regionalLimitations)){
                    $productList[$product->kinguinId] .= ' - ' . $product->regionalLimitations;
                }
                if (isset($product->price)){
                    $productList[$product->kinguinId] .= ' - ' . $product->price . 'EUR';
                }
            }
            return $productList;
        }
        return false;
    }

    public function PlaceOrder($id, $qty, $price, $name)
    {
        if (gettype($price) != 'double'){
            $price=number_format( (float) $price, 2, '.', '');
        }

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api2.kinguin.net/integration/v1/order");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
	\"products\": [
	{
		\"kinguinId\": $id,
		\"qty\": $qty,
		\"price\": $price,
		\"name\": \"$name\"
	}
	]
}");
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = "Api-Ecommerce-Auth: a8cf91b4ba4e4f26a3ab5b5625b8e45b";
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $curlResult = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $result = json_decode($curlResult);
        return $result;
    }

    public function DispatchOrder($id)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api2.kinguin.net/integration/v1/order/dispatch");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"orderId\": \"$id\"}");
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = "Api-Ecommerce-Auth: a8cf91b4ba4e4f26a3ab5b5625b8e45b";
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $curlResult = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $result = json_decode($curlResult);
        return $result;
    }

    public function GetSerialKeys($id)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api2.kinguin.net/integration/v1/order/dispatch/keys?dispatchId=$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


        $headers = array();
        $headers[] = "Api-Ecommerce-Auth: a8cf91b4ba4e4f26a3ab5b5625b8e45b";
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $curlResult = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $result = json_decode($curlResult);
        return $result;
    }

    public function SerialKey($id, $qty)
    {

        $product = $this->GetSingleProduct($id);
        $name = $product->name;

//        $file = 'protected/tests/kinguin_logs.txt';
//
//        var_dump( chmod('protected/tests/kinguin_logs.txt', 0755) );
//
//        $date = date('Y-m-d H:i:s');
//        if($name = $product->name){
//            $current = file_get_contents($file);
//            $current .= $date." Current product".$id."successfully get from Kinguin  ip";
//            file_put_contents($file, $current);
//        }else{
//            $current = file_get_contents($file);
//            $current .= $date." Current product".$id."didnt find in Kinguin  ip";
//            file_put_contents($file, $current);
//        }


        $price = $product->price;
        $place_order = $this->PlaceOrder($id, $qty, $price, $name);
        $orderId = $place_order->orderId;
        $dispatch_order = $this->DispatchOrder($orderId);
        $dispatchId = $dispatch_order->dispatchId;
        $getSerialKeys = $this->GetSerialKeys($dispatchId);
        return $getSerialKeys;
//        $serialKey = $getSerialKeys->serial;
//        $keyType = $getSerialKeys->type;

    }

    public function GetUpdatedProducts(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://staging2.opiumpulses.com/site/postbackNotification');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"kinguinId\": 4,\"updatedAt\": \"2018-10-31T11:31:13+00:00\"}");
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);
        return $result;
    }

    public function write($code, $whereToSaveDirectory, $fileName)
    {

        if (!file_exists($whereToSaveDirectory)) {
            mkdir($whereToSaveDirectory, 0755, true);
        }

        $whereToSaveDirectory .= "/" . $fileName;

        $imageData = base64_decode($code->serial);
        $success = file_put_contents($whereToSaveDirectory, $imageData);

        return $whereToSaveDirectory;
    }

}
