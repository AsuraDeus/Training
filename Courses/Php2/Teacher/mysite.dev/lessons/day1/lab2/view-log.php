<?php
$pathLog = 'path.log';
$result = '';

foreach (file($pathLog) as $log) {
    [$time, $url, $referrer] = explode('|', $log);

    $result .=
        date('d-m-Y H:i:s', $time) .
        ' '
        . $url
        . ' -> '
        . $referrer
        . "<br>";
}

echo $result;