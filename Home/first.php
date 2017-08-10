========== 03.08 ==========
<br />
<?php
echo "Hi, World";
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
 <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, ut perferendis possimus quam provident maxime deserunt accusamus quidem odit. Aliquid modi reprehenderit architecto molestias commodi. Ea quos praesentium molestiae expedita.</div>  
</body>
</html>
<?php
// phpinfo();
echo "Wait wut<br>";
echo "<strong>Wait wut</strong><br /><br />";
echo '<strong>Wait wut</strong><br /><br />';
?>


<?php
echo '<input type="text" name="name"><br /><br />'; //Одинарные кавычку ускоряют работу скрипта
echo "<input type=\"text\" name=\"name\"><br /><br />";
?>

====================
<br />
<?php
$text = 'hello world';
?>

<input type="text" value="<?php echo $text;?>">
<br />

====================
<br />
<?php
//ini_set('error_reporting','E_ALL'); //Настройка ини файла через код
echo $var = 'Alex';
$var2 = 'Billy';
echo "<br />";
echo "$var2";
?>
<br />
====================

<br />
<?php
echo 10==10 ?: zxczczxc;
?>
<br />
====================

<br />

<select  name="sel[]" multiple>
<option>First</option>
<option>Second</option>
<option>Third</option>
</select>

<br />
====================
<br />
<input type="checkbox" name="Ar[]" value="ch1">
<input type="checkbox" name="Ar[]" value="ch2">
<input type="text" name="Ar[]" value="Some Text">
<textarea name="Ar[]">Some Text</textarea>
<?php
echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['HTTP_USER_AGENT'];
?>

