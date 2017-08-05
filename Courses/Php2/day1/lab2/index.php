<?php

require 'log.php';

echo '<a href="pages/about.php">About<a>';
echo '<a href="pages/info.php">Info<a>';

echo "<hr>";
echo $_SERVER['REQUEST_URI'];
echo "<hr>";
echo $_SERVER['HTTP_REFERER'];
echo "<hr>";
echo time();