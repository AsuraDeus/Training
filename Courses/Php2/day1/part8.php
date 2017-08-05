<?php

if(file_exists('index.php')){
echo 'file exists <br />';
}

if(is_file('index.php')){
    echo 'file founded <br />';
}

if(is_dir('lab')){
    echo 'Directory exists <br />';
}

echo "Size of index.php " . filesize('index.php'),'b';
echo '<br />';
echo "Time of change " . filemtime('index.php');
echo '<br />';
echo "File was requested " . fileatime('index.php');
echo '<br />';
if(is_readable('index.php')){
    echo 'Readable';
}
echo '<br />';
if(is_writeable('index.php')){
    echo 'Writeable';
}
echo '<br />';
if(is_executable('index.php')){
    echo 'Executable';
}
echo '<br />';

$f = fopen('file.txt','r')or die('Cant open file');
//echo fread($f,5);// читает первые 5 байт
//fpassthru($f);// Echo не нужно
$lines=[];
while($line= fgetss($f,4096,'<p><strong>')){
    $lines[]= trim($line);
}
//fgetss= fgets с удалением тегов 
//Fgetss($переменная;длина символов (больше нуля);ингорируемые теги)
fclose($f);
var_dump($lines);
