<?php

include __DIR__ . '/../setup.php';

use JPBernius\FMeat\FMeatClient;
use JPBernius\FMeat\Configurations\Locations;
use JPBernius\FMeat\Exeptions\{NetworkingException, DayNotFoundException};

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
        $output[$viewKey] = $fmeat->getCurrentWeekForLocation($apiName);
        if($output[$viewKey]->getDay(5)->getDate()->format("Y-m-d") < date("Y-m-d")) {
            $output[$viewKey] = $fmeat->getNextWeekForLocation($apiName);
        }
    } catch (NetworkingException|DayNotFoundException $e) {
        $output[$viewKey] = null;
    }
}

//Render the template
renderTemplate('hunger', $output);
