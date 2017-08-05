<?php

// $f = fopen('file.txt', 'r');
// $file = fread($f, filesize('file.txt'));
// fclose($f);

// Получить весь файл в строчку
$file = file_get_contents('file.txt');

var_dump($file);