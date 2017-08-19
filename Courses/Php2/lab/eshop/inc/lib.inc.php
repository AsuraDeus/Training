<?php

// todo: /** Enter

/**
 * Добавление товара в каталог
 * @param string $title Название
 * @param string $author Имя автора
 * @param int $pubYear Год публикации
 * @param int $price Цена
 * @return bool
 */
function addItemToCatalog(
    string $title,
    string $author,
    int $pubYear,
    int $price): bool
{
    global $link;

    $sql = <<<SQL
INSERT INTO eshop.catalog (title, author, pubyear, price)
VALUES (?,?,?,?)
SQL;
    if (!$stmt = mysqli_prepare($link, $sql)) {
        return false;
    }
    mysqli_stmt_bind_param(
        $stmt,
        'ssii',
        $title,
        $author,
        $pubYear,
        $price);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return true;
}

function selectAllItems()
{
    global $link;

    $sql = <<<SQL
SELECT
  id,
  title,
  author,
  pubyear,
  price
FROM eshop.catalog;
SQL;
    if (!$result = mysqli_query($link, $sql)) {
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

function saveBasket()
{
    global $basket;
    $basket = base64_encode(serialize($basket));
    setcookie('basket', $basket, 0x7FFFFFFF);
}

function basketInit()
{
    global $basket, $count;
    if (!isset($_COOKIE['basket'])) {
        $basket = ['orderid' => uniqid()];
        saveBasket();
    } else {
        $basket = unserialize(base64_decode($_COOKIE['basket']));
        $count = count($basket) - 1;
    }
}

function add2Basket($id)
{
    global $basket;
    $basket[$id] = 1;
    saveBasket();
}

function myBasket()
{
    global $link, $basket;
    $goods = array_keys($basket);
    array_shift($goods);
    if (!$goods) {
        return false;
    }
    $ids = implode(",", $goods);
    $sql = "SELECT id, author, title, pubyear, price
 FROM catalog WHERE id IN ($ids)";
    if (!$result = mysqli_query($link, $sql)) {
        return false;
    }
    $items = result2Array($result);
    mysqli_free_result($result);
    return $items;
}

function result2Array($data)
{
    global $basket;
    $arr = [];
    while ($row = mysqli_fetch_assoc($data)) {
        $row['quantity'] = $basket[$row['id']];
        $arr[] = $row;
    }
    return $arr;
}

function deleteItemFromBasket($id)
{
    global $basket;
    unset($basket[$id]);
    saveBasket();
}

function filter($str)
{
    global $link;
    $str = htmlspecialchars(trim($str));
    if ($str == '') {
        return false;
    }
    return mysqli_real_escape_string($link, $str);
}

function saveOrder($dateTime)
{
    global $link, $basket;
    $goods = myBasket();
    $stmt = mysqli_stmt_init($link);

    $sql = <<<'SQL'
    INSERT INTO eshop.orders (
      title,
      author,
      pubyear,
      price,
      quantity,
      orderid,
      datetime
    ) VALUES (?, ?, ?, ?, ?, ?, ?);
SQL;
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    }
    foreach ($goods as $item) {
        mysqli_stmt_bind_param(
            $stmt,
            'ssiiisi',
            $item['title'],
            $item['author'],
            $item['pubyear'],
            $item['price'],
            $item['quantity'],
            $basket['orderid'],
            $dateTime
        );
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    return true;
}

function getOrders(){
global $link; 
$file = '../admin' . orders.log;
if(!is_file($file))
return false; 
/* Получаем в виде массива персональные данные пользователей из файла */
$orders = file($file); 
/* Массив, который будет возвращен функцией */ 
$allorders = []; 
foreach ($orders as $order) { 
list($name, $email, $phone, $address, $orderid, $date) = explode("|", $order); 
/* Промежуточный массив для хранения информации о конкретном заказе */ 
$orderinfo = []; 
/* Сохранение информацию о конкретном пользователе */ 
$orderinfo["name"] = $name; 
$orderinfo["email"] = $email; 
$orderinfo["phone"] = $phone; 
$orderinfo["address"] = $address; 
$orderinfo["orderid"] = $orderid; 
$orderinfo["date"] = $date; 
/* SQL-запрос на выборку из таблицы orders всех товаров для конкретного покупателя */ 
$sql = "SELECT title, author, pubyear, price, quantity FROM ordersWHERE orderid = '$orderid' AND datetime = $date"; 
/* Получение результата выборки */ 
if(!$result = mysqli_query($link, $sql)) 
return false; 
$items = mysqli_fetch_all($result, MYSQLI_ASSOC); 
mysqli_free_result($result); 
/* Сохранение результата в промежуточном массиве */ 
$orderinfo["goods"] = $items; 
/* Добавление промежуточного массива в возвращаемый массив */
$allorders[] = $orderinfo; 
} 
return $allorders;
}