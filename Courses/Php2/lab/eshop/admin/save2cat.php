<?php
<<<<<<< HEAD

	require_once "secure/session.inc.php";
	require_once "../inc/lib.inc.php";
	require_once "../inc/config.inc.php";

 
 $title = $_POST['title'];
 $author = $_POST['author'];
 $pubyear = $_POST['pubyear'];
 $price = $_POST['price'];

 if(!addItemToCatalog($title, $author, $pubyear, $price)){
 	echo 'Произошла ошибка при добавлении товара в каталог';
	}else{
		header("Location: add2cat.php");
		exit;
	}
=======
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
>>>>>>> b4135f8586df77ee39aea429d24ff18253c85189
