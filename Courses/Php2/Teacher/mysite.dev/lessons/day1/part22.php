<?php

$dir = opendir('.');

while ($name = readdir($dir)) {
    if (is_dir($name)) {
        echo "[$name]<br>";
    } else {
        echo $name . "<br>";
    }
}

closedir($dir);