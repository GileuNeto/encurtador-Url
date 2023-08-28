<?php

require __DIR__.'/vendor/autoload.php';

use \App\Models\UrlShortener;

$url = 'https://github.com/GileuNeto';

$short = UrlShortener::short($url);

echo $url."\n";
echo $short."\n";

