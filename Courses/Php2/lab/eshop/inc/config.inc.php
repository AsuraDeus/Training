<?php

// Параметры подключения к базе данных
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'eshop';

const ORDERS_LOG = 'orders.log'; // Файл логов

$basket = []; // Корзина пользователя
$count = 0;   // Товаров в корзине

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

if (!$link) {
    echo mysqli_connect_error();
    die();
}

basketInit();