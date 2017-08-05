<?php
$file= '../path.log';
$requri= $_SERVER['REQUEST_URI'];
$httpref= $_SERVER['HTTP_REFERER'];
$time= time();
file_put_contents($file,"\n$requri",FILE_APPEND);
file_put_contents($file,"\n$httpref",FILE_APPEND);
file_put_contents($file,"\n$time",FILE_APPEND);