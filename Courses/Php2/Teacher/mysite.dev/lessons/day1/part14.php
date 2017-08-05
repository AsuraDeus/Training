<?php

$f = fopen('file.txt', 'r');

fseek($f, -10, SEEK_END); // 10 байт с конца файла

echo ftell($f); // Где наш курсор ?
echo "<hr>";
echo fread($f, 10);
rewind($f);

fclose($f);