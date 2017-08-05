<?php

//echo '<h1>Hello World</h1>';
setcookie('name','Stanislav',time() +3600);

$user = [
    'name' => 'Stas',
    'login' => 'qwas',
    'pass' => 'wut'
    ];

$str = base64_encode(serialize($user));

setcookie('user',$str);

$user= unserialize(base64_encode($_COOKIE['user']));
echo '<br />';
print_r($user);

echo $_COOKIE['name'];

?>