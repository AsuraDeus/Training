<?php
$link = mysqli_connect('localhost','asuradeus','','web2');

$name = mysqli_real_escape_string($link,"John O'Brain");

$sql= "insert into teachers(name) values ('$name')";
mysqli_set_charset($link, 'utf8');
mysqli_query($link,$sql);

echo mysqli_error($link);

mysqli_close($link);