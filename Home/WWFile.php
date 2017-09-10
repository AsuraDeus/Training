<?php
 include_once 'Homefuncs.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
        <input type="text" name="text" value="" placeholder="Введите текст">
        <input type="submit" name="doGo" value="Тыкай штолле">
        </form>
    <br />
<?php
 $path= "test2.txt";
 $test2= fopen($path, 'at') or die("Ошибка");
 strip_tags(trim($st= $_POST['text']));
  if (str_replace(" ", "", $st) == false):
  // todo: Error.log
  else:
  $st .= "\n";
  fputs($test2,$st);
  endif;
$d= file($path);
//my_dump($d);
foreach ($d as $value) : echo $value, '<br />'; endforeach;
fclose($test2);
?>
    </form>
    </body>
</html>
