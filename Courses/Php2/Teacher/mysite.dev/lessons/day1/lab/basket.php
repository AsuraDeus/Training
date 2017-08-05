<?php
session_start();
$books = $_SESSION['books'] ?? [];
if (isset($_GET['del'])) {
    $books[$_GET['del']]--;
    if ($books[$_GET['del']] < 1) {
        unset($books[$_GET['del']]);
    }
    $_SESSION['books'] = $books;
}
foreach ($books as $book => $number) {
    $link = "<a href='?del=$book'>X</a>";
    echo "<li>" . $book . ' x ' . $number . $link;
}
echo "<p><a href='index.php'>Назад</a>";
