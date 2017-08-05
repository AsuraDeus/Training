<?php

// Создание или получение, если сессия существует
session_start();

$_SESSION['name'] = 'iSomov'; // Запись
$_SESSION['data'] = [
    'login' => 'root',
    'pass' => 'Ifde[fRTlf<jujd',
]; // Запись

echo $_SESSION['name']; // Чтение

//echo session_save_path();

session_destroy(); // Удаляет сессионные переменные
setcookie(session_name(), session_id(), time()-3600);