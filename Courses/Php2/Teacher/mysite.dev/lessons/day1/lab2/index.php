<?php
require 'log.php';

echo '<a href="pages/about.php">about</a>';
echo '<a href="pages/info.php">info</a>';
echo '<a href="view-log.php">view log</a>';

echo "<hr>";
echo $_SERVER['REQUEST_URI']; // Урл
echo "<hr>";
echo $_SERVER['HTTP_REFERER']; // откуда пришли
echo "<hr>";
echo time(); // Текущая метка в мс