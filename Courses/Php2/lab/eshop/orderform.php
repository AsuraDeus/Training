<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Форма оформления заказа</title>
</head>
<body>
<h1>Оформление заказа</h1>
<form action="saveorder.php" method="post">
    <p>Заказчик: <input name="name" size="50" required autofocus>
    <p>Email заказчика: <input name="email"
                               size="50" required>
    <p>Телефон для связи: <input name="phone"
                                 size="50" required>
    <p>Адрес доставки: <input name="address"
                              size="100" required>
    <p><input type="submit" value="Заказать"/>
</form>
</body>
</html>