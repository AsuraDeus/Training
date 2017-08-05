<?php
session_start();
$_SESSION['book']='';
$book=['PHP','Laravel','Golang'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href='basket.php'>GoToBasket</a>
    <?php echo $_SESSION['book'] ?>
    <form action='#' method='post'>
        <select name='book'>
            <option>PHP</option>
            <option>Laravel</option>
            <option>Golang</option>
        </select>
        <input type='submit'>
    </form>
</body>
</html>