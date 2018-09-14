<?php

include __DIR__ . '/../setup.php';

use JPBernius\FMeat\FMeatClient;
use JPBernius\FMeat\Configurations\Locations;
use JPBernius\FMeat\Exeptions\{NetworkingException, DayNotFoundException};
use JPBernius\FMeat\Entities\Day;

$fmeat = new FMeatClient(true);

$locations = [
    'fmiBistroWeek' => Locations::FMI_BISTRO,
    'ippBistroWeek' => Locations::IPP_BISTRO,
    'mensaWeek' => Locations::MENSA_GARCHING,
    'stucafeMaschbauWeek' => Locations::STUCAFE_BOLTZMANNSTRASSE
];

$output = [];
foreach ($locations as $viewKey => $apiName) {
    try {
        $thisWeek = iterator_to_array($fmeat->getCurrentWeekForLocation($apiName));
        $thisWeek = array_filter($thisWeek, function (Day $day) {
            return $day->getDate() > new DateTime('today midnight');
        });
    } catch (NetworkingException|DayNotFoundException|TypeError $e) {
        $thisWeek = [];
    }

    try {
        $nextWeek = iterator_to_array($fmeat->getNextWeekForLocation($apiName));
    } catch (NetworkingException|DayNotFoundException|TypeError $e) {
        $nextWeek = [];
    }

    $output[$viewKey] = array_merge($thisWeek, $nextWeek);
}

//Render the template
renderTemplate('hunger/hunger', $output);
