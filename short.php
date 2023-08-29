<?php
require '/Wamp/www/encurtadorUrl/laravel/vendor/autoload.php';

use \App\Models\UrlShortener;

$url = 'https://github.com/GileuNeto';

$short = UrlShortener::short($url);

echo $short;
