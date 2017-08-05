<?php

if (file_exists('index.php')) {
    echo "Файл или директория существует";
}

if (is_file('index.php')) {
    echo "Файл существует";
}

if (is_dir('lab')) {
    echo "Директория существует";
}

echo "Размер файла index.php " . filesize('index.php');

echo "Файл index.php был изменен " . filemtime('index.php');

echo "Файл был запрошен " . fileatime('index.php');

if (is_readable('index.php')) {
    echo 'Файл можно читать';
}

if (is_writable('index.php')) {
    echo 'В файл можно писать';
}

if (is_executable('index.php')) {
    // chmod +x index.php
    echo 'Файл можно исполнять';
}