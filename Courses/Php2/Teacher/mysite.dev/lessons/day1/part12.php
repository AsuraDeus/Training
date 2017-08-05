<?php

$f = fopen('file.txt', 'r+');

fwrite($f, 'Новый текст');

fclose($f);