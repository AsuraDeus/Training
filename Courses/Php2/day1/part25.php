<?php

if($_FILES['userfile']['error'] == UPLOAD_ERR_OK){
    echo "Размер загружаемого файла ".$_FILES['userfile']['size'];
    echo '<hr>';
    echo "Тип загражаемого файла " .$_FILES['userfile']['type'];
    echo '<hr>';
    move_uploaded_file($_FILES['userfile']['tmp_name'],
    'upload/' .$_FILES['userfile']['name']);
}

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
    <form action='#' method='post' enctype="multipart/form-data">
        <input type="file" name="userfile" />
        <input type="submit" />
    </form>
</body>
</html>