<?php

include __DIR__ . '/../setup.php';

use JPBernius\FMeat\FMeatClient;
use JPBernius\FMeat\Configurations\Locations;
use JPBernius\FMeat\Exeptions\NetworkingException;

$FMeatClient = new FMeatClient(true);

try {
    $fmiBistroWeek = $FMeatClient->getCurrentWeekForLocation(Locations::FMI_BISTRO);
} catch (NetworkingException $e) {
    $fmiBistroWeek = null;
}

try {
    $mensaGarchingWeek = $FMeatClient->getCurrentWeekForLocation(Locations::MENSA_GARCHING);
} catch (NetworkingException $e) {
    $mensaGarchingWeek = null;
}

//Render the template
renderTemplate('hunger', [
    'fmiBistroWeek' => $fmiBistroWeek,
    'mensaGarchingWeek' => $mensaGarchingWeek
]);
