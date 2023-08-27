<?php

namespace App\Models;

class UrlShortener{

 
    public static function short($url){
        
        $params =[
            'url' => $url
        ];

        $response = self::send($params); 
    }

    private static function send($params=[]){
        $endpoint = 'https://ulvis.net/API/write/get?'.http_build_query($params);

        $curl = curl_init();

        curl_setopt_array($curl,[
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true, 
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        echo "<pre>";
        print_r($response);
        echo "</pre>";exit;


    }
}