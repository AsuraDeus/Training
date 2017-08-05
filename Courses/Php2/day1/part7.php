<?php 

session_start();
$_SESSION['name']='asd';
echo $_SESSION['name'];
echo '<br />';
echo session_save_path();
//удаление сессии
session_destroy();
?>