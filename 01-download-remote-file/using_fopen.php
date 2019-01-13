<?php

const BUFFER = 1024;

function download($remoteFile, $localFile) {
    $fremote = fopen($remoteFile, 'rb');
    if (!$fremote) {
        return false;
    }

    $flocal = fopen($localFile, 'wb');
    if (!$flocal) {
        fclose($fremote);
        return false;
    }


    while ($buffer = fread($fremote, BUFFER)) {
        fwrite($flocal, $buffer);
    }

    fclose($flocal);
    fclose($fremote);

    return true;
}

download(
    'https://raw.githubusercontent.com/petehouston/php-tips/master/README.md',
    'README.md'
);