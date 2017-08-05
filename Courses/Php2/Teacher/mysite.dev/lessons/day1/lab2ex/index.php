<?php
require 'parts/header.php';
require 'log.php';

const DEFAULT_PAGE = 'main';

$page = $_GET['page'] ?? DEFAULT_PAGE;
if (!in_array($page, ['main', 'about', 'info', 'log'])) {
    $page = DEFAULT_PAGE;
}

require 'pages/' . $page . '.php';

require 'parts/footer.php';
