<?php

//echo "<h1>Hello World</h1>";

setcookie('name', 'iSomov', time() + 3600);

$user = [
    'name' => 'John',
    'login' => 'root',
    'pass' => 'p@s$w0rd1',
];

$str = base64_encode(serialize($user));
setcookie('user', $str);

$user = unserialize(base64_decode($_COOKIE['user']));
print_r($user);

// site.ru/admin/test +
// site.ru/admins/test -
// admin.site.ru
echo $_COOKIE['name'];