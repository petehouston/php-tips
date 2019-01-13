<?php

$contents = file_get_contents(
    'https://raw.githubusercontent.com/petehouston/php-tips/master/README.md'
);

file_put_contents(
    'README.md',
    $contents
);