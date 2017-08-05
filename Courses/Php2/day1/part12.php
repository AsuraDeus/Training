<?php

$file= 'file.txt';
//=================================
/*$f= fopen('file.txt','r+');
fwrite($f, 'New Text');
fclose($f);*/
//=================================
/*$f= fopen('file.txt','a');
fputs($f,"\nNew string");
fclose($f);*/
//=================================
/*$f= fopen('file.txt','r');
fseek($f,-9,SEEK_END);//10b с конца файла
echo ftell($f);
echo '<br />';
echo fread($f,9);
rewind($f);
fclose($f);*/

// readfile($file);//Читать файл целиком ^^^^^^^Упрощенная версия
//=================================
// $f= fopen($file,'r');
// while($lines[]= fgets($f));
// fclose($f);

/*$lines= file($file);//Прочитать файл построчно в массив ^^^^^^^Упрощенная версия

var_dump($lines);*/
//=================================
/*$watch= file_get_contents($file);
var_dump($watch);*/
//=================================
/*$f= fopen($file,'w');
fputs($f,'New conten');
fclose($f);*/

// file_put_contents($file,'New content'); //^^^^^^Упрощенный вариант
//=================================
/*$f= fopen($file,'a');
fputs('$f','New content');
fclose($f);

file_put_contents($file,"\nnew content2",FILE_APPEND);//^^^^^^Упрощенный вариант*/
//=================================

