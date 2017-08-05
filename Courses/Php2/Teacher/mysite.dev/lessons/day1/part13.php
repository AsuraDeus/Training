<?php

$f = fopen('file.txt', 'a');

fputs($f, "\nНовая строка");

fclose($f);