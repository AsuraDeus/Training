<?php

$visitCounter =$_COOKIE['visitCounter'] ?? 0;
$visitCounter++;

// $lastVisit = '';
// if(isset($_COOKIE['lastVisit'])){
//     $lastVisit= date('d-m-Y', $_COOKIE['lastVisit']);
// }

$lastVisit = $_COOKIE['lastVisit'] ?? '';

?>