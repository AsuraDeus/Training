<?php
require "inc/lib.inc.php";
require "inc/config.inc.php";

$name = filter($_POST['name']);
$email = filter($_POST['email']);
$phone = filter($_POST['phone']);
$address = filter($_POST['address']);

$data = [$name, $email, $phone, $address];

if (in_array(false, $data)) {
    echo "Заполните все поля";
    exit;
}

$data['orderId'] = $basket['orderid'];
$data['time'] = time();
$order = implode('|', $data);

file_put_contents('admin/' . ORDERS_LOG, $order . "\n", FILE_APPEND);
if (saveOrder($data['time']) == false) {
    echo "Ошибка записи бла-бла-бла...";
    exit;
};

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Сохранение данных заказа</title>
</head>
<body>
<p>Ваш заказ принят.</p>
<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>