<?php
use ThauEx\SimpleHtmlDom\SHD;

SHD::$fileCacheDir = "cache";
$html = SHD::fileGetHtml('http://wzw.tum.de/index.php?id=416');
if (empty($html)) {
	// something wrong with fileGetHTML
	// redirect to overview page than
	header('Location: http://wzw.tum.de/index.php?id=416');
	die();
}

$links = array();

foreach($html->find('div[id=c2489]') as $element) {
	// inside the div#c2489 there should be one to three (or more) links
	foreach($element->find('a') as $element2) {
       		$links[] = $element2->href;
	}
}

if (empty($links)) {
	// not able to extract link-elements from html
	// may happen when faculty changes content management system
	// redirect to overview page than
	header('Location: http://wzw.tum.de/index.php?id=416');
	die();
}

// The load variable allows the user to load the schedule for the upcoming week using '?load=1'
if(empty($_GET['load'])) {
    $load = 0;    
} else {
    $load = $_GET['load'];    
}

if ($links[$load] == "") {
	// user provided a load variable that is not in the array
	// may happen when there is no plan uploaded for upcoming week but user is using ?load=1
	// load default than
	$load = 0;
}

header('Location: http://www.wzw.tum.de/' . $links[$load]);
die();
