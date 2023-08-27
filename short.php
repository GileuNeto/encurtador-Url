<?php

require __DIR__.'/vendor/autoload.php';

use \App\Models\UrlShortener;

$url = 'https://youtube.com';

$short = UrlShortener::short($url);

echo $url."\n";
echo $short."\n";

