<?php

$f = fopen('file.txt', 'r') or die('Не могу открыть файл');

echo fread($f, 5);
echo fread($f, 3);
fpassthru($f);

fclose($f);