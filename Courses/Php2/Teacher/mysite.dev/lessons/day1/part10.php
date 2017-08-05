<?php

$f = fopen('file.txt', 'r');
$lines = [];
// fgetss == fgets с удалением тегов
while ($line = fgetss($f, 4096,'<br><strong>')) {
    $lines[] = trim($line);
}

fclose($f);

var_dump($lines);

