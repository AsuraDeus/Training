<?php

ob_start();

echo "Hello ";

$out = ob_get_contents(); // Получаю содержимое буфера

echo "World";

$out2 = ob_get_contents(); // Получение не удаляет из буфера

ob_end_clean(); // Очистить и завершить буфер

var_dump($out, $out2);