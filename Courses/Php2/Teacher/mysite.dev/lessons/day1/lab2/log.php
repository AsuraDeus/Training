<?php
const pathLog = __DIR__ . '/path.log';

$data = [
    time(),
    $_SERVER['REQUEST_URI'],
    $_SERVER['HTTP_REFERER'],
];

$str = implode('|', $data) . "\n";
file_put_contents(pathLog, $str, FILE_APPEND);