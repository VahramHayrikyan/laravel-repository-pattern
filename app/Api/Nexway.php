<?php

class Nexway
{

    public function Authentication()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nexway.store/iam/tokens",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{
    "clientSecret": "6dc93d46-5621-484c-be03-95239ab2b6e4",
    "grantType": "client_credentials",
    "realmName": "opiumpulses"
}',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
            ),
        ));

        $response = curl_exec($curl);

        $result = json_decode($response);

        return $result;
    }

    public function GetProductsList(){

        $gb_url = $this->GetSetting('nexway_products_gb');
        $xe_url = $this->GetSetting('nexway_products_xe');
        $us_url = $this->GetSetting('nexway_products_us');
        $latam_url = $this->GetSetting('nexway_products_latam');
        $productList=$this->fillProducts(['url'=>$gb_url,'name'=>",GB"]);
        $productList=$this->mergeProducts($productList,",XE",['url'=>$xe_url,'name'=>',XE'],",GB");
        $productList=$this->mergeProducts($productList,",US",['url'=>$us_url,'name'=>',US'],",GB");
        $productList=$this->mergeProducts($productList,",US",['url'=>$us_url,'name'=>',US'],",XE");
        $productList=$this->mergeProducts($productList,",US",['url'=>$us_url,'name'=>',US'],",GB,XE");
        $productList=$this->mergeProducts($productList,",LATAM",['url'=>$latam_url,'name'=>',LATAM'],",XE");
        $productList=$this->mergeProducts($productList,",LATAM",['url'=>$latam_url,'name'=>',LATAM'],",US");
        $productList=$this->mergeProducts($productList,",LATAM",['url'=>$latam_url,'name'=>',LATAM'],",GB,XE");
        $productList=$this->mergeProducts($productList,",LATAM",['url'=>$latam_url,'name'=>',LATAM'],",GB,US");
        $productList=$this->mergeProducts($productList,",LATAM",['url'=>$latam_url,'name'=>',LATAM'],",XE,US");
        $productList=$this->mergeProducts($productList,",LATAM",['url'=>$latam_url,'name'=>',LATAM'],",GB,XE,US");
        asort($productList);

        return $productList;
    }

    public function file_get_contents_chunked($file,$chunk_size,$callback)
    {
        try
        {
            $handle = fopen($file, "r");
            $i = 0;
            while (!feof($handle))
            {
                call_user_func_array($callback,array(fread($handle,$chunk_size),&$handle,$i));
                $i++;
            }

            fclose($handle);

        }
        catch(Exception $e)
        {
            trigger_error("file_get_contents_chunked::" . $e->getMessage(),E_USER_NOTICE);
            return false;
        }

        return true;
    }

    public function CreateOrder($id, $qty, $number, $product_id,$feed,$iso){

//        $RegionLimitation = NexwayRegionLimitation::model()->findByAttributes(['product_id' => $product_id,'nexway_feed' => $feed]);
        $list = NexwayRegionList::model()->findByAttributes(['feed' => $feed]);
        $iso = strtoupper($iso);
        $secret_name = "nexway_secret_" . $feed;
//        $language = 'en_' . $RegionLimitation->nexway_feed;
        if ($feed == 'GB'){
            $language = 'en_' . $feed;
        }elseif ($feed == 'XE'){
            $language = 'en_' . $feed;
        }
        else{
            $language = 'en_US';
        }
        $secret = $this->GetSetting($secret_name);
        $token = $this->Authentication()->access_token;
        $email = $number . '@opiumpulses.com';

        $folder = Yii::getPathOfAlias('webroot') . '/protected/nexway_files/';

        if (!is_dir($folder)) {
            mkdir($folder);
        }

        $fileName = $folder . 'emails.txt';
        $handle = fopen($fileName, 'a+');
        fwrite($handle, print_r($email, true));
        fclose($handle);


        $curl = curl_init();


        if ($iso == 'BR'){
            $province = 'BR-DF';
        }elseif ($iso == 'US'){
            $province = 'US-NY ';
        }elseif ($iso == 'CA'){
            $province = 'CA-ON';
        }elseif ($iso == 'AU'){
            $province = 'AU-SA';
        }else{
            $province = null;
        }

        if ($province != null){
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.nexway.store/connect/order/new",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,

                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => '{
    "currency": "' . $list->currency . '",
    "customer": {
        "email": "' . $email . '",
        "ipV4": "127.0.0.1",
        "ipV6": "2001:0db8:0000:85a3:0000:0000:ac1f:8001",
        "language": "' . $language . '",
        "locationDelivery": {
            "address1": "11 Bis Avenue Gabriel Péri",
            "address2": "XXXXXXXXXX",
            "city": "XXXXXXXXXX",
            "companyName": "XXXXXXXXXX",
            "country": "' . $iso . '",
            "fax": "XXXXXXXXXX",
            "firstName": "XXXXXXXXXX",
            "lastName": "XXXXXXXXXX",
            "phone": "XXXXXXXXXX",
            "title": "1",
            "zipCode": "XXXXXXXXXX",
            "province": "' . $province . '"
        },
        "locationInvoice": {
            "address1": "XXXXXXXXXX",
            "address2": "XXXXXXXXXX",
            "city": "XXXXXXXXXX",
            "companyName": "XXXXXXXXXX",
            "country": "' . $iso . '",
            "fax": "XXXXXXXXXX",
            "firstName": "XXXXXXXXXX",
            "lastName": "XXXXXXXXXX",
            "phone": "XXXXXXXXXX",
            "title": "1",
            "zipCode": "XXXXXXXXXX",
            "province": "' . $province . '"

        },
        "partnerId": "' . $number . '"
    },
    "marketingProgramId": "' . $number . '",
    "orderDate": "2004-02-12T15:19:21+00:00",
    
    "partnerOrderNumber": "' . $number . '",
    "payment": {
        "paymentMethod": "External Payment"
    },
    "orderLines":[
     {
        "productRef": "' . $id . '",
        "quantity": "' . $qty . '"
    }
    ]
}',
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "secret: $secret",
                    "Authorization: Bearer $token"

                ),
            ));
        }else{
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.nexway.store/connect/order/new",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,

                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => '{
    "currency": "' . $list->currency . '",
    "customer": {
        "email": "' . $email . '",
        "ipV4": "127.0.0.1",
        "ipV6": "2001:0db8:0000:85a3:0000:0000:ac1f:8001",
        "language": "' . $language . '",
        "locationDelivery": {
            "address1": "11 Bis Avenue Gabriel Péri",
            "address2": "XXXXXXXXXX",
            "city": "XXXXXXXXXX",
            "companyName": "XXXXXXXXXX",
            "country": "' . $iso . '",
            "fax": "XXXXXXXXXX",
            "firstName": "XXXXXXXXXX",
            "lastName": "XXXXXXXXXX",
            "phone": "XXXXXXXXXX",
            "title": "1",
            "zipCode": "XXXXXXXXXX"
        },
        "locationInvoice": {
            "address1": "XXXXXXXXXX",
            "address2": "XXXXXXXXXX",
            "city": "XXXXXXXXXX",
            "companyName": "XXXXXXXXXX",
            "country": "' . $iso . '",
            "fax": "XXXXXXXXXX",
            "firstName": "XXXXXXXXXX",
            "lastName": "XXXXXXXXXX",
            "phone": "XXXXXXXXXX",
            "title": "1",
            "zipCode": "XXXXXXXXXX"
        },
        "partnerId": "XXXXXXX"
    },
    "marketingProgramId": "' . $number . '",
    "orderDate": "2004-02-12T15:19:21+00:00",
    
    "partnerOrderNumber": "' . $number . '",
    "payment": {
        "paymentMethod": "External Payment"
    },
    "orderLines":[
     {
        "productRef": "' . $id . '",
        "quantity": "' . $qty . '"
    }
    ]
}',
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "secret: $secret",
                    "Authorization: Bearer $token"

                ),
            ));
        }

        $response = curl_exec($curl);

        $result = json_decode($response);

//        var_dump($response);die();

        return $result;
    }

    public function GetOrderData($id, $feed){
//        $RegionLimitation = NexwayRegionLimitation::model()->findByAttributes(['product_id' => $product_id]);
        $secret_name = "nexway_secret_" . $feed;
        $secret = $this->GetSetting($secret_name);

        $token = $this->Authentication()->access_token;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nexway.store/connect/order/$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,

            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
      
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "secret: $secret",
                "Authorization: Bearer $token"

            ),
        ));

        $response = curl_exec($curl);

        $result = json_decode($response);

        return $result;
    }

    public function GetDownloadInformation($id){
        $token = $this->Authentication()->access_token;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-uat.staging.nexway.build/connect/order/{$id}/download",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,

            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            "Content-Type: application/json",
                            "secret: gix6Wv69fE",
                            "Authorization: Bearer $token"
            ),
        ));

        $response = curl_exec($curl);

        $result = json_decode($response);

        return $result;
    }

    public function GetStockInfoForProducts($id){
        $token = $this->Authentication()->access_token;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-uat.staging.nexway.build/connect/stock",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,

            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{ 
            "productRefs": [
        "' . $id . '"
    ]  }',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "secret: gix6Wv69fE",
                "Authorization: Bearer $token"

            ),
        ));

        $response = curl_exec($curl);

        $result = json_decode($response);

