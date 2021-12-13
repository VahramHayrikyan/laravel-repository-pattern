<?php

class DLCSoft
{



    public function Authentication(){

//        $client_id = $this->GetSetting('dlcsoft_client_id');
//        $client_secret = $this->GetSetting('dlcsoft_client_secret');
//        $text = 'client_id=opiumpulse-test&client_secret=xK8r4OiyzOTJbYWJgYDL';
//        $client_id = 'opiumpulse-test';
//        $hash = hash("sha256",$text,false);


//        $client_id = "opiumpulse";//$this->GetSetting('dlcsoft_client_id');
//        $client_secret = "7kQnDHTtK1o4i2fWyVc7";//$this->GetSetting('dlcsoft_client_secret');

// first state **
        $client_secret = Setting::getSetting('dlcsoft_client_secret');
        $client_id = Setting::getSetting('dlcsoft_client_id');
        $text = "client_id=$client_id&client_secret=$client_secret";
        $client_id = 'opiumpulse';
        $hash = hash("sha256", $text,false);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.dlcsoft.co.uk/authenticate",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{ "client_id": "' . $client_id . '", "hash": "' . $hash . '" }',
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $data     = json_decode($response)->data;

        return $data;
    }

    public function GetProductsList(){

        $auth = $this->Authentication();
        if (isset($auth->token)){
            $token = $auth->token;
        }else{
            return [];
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.dlcsoft.co.uk/products",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer $token"
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);

        $productList = [];
        if (!empty($response->data)) {
            foreach ($response->data as $product) {
                $productList[$product->product_id] = $product->title;
            }
            return $productList;
        }
    }

    public function requestCode($product_id, $token){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.dlcsoft.co.uk/products/$product_id/request-code",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer $token"
            ),
        ));

        $response = curl_exec($curl);
        $folder = Yii::getPathOfAlias('webroot') . '/protected/dlc/';
        if (!is_dir($folder)) {
            mkdir($folder);
        }

        $fileName = $folder . $product_id. 'token' . date('Y-m-d') . '.txt';
        $handle = fopen($fileName, 'a+');
        fwrite($handle, print_r(json_decode($response)), true);
        fclose($handle);
        return $response;
    }


    public function testingAction() {

//        $client_id     = $this->GetSetting('dlcsoft_client_id');
//        $client_secret = $this->GetSetting('dlcsoft_client_secret');
//        $arr = [];
//        $arr[] = $client_id;
//        $arr[] = $client_secret;

//        $product_id = "494";
        $token = $this->Authentication();

        return $token;//json_decode($this->claimCode($product_id, $token->token));

    }

    public function claimCode( $product_id,$token ){

        $receipt_token = json_decode($this->requestCode($product_id,$token))->data->receipt_token;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.dlcsoft.co.uk/claim-code",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PATCH",
            CURLOPT_POSTFIELDS => '{ "receipt_token": "' . $receipt_token . '" }',
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer $token"
            ),
        ));

        $response = curl_exec($curl);

        if (json_decode($response)->status == "OK"){

            $encryptedCode = json_decode($response)->data->encrypted_code;

            $secretIV = $this->GetSetting('dlcsoft_client_id');
            $secretKey = $this->GetSetting('dlcsoft_client_secret');

            $decodedCode = base64_decode( $encryptedCode );
            $cipher = 'AES-256-CBC';
            $keysize = openssl_cipher_iv_length( $cipher ); // = 16

            $keyHash = hash( 'sha256' , $secretKey, false );
            $hash = hash( 'sha256' , $secretIV, false );
            $ivHash = substr( $hash, 0, $keysize );

            $decryptedCode = openssl_decrypt( $decodedCode, $cipher, $keyHash, 0, $ivHash );

            return $decryptedCode;

        }else{

            $folder = Yii::getPathOfAlias('webroot') . '/protected/dlc/';
            if (!is_dir($folder)) {
                mkdir($folder);
            }

            $fileName = $folder . $product_id . date('Y-m-d') . '.txt';
            $handle = fopen($fileName, 'a+');
            fwrite($handle, print_r(json_decode($response)), true);
            fclose($handle);
            return false;
        }


         // was commented area ->>

//        $encryptedCode = json_decode($response)->data->encrypted_code;
//
//        $secretIV = $this->GetSetting('dlcsoft_client_id');
//        $secretKey = $this->GetSetting('dlcsoft_client_secret');
//        $decodedCode = base64_decode( $encryptedCode );
//        $cipher = 'AES-256-CBC';
//        $keysize = openssl_cipher_iv_length( $cipher ); // = 16
//
//        $keyHash = hash( 'sha256' , $secretKey, false );
//        $hash = hash( 'sha256' , $secretIV, false );
//        $ivHash = substr( $hash, 0, $keysize );
//
//        $decryptedCode = openssl_decrypt( $decodedCode, $cipher, $keyHash, 0, $ivHash );
//
//        return $decryptedCode;

        // was commented area <<-

    }


    public function GetSetting($name){
        $setting = Setting::model()->findByAttributes(array('name'=>$name));
        return $setting->value;
    }

}
