<?php

$pageToDisplay = 'home';

if (isset($_GET['page']) && $_GET['page'] !== '') {
    $pageToDisplay = $_GET['page'];
}

require __DIR__ . '/php/inc/templates/header.tpl.php';
require __DIR__ . '/php/inc/templates/' . $pageToDisplay . '.tpl.php';
require __DIR__ . '/php/inc/templates/footer.tpl.php';