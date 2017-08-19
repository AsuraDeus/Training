<?php
// подключение библиотек
require "secure/session.inc.php";
require "../inc/lib.inc.php";
require "../inc/config.inc.php";

// todo(iSomov): Добавить фильтры!
$title = $_POST['title'];
$author = $_POST['author'];
$pubYear = $_POST['pubyear'];
$price = $_POST['price'];

// title:Example
// author:Author
// pubyear:1243
// price:1234

if (!addItemToCatalog($title, $author, $pubYear, $price)) {
    echo "Произошла ошибка при добавлении товара";
} else {
    header('Location: add2cat.php');
    exit;
}