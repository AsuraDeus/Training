<?php

$file = 'file.txt';

// $f = fopen($file, 'r');
// while ($lines[] = fgets($f));
// fclose($f);

$lines = file($file); // Прочитать файл построчно в массив

var_dump($lines);
