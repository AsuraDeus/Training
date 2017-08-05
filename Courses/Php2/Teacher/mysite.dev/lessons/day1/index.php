<?php
require 'inc/cookie.inc.php';

$text = $visitCounter < 2
    ? 'Спасибо что зашли к нам'
    : 'Вы зашли к нам ' . ($visitCounter - 1) . ' раз';

?>
<!-- todo: ! -> Tab -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<blockquote>
    <?= $text; ?>
</blockquote>
</body>
</html>
