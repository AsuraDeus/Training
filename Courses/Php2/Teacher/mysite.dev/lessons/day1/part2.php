<?php

setcookie('test', 'example');

// Удаление cookie
setcookie('test', ''); // Просто присвоить пустую строку
setcookie('test', 'example', time() - 3600);