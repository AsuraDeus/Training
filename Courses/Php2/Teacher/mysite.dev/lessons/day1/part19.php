<?php

// $f = fopen('file.txt', 'a');
// fputs($f, "\nНовое содержимое");
//fclose($f);

file_put_contents('file.txt', "\nНовое содержимое", FILE_APPEND);