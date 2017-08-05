<?php

// Переадресация
// header('Location: http://specialist.ru', true, 301);
$visits = $_COOKIE['visits'] ?? 0;
setcookie('visits', ++$visits);
//header('Refresh: 1; url=http://specialist.ru');

echo "<h1>$visits</h1>";

//header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="file.txt"');