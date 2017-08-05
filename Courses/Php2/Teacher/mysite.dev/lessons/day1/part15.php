<?php
$file = 'file.txt';

// $f = fopen($file, 'r');
// echo fread($f, filesize($file));
// fclose($f);

// Читать весь файл напрямую в буфер вывода
readfile($file);