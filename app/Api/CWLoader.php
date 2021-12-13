<?php

namespace App\Api;

class CWLoader{
    static function load(){
        // obsolete
    }

    static function getClient(){
        $testMode = Setting::getSetting('cw_test_mode');
        if ($testMode == 'sandbox'){
            $params = array(
                /**
                 * API Keys
                 * These are common api keys, you can use it to test integration.
                 */
                'cw.client_id' => 'ff72ce315d1259e822f47d87d02d261e',
                'cw.client_secret' => '$2a$10$E2jVWDADFA5gh6zlRVcrlOOX01Q/HJoT6hXuDMJxek.YEo.lkO2T6',
                /**
                 * CodesWholesale ENDPOINT
                 */
                'cw.endpoint_uri' => \CodesWholesale\CodesWholesale::SANDBOX_ENDPOINT,
                /**
                 * Due to security reasons you should use SessionStorage only while testing.
                 * In order to go live you should change it do database storage.
                 */
                'cw.token_storage' => new \fkooman\OAuth\Client\SessionStorage()
            );
        }
        else{
            // Fill the params from database
            $client_id = Setting::model()->getSetting('cw_client_id');
            $client_secret = Setting::model()->getSetting('cw_client_secret');
            $params = array(
                /**
                 * API Keys
                 * These are common api keys, you can use it to test integration.
                 */
                'cw.client_id' => $client_id,
                'cw.client_secret' => $client_secret,
                /**
                 * CodesWholesale ENDPOINT
                 */
                'cw.endpoint_uri' => \CodesWholesale\CodesWholesale::LIVE_ENDPOINT,
                /**
                 * Due to security reasons you should use SessionStorage only while testing.
                 * In order to go live you should change it do database storage.
                 */
                'cw.token_storage' => new \fkooman\OAuth\Client\SessionStorage()
            );
        }

        $clientBuilder = new \CodesWholesale\ClientBuilder($params);
        return $clientBuilder->build();
    }

    static function getLiveClient(){
        // Fill the params from database
        $client_id = Setting::model()->getSetting('cw_client_id');
        $client_secret = Setting::model()->getSetting('cw_client_secret');
        $params = array(
            /**
             * API Keys
             * These are common api keys, you can use it to test integration.
             */
            'cw.client_id' => $client_id,
            'cw.client_secret' => $client_secret,
            /**
             * CodesWholesale ENDPOINT
             */
            'cw.endpoint_uri' => \CodesWholesale\CodesWholesale::LIVE_ENDPOINT,
            /**
             * Due to security reasons you should use SessionStorage only while testing.
             * In order to go live you should change it do database storage.
             */
            'cw.token_storage' => new \fkooman\OAuth\Client\SessionStorage()
        );

        $clientBuilder = new \CodesWholesale\ClientBuilder($params);
        return $clientBuilder->build();
    }
}

