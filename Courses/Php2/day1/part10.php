<?php

$f= fopen('file.txt','r');
$bytes=[];

while(!feof($f)){
    $bytes[]= fgetc($f);
}

fclose($f);
var_dump($bytes);