<?php

namespace App\Models;

class UrlShortener{

 
    public static function short($url){
        
        $params =[
            'url' => $url
        ];

        $response = self::send($params);
        echo "<pre>";
        print_r($response);
        echo "</pre>";exit;

    }

    private static function send($params=[]){
        $endpoint = 'https://ulvis.net/API/write/get?'.http_build_query($params) ;

        echo "<pre>";
        print_r($endpoint);
        echo "</pre>";exit;

        $curl = curl_init();
    }
}