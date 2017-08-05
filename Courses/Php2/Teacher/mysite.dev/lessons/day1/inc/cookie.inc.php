<?php

const TWO_WEEKS = 1209600; // Секунд в двух неделях

$visitCounter = $_COOKIE['visitCounter'] ?? 0;
$visitCounter++;

$lastVisit = $_COOKIE['lastVisit'] ?? '';

if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
    setcookie('visitCounter', $visitCounter, time() + TWO_WEEKS);
    setcookie('lastVisit', time(), time() + TWO_WEEKS);
}