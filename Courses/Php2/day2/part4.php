<?php
$link = mysqli_connect('localhost','asuradeus','','web2');

$sql = <<<SQL
insert into courses(title,length,description) values (?,?,?)
SQL;

$title = 'course #1';
$lenght = 24;
$description = 'Ex Descr';

$stmt = mysqli_prepare($link,$sql);
mysqli_stmt_bind_param($stmt,'sis',$title,$lenght,$description);

mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

mysqli_close($link);

echo '11';