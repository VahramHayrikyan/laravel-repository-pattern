<?php


namespace App\Api;

use App\Models\ExchangeRate;
use Illuminate\Support\Facades\Log;

class ICurrency
{
    static function updateCurrency($currencies)
    {
            $endpoint = 'latest';
            $access_key = '5a389481119b05c5aa0db55015e2f678';
            $base = 'USD';
            $symbols = $currencies;

            // initialize CURL:
            $ch = curl_init('https://data.fixer.io/api/' . $endpoint . '?access_key=' . $access_key . '&base=' . $base . '&symbols=' .$symbols . '');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // get the JSON data:
            $json = curl_exec($ch);
            curl_close($ch);

            // Decode JSON response:
            $conversionResult = json_decode($json, true);

        // access the conversion result
        $rates = $conversionResult['rates'];
        $updated = $notUpdated = 0;
            foreach ($rates as $currency =>  $value) {

                try {
                if($exchangeRate = ExchangeRate::where(['name' => $currency])->first()) {
                        // save to base
                        $exchangeRate->rate = $value;
                        if (!$exchangeRate->save()) {
                            foreach ($exchangeRate->errors as $error) {
//                                Yii::log("Exchange Rate could not be saved: Errors:" . implode(',', $error));
                            }
                            $notUpdated++;
                        } else {
//                            Yii::log("Exchange Rate of {$currency} has been updated to {$value}");
                            $updated++;
                        }
                }

                }catch (\Exception $exception){
                    $message = "Couldn't update currency: $currency <br>
 Action: AdminController->actionUpdateCurrencies()";
                    Log::error($exception);
//                    IwebEmail::send(Yii::app()->params['adminEmail'],'avetisyanedm@gmail.com', 'Currency update error' ,$message);
                }
            }

        Log::info("Updated currencies : $updated, Not updated: $notUpdated");
    }


    static function getRate($currency)
    {
        $exchangeRate = ExchangeRate::model()->findByAttributes(['name'=>$currency]);
        if(isset($exchangeRate->rate)){
            return $exchangeRate->rate;
        }
        return false;
    }

    static function convert($amount, $currency)
    {
        if (!in_array($currency,['EUR','GBP','USD'])){
            throw new CHttpException(404,"Invalid currency requested");
        }

        if ($currency == 'USD'){
            return $amount;
        }

        $exchangeRate = ExchangeRate::model()->findByAttributes(['name'=>$currency]);

        return sprintf('%0.2f',$exchangeRate->rate * $amount);
    }

    static function priceFormat($amount, $currency)
    {
        if ($currency == 'POINTS'){
            return round($amount).' Points';
        }

        $cn=new CNumberFormatter('en_us');

        return $cn->formatCurrency($amount, $currency);
    }

    static function integerFormat($amount)
    {
        $cn = new CNumberFormatter('en_us');
        return $cn->format('###,###,##0',$amount);
    }

    static function convertAndFormat($amount,$currency=null)
    {
        if (empty($currency)){
            $currency = Yii::app()->user->currency;
        }

        $converted_amount = self::convert($amount,$currency);

        return ICurrency::priceFormat($converted_amount,$currency);
    }

    static function defaultCurrency()
    {
        if (isset($_SERVER['HTTP_CF_IPCOUNTRY'])) {
            $country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];
            $eur_countries = [
                'AT', 'BE', 'CY', 'EE', 'FI', 'FR', 'DE', 'GR', 'IE', 'IT',
                'LV', 'LT', 'LU', 'MT', 'NL', 'PT', 'SK', 'SI', 'ES'
            ];
            if ($country_code == 'GB') return 'GBP';
            if (in_array($country_code, $eur_countries)) return 'EUR';
        }

        //default
        return 'USD';
    }

}
