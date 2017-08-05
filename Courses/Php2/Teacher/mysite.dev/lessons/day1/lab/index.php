<?php
session_start();

$books = $_SESSION['books'] ?? [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    array_push($books, $_POST['book']);
    $book = $_POST['book'];
    $books[$book]++;
    $_SESSION['books'] = $books;
}

$count = array_sum($books);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--todo: После basket укажите сколько книг в корзине-->
<a href="basket.php">Go to basket <?= $count ?: '' ?></a>

<form action="#" method="post">
    <select name="book">
        <option>PHP</option>
        <option>Laravel</option>
        <option>GoLang</option>
    </select>
    <input type="submit">
</form>

</body>
</html>