//        var_dump($response);die();

        return $result;
    }

    public function CancelOrder(){
        $token = $this->Authentication()->access_token;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-uat.staging.nexway.build/connect/order/cancel",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,

            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => '{
    "comment": "XXXXXX",
    "partnerOrderNumber": "XXXXXXXXXXXXX",
    "reasonCode": 2
}',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "secret: gix6Wv69fE",
                "Authorization: Bearer $token"
            ),
        ));

        $response = curl_exec($curl);

        $result = json_decode($response);

        return $result;
    }

    public function GetUpSellProductsForOrder(){
        $token = $this->Authentication()->access_token;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-uat.staging.nexway.build/connect/order/crossupsell",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,

            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{
    "language": "EN",
    "products": [
        {
            "productRef": "668678",
            "quantity": "1"
        }
    ]
}',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "secret: gix6Wv69fE",
                "Authorization: Bearer $token"

            ),
        ));

        $response = curl_exec($curl);

        $result = json_decode($response);

//        var_dump($response);die();

        return $result;
    }

    public function GetSetting($name){
        $setting = Setting::model()->findByAttributes(array('name'=>$name));
        return $setting->value;
    }

    public function fillProducts($url,$check=false)
    {
            if (($h = fopen($url['url'], "r")) !== FALSE)
            {
                while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
                {
                    if ($data[7] == 1){
                        $value = $data[8];
                        $productList[$value.$url['name']] = $data[1] . ' - ' . $data[8]. ' - ' . $data[2]  . ' - ' . $data[3] .  ' - 4.7 - '.$url['name'];

                    }
                }
                fclose($h);
            }
            return $productList;
    }

    public function mergeProducts($productList,$name,$url,$checkName)
    {
        if (($h = fopen($url['url'], "r")) !== FALSE)
        {
            while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
            {
                if ($data[7] == 1){
                    $value = $data[8];
                    if(array_key_exists($value.$checkName,$productList)){
                        $productList[$value.$checkName.$name]=$productList[$value.$checkName] . $name;
                        unset($productList[$value.$checkName]);
                    }else{
                        $productList[$value.$url['name']] = $data[1] . ' - ' . $data[8]. ' - ' . $data[2]  . ' - ' . $data[3] .  ' - 4.7 - '.$url['name'];
                    }
                }

            }
            fclose($h);
        }
        return $productList;
    }

}