<?php

// Копирует файл
copy('file.txt', 'file_new.txt');

// Переименовать
rename('file_new.txt', 'file2del.txt');

// Удалить файл
unlink('file2del.txt');