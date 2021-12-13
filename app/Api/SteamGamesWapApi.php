<?php

namespace App\Api;

class SteamGamesWapApi
{
    private $api_key;
    private $api_secret;
    private $api_url;

    public function __construct()
    {
        $this->api_key = Setting::model()->findByAttributes(array('name'=>'sgs_api_key'))->value;
        $this->api_secret = Setting::model()->findByAttributes(array('name'=>'sgs_api_secret'))->value;
        $this->api_url = Setting::model()->findByAttributes(array('name'=>'sgs_api_url'))->value;
    }


    /**
     * @return array
     * @throws CHttpException
     */
    public function getGamesListData($filterUsed = false, $noDesura = true)
    {
        $service_url = $this->api_url.'index';
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'api_key'=>$this->api_key,
            'api_secret'=>$this->api_secret,
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);

       $response = json_decode($curl_response);


        if ($response->success == 1){
            $array = [];
            foreach ($response->data as $product){
                if ($filterUsed && Product::model()->findByAttributes(['sgs_product_id' => $product->id])) {
                    continue;
                }
                if ($noDesura && $product->category == 'desura') {
                    continue;
                }
                $array[$product->id] = html_entity_decode ($product->title, ENT_QUOTES | ENT_HTML5) . ' - ' . '$'.$product->cost .' - ' . $product->category . ' - Stock: ' . $product->stock;
            }
            return $array;
        }else{
            throw new CHttpException(400,$response->errors->message);
        }
    }

    public function getGamesRawData()
    {
        $service_url = $this->api_url.'index';
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'api_key'=>$this->api_key,
            'api_secret'=>$this->api_secret,
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($curl_response);


        if ($response->success == 1){
            return $response->data;
        }else{
            throw new CHttpException(400,$response->errors->message);
        }
    }

    public function getGameData($product_id)
    {
        $service_url = $this->api_url.'view/'.$product_id;
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'api_key'=>$this->api_key,
            'api_secret'=>$this->api_secret,
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($curl_response);


        if ($response->success == 1){
            return $response->data;
        }else{
            throw new CHttpException(400,$response->errors->message);
        }
    }

    public function getAccountDetails()
    {
        $service_url = $this->api_url.'accountDetails';
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'api_key'=>$this->api_key,
            'api_secret'=>$this->api_secret,
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($curl_response);

        if ($response->success == 1){
            return $response->data;
        }else{
            throw new CHttpException(400,$response->errors->message);
        }
    }

    public function buy($product_id,$quantity)
    {
        $service_url = $this->api_url.'buy/'.$product_id;
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'api_key'=>$this->api_key,
            'api_secret'=>$this->api_secret,
            'quantity'=>$quantity,
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($curl_response);

        if ($response->success == 1){
            return $response->data;
        }else {
            throw new CHttpException(400, $response->errors->message);
        }

    }
}
