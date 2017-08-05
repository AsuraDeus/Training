<?php
var_dump($_FILES['userfile']);

if ($_FILES['userfile']['error'] == UPLOAD_ERR_OK) {
    echo "Размер загружаемого файла "
        . $_FILES['userfile']['size'];
    echo "Тип загружаемого файла "
        . $_FILES['userfile']['type'];
    echo "Временная файл "
        . $_FILES['userfile']['tmp_name'];

    move_uploaded_file(
        $_FILES['userfile']['tmp_name'],
        "upload/" . $_FILES['userfile']['name']
    );
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="#" method="post" enctype="multipart/form-data">
<!--    <input type="hidden" name="MAX_FILE_SIZE" value="4096">-->
    <input type="file" name="userfile">
    <input type="submit">
</form>

</body>
</html>