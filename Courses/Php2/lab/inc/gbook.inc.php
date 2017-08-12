<?php
/* Основные настройки */
define ('DB_HOST','localhost');
define ('DB_LOGIN','asuradeus');
define ('DB_PASSWORD','');
define ('DB_NAME','gbook');
$link = mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
mysqli_set_charset($link, 'utf8');
/* Основные настройки */

/* Сохранение записи в БД */
// if($_SERVER['REQUEST_METHOD'] == 'POST')
$name = mysqli_real_escape_string($link,$_REQUEST['name']);
$email = mysqli_real_escape_string($link,$_REQUEST['email']);
$msg = mysqli_real_escape_string($link,$_REQUEST['msg']);
$sql= "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
mysqli_query($link,$sql);
/* Сохранение записи в БД */

/* Удаление записи из БД */

/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */
$result=mysqli_query($link,
'SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC');
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);\
var_dump($row);
mysqli_close($link);

foreach ($row as $k => $v){$k++;}
    
echo "<p>Всего записей в гостевой книге: $k количество записей</p>"
/* Вывод записей из БД */
?>