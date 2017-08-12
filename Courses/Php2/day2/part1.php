<?php
$link = mysqli_connect('localhost','asuradeus','','web2');
if(!$link){
    echo 'Ошибка'.mysqli_connect_error().':'.mysqli_connect_errno();
}

// mysqli_select_db($link,'web');

// $result=mysqli_query($link,'select * from teachers');
mysqli_set_charset($link, 'utf8');
$result=mysqli_query($link,
'select id,name, addr,phone from teachers');
mysqli_close($link);

// $row= mysqli_fetch_array($result,MYSQLI_NUM);
// var_dump($row);

$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
var_dump($row);
