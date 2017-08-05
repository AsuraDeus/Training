<?php

ob_start();
echo "<h1>Hello World</h1>";
setcookie('name', 'root');

ob_flush(); // Выводит содержимое буфера

echo "<p>Ещё контент";
echo "<p>И ещё контент";

ob_end_flush(); // Выводит и закрывает буфер
