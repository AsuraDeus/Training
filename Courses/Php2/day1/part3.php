<?php

//переадресация
//header('location: http://specialist.ru',true,301);

$visit= $_COOKIE['visit'] ?? 0;
setcookie('visit',++$visit);
//header('refresh: 3');
echo "<h1>$visit</h1>";
?>