<?php

namespace App\Models;

class UrlShortener{
    
    /**
     * @param string $url
     * @return string
     */
    public static function short($url){
        
        $params = [
            'url' => $url
        ];
        
        $response = self::send($params);
    
        echo '<pre>';
        print_r($response); exit;
        echo '</pre>';
    }

    /**
     * @param array $params
     * @return array
     */

    private static function send($params =[]){
        $endpoint ='https://ulvis.net/API/write/get?'.http_build_query($params);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_STDERR => fopen('php://stderr', 'w')  // Saída de erro
        ]);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        
        $response = curl_exec($curl);

        curl_close($curl);

        return strlen($response) ? json_decode($response) : [];
        
    }
     
}