<?php
ob_start();
echo 'Hello ';
$out= ob_get_contents(); // получение содержимого буфера
ob_end_clean();
var_dump($out);
?>