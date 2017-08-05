<?php
 ob_start();
  echo "<h1>Yello</h1>";
   setcookie('name','root');
 ob_flush();
  echo 'asdasa';
   ob_end_flush();
?>