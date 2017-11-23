<?php

include __DIR__ . '/../setup.php';

$FMeatClient = new \JPBernius\FMeat\FMeatClient();
$week = $FMeatClient->getCurrentWeek();
$output = ['week' => $week];

//Render the template
renderTemplate('hunger', ['week' => $week]);
