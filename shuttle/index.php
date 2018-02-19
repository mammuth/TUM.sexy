<?php
include 'simple_html_dom.php';

$html = file_get_html('http://wzw.tum.de/index.php?id=416');

$links = array();

foreach($html->find('div[id=c2489]') as $element) 
	foreach($element->find('a') as $element2) 
       		$links[] = $element2->href;

// The load variable allows the user to load the schedule for the upcoming week using '?load=1'
if(empty($_GET['load'])) {
    $load = 0;    
} else {
    $load = $_GET['load'];    
}

if (empty($links)) {
	// not getting any links? Faculty reconstructed the page? 
	// redirect to overview page than
	header('Location: http://wzw.tum.de/index.php?id=416');
	die();
}

if ($links[$load] == "") {
	// provided an load variable that is not in the array
	// load default than
	$load = 0;
}

header('Location: http://www.wzw.tum.de/'.$links[$load]);
die();
