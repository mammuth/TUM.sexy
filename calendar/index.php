<?php

//Global absolute path
$appPath = realpath(dirname(__FILE__));
if (!preg_match('!/$!', $appPath)) {
    $appPath.= '/';
}

//Store in constants
define('APPLICATION_PATH', $appPath . './');
define('PATH_HEADER', APPLICATION_PATH.'../header.html');
define('PATH_FOOTER', APPLICATION_PATH.'../footer.html');
define('PATH_ABOUT', APPLICATION_PATH.'about.html');

//Include composer components
require $appPath.'vendor/autoload.php';

//Secruity thingy: Comment this out to enable debugging
unset($_GET['debug']);

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
	
	//Some common replacements: yes its a long list
	$searchReplace = array();
	$searchReplace['Tutorübungen'] = 'TÜ';
	$searchReplace['Grundlagen'] = 'G';
	$searchReplace['Betriebssysteme und Systemsoftware'] = 'BS';
	$searchReplace['Einführung in die Informatik '] = 'INFO';
	$searchReplace['Praktikum: Grundlagen der Programmierung'] = 'PGP';
	$searchReplace['Einführung in die Rechnerarchitektur (Einführung in die Technische Informatik)'] = 'ERA';
	$searchReplace['Einführung in die Softwaretechnik'] = 'EIST';
	$searchReplace['Algorithmen und Datenstrukturen'] = 'AD';
	$searchReplace['Rechnernetze und Verteilte Systeme'] = 'RNVS';
	$searchReplace['Einführung in die Theoretische Informatik'] = 'THEO';
	$searchReplace['Diskrete Strukturen'] = 'DS';
	$searchReplace['Diskrete Wahrscheinlichkeitstheorie'] = 'DWT';
	$searchReplace['Numerisches Programmieren'] = 'NumProg';
	$searchReplace['Lineare Algebra für Informatik'] = 'LinAlg';
	$searchReplace['Analysis für Informatik'] = 'Analysis';
	
	//Do the replacement
	$e['SUMMARY'] = strtr($e['SUMMARY'], $searchReplace);
	
	//Remove some stuff which is not really needed
	$e['SUMMARY'] = str_replace(array('Standardgruppe', 'PR, ','VO, ', 'FA, '), '', $e['SUMMARY']);
	
	//Try to make sense out of the location
	if(!empty($e['LOCATION'])){
		if(strpos($e['LOCATION'],'(56')!==false){ 
			// Informatik
			switchLocation($e,'Boltzmannstraße 3, 85748 Garching bei München');
		} else if(strpos($e['LOCATION'],'(55')!==false){ 
			// Maschbau
			switchLocation($e,'Boltzmannstraße 15, 85748 Garching bei München');
		} else if(strpos($e['LOCATION'],'(81')!==false){ 
			// Hochbrück
			switchLocation($e,'Parkring 11-13, 85748 Garching bei München');
		} else if(strpos($e['LOCATION'],'(51')!==false){ 
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
 * Remove duplicate entries: events that happen at the same time in multiple locations 
 */
function noDupes(&$events){
	//Sort them
	usort($events, function($a, $b){
		if(strtotime($a['DTSTART']) > strtotime($b['DTSTART'])){
			return 1;
		}elseif($a['DTSTART'] > $b['DTSTART']){
			return -1;
		}
		return 0;
	});
	
	//Find dupes
	$total=count($events);
	$removeMe = array();
	for($i=1;$i<$total;$i++){
		//Check if start time, end time and title match then merge
		if($events[$i-1]['DTSTART']===$events[$i]['DTSTART'] && $events[$i-1]['DTEND']===$events[$i]['DTEND'] && $events[$i-1]['SUMMARY']===$events[$i]['SUMMARY']){
			//Append the location to the next (same) element
			$events[$i]['LOCATION'] .= "\n" . $events[$i-1]['LOCATION'];
			
			//Mark this element for removal
			unset($events[$i-1]);
		}
	}
}


/*
 * Debugging function to dump the data to the browser
 */
function dumpMe($arr, $echo=true) {
	// Don't output if we are not in debug mode
	if(!isset($_GET['debug'])){
		return; 
	}
	
	//Assemble the string 
    $str=str_replace(array("\n", ' '), array('<br/>', '&nbsp;'), print_r($arr, true)) . '<br/>';
	
	//Output based on the second param
    if($echo) {
        echo $str;
    }else{
        return $str;
    }
}

//Verify if we have all parameters
if(!isset($_GET['pStud'],$_GET['pToken'])){
	if(file_exists(PATH_HEADER) && file_exists(PAGE_FOOTER)){
		$page=file_get_contents(PATH_HEADER).str_replace('%HOST%',$_SERVER['HTTP_HOST'],file_get_contents(PATH_ABOUT)).file_get_contents(PAGE_FOOTER);
	}else{
		$page=str_replace('%HOST%',$_SERVER['HTTP_HOST'],file_get_contents(PATH_ABOUT));
	}
	die($page);
}

//Parse the file
$calAddr 	= 'https://campus.tum.de/tumonlinej/ws/termin/ical?pStud=' . $_GET['pStud'].'&pToken='.$_GET['pToken'];
$ical   	= new ICal($calAddr);
$allEvents 	= $ical->events();

//Check if anything was received
if(empty($allEvents)){
	die('Ihre parameter sind ung&uuml;ltig oder ein anderer Fehler ist aufgetreten');
}

//Remove dupes
$allEvents = noDupes($allEvents);

//Create new object for outputting the new calender
$cal = new \Eluceo\iCal\Component\Calendar('TUM iCal Proxy');

//Event loop
foreach($allEvents as $e){
	$vEvent = new \Eluceo\iCal\Component\Event();
	
	//Process object
	cleanEvent($e);
	dumpMe($e);
 
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
