<?php

define('SHUTTLE_URL', 'https://wzw.tum.de/index.php?id=416');
define('SHUTTLE_CACHE_KEY', 'SHUTTLE_CACHE_HTML');

if (apcu_exists(SHUTTLE_CACHE_KEY)) {
    $html = apcu_fetch(SHUTTLE_CACHE_KEY);
} else {
    $html = file_get_contents(SHUTTLE_URL);
    apcu_add(SHUTTLE_CACHE_KEY, $html, 60 * 60 * 24 * 7);
}

$doc = new DOMDocument();
if (empty($html) || !$doc->loadHTML($html)) {
    // something wrong with loading the html - redirect to overview page than
    header('Location: ' . SHUTTLE_URL);
    die('failed to load');
}

$links = [];
$container = $doc->getElementById('c2489');
// inside the div#c2489 there should be one to three (or more) links
foreach ($container->getElementsByTagName('a') as $e) {
    $links[] = $e->getAttribute('href');
}

if (empty($links)) {
    // not able to extract link-elements from html - may happen when faculty changes content management system
    header('Location: ' . SHUTTLE_URL);
    die('no links');
}

// The load variable allows the user to load the schedule for the upcoming week using '?load=1'
$load = 0;
if (!empty($_GET['load']) && array_key_exists($_GET['load'], $links)) {
    $load = intval($_GET['load']);
}

header('Location: http://www.wzw.tum.de/' . $links[$load]);