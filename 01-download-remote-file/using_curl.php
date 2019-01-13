<?php

$ch = curl_init('https://raw.githubusercontent.com/petehouston/php-tips/master/README.md');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
curl_close($ch);

file_put_contents(
    'README.md',
    $response
);