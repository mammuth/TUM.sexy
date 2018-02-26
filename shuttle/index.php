<?php

use ThauEx\SimpleHtmlDom\SHD;

define('SHUTTLE_URL', 'http://wzw.tum.de/index.php?id=416');

SHD::$fileCacheDir = "cache";
$html = SHD::fileGetHtml(SHUTTLE_URL);
if (empty($html)) {
    // something wrong with fileGetHTML - redirect to overview page than
    header('Location: ' . SHUTTLE_URL);
    die();
}

$links = [];
foreach ($html->find('div[id=c2489]') as $element) {
    // inside the div#c2489 there should be one to three (or more) links
    foreach ($element->find('a') as $e) {
        $links[] = $e->href;
    }
}

if (empty($links)) {
    // not able to extract link-elements from html - may happen when faculty changes content management system
    header('Location: ' . SHUTTLE_URL);
    die();
}

// The load variable allows the user to load the schedule for the upcoming week using '?load=1'
$load = 0;
if (!empty($_GET['load']) && array_key_exists($_GET['load'], $load)) {
    $load = $_GET['load'];
}

header('Location: http://www.wzw.tum.de/' . $links[$load]);