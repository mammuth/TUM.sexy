<?php

require 'vendor/autoload.php';

//Comment this out to enable debugging
//unset($_GET['debug']);

//Only output errors if debugging
if(isset($_GET['debug'])){
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}else{
	error_reporting(0);
	ini_set('display_errors', 0);
}

//Make sure php is using utf as well as the output is recognized as utf8
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');

/*
 * Parse the event and do the replacement and optimizations
 */
function cleanEvent(&$e){
	//Add missing fields if possible
	if(!isset($e['GEO'])){
		$e['GEO']='';
	}
	if(!isset($e['LOCATION'])){
		$e['LOCATION']='';
	}
	if(!isset($e['LOCATIONTITLE'])){
		$e['LOCATIONTITLE']='';
	}
	if(!isset($e['URL'])){
		$e['URL']='';
	}
	if(!isset($e['DESCRIPTION'])){
		$e['DESCRIPTION']='';
	}
	
	//Strip added slashes by the parser
	$e['SUMMARY']=stripcslashes($e['SUMMARY']);
	$e['DESCRIPTION']=stripcslashes($e['DESCRIPTION']);
	$e['LOCATION']=stripcslashes($e['LOCATION']);
	
	//Remember the old title in the description
	$e['DESCRIPTION']= $e['SUMMARY'] . "\n" . $e['DESCRIPTION'];
	
	//Remove the TAG and anything after e.g.: (IN0001)
	$e['SUMMARY'] = preg_replace("/(\\(IN[0-9]+\\)|\\[MA[0-9]+\\]).+/", '', $e['SUMMARY']);
	
	//Some common replacements for some stuff
	$e['SUMMARY']=str_replace(
	array('Tutorübungen', 'Grundlagen: ','Betriebssysteme und Systemsoftware', 'Einführung in die Informatik ', 'Praktikum: Grundlagen der Programmierung', 'Einführung in die Rechnerarchitektur (Einführung in die Technische Informatik)', 'Einführung in die Softwaretechnik', 'Algorithmen und Datenstrukturen', 'Rechnernetze und Verteilte Systeme', 'Einfürhung in die Theoretische Informatik', 'Diskrete Strukturen', 'Diskrete Wahrscheinlichkeitstheorie', 'Numerisches Programmieren', 'Lineare Algebra für Informatik', 'Analysis für Informatik'), 
	array('TÜ','G','BS','INFO', 'PGP', 'ERA', 'EIST', 'AD', 'RNVS', 'THEO', 'DS', 'DWT', 'NumProg', 'LinAlg', 'Analysis'), $e['SUMMARY']);
	$e['SUMMARY']=str_replace(array('Standardgruppe', 'PR, ','VO, '), '', $e['SUMMARY']);
	
	//Try to make sense out of the location
	if(!empty($e['LOCATION'])){
		if(strpos($e['LOCATION'],'(5609')!==false){ 
			// Informatik
			switchLocation($e,'Boltzmannstraße 3, 85748 Garching bei München');
		}else if(strpos($e['LOCATION'],'(8102')!==false){ 
			// Hochbrück
			switchLocation($e,'Parkring 11-13, 85748 Garching bei München');
		} else if(strpos($e['LOCATION'],'(5101')!==false){ 
			// Physik
			switchLocation($e,'James-Franck-Straße 1, 85748 Garching bei München');
		} 
	}
	
	//Check status
	switch($e['STATUS']){
		default: 
		case 'CONFIRMED':
			$e['STATUS']=\Eluceo\iCal\Component\Event::STATUS_CONFIRMED;
			break;
		case 'CANCELLED':
			$e['STATUS']=\Eluceo\iCal\Component\Event::STATUS_CANCELLED;
			break;
		case 'TENTATIVE':
			$e['STATUS']=\Eluceo\iCal\Component\Event::STATUS_TENTATIVE;
			break;
	}
}

/*
 * Update the location field
 */
function switchLocation(&$e,$newLoc){
	$e['DESCRIPTION']= $e['LOCATION'] . "\n" . $e['DESCRIPTION'];
	$e['LOCATIONTITLE']=$e['LOCATION'];
	$e['LOCATION'] = $newLoc;
}

/*
 * Debugging function to dump the data to the browser
 */
function dumpMe($arr, $echo=true) {
    $str=str_replace(array("\n", ' '), array('<br/>', '&nbsp;'), print_r($arr, true)) . '<br/>';
    if($echo) {
        echo $str;
    }else{
        return $str;
    }
}

//Verify if we have all parameters
if(!isset($_GET['pStud'],$_GET['pToken'])){
	$page=file_get_contents('about.html');
	die($page);
}

//Parse the file
$calAddr = 'https://campus.tum.de/tumonlinej/ws/termin/ical?pStud=' . $_GET['pStud'].'&pToken='.$_GET['pToken'];
$ical   = new ICal($calAddr);
$allEvents=$ical->events();

//Check if anything was received
if(empty($allEvents)){
	die('Ihre parameter sind ung&uuml;ltig oder ein anderer Fehler ist aufgetreten');
}

//Create new object for outputting the new calender
$cal = new \Eluceo\iCal\Component\Calendar('TUM iCal Proxy');

//Event loop
foreach($allEvents as $e){
	$vEvent = new \Eluceo\iCal\Component\Event();
	
	//Process object
	cleanEvent($e);
	if(isset($_GET['debug'])){
		dumpMe($e);
	}	
 
	//Create new and save it
	$vEvent
	->setUseTimezone(true) // Use server timezone
	->setUniqueId($e['UID'])
	->setDtStamp(new \DateTime($e['DTSTAMP']))
	->setStatus($e['STATUS'])
	->setUrl($e['URL'])
	->setSummary($e['SUMMARY'])
	->setDescription($e['DESCRIPTION'])
    ->setDtStart(new \DateTime($e['DTSTART']))
    ->setDtEnd(new \DateTime($e['DTEND']))
	->setLocation($e['LOCATION'],$e['LOCATIONTITLE'],$e['GEO']);

	$cal->addEvent($vEvent);
}


//Output if we are not debugging
if(!isset($_GET['debug'])){
	header('Content-Type: text/calendar; charset=utf-8');
	header('Content-Disposition: attachment; filename="cal.ics"');
	echo $cal->render();
}

?>