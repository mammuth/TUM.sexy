<?php

include __DIR__ . '/routes.php';
$routeHandler = new Route();
header('Location: ' . $routeHandler->getTargetOfSub($_SERVER['HTTP_HOST'])); // Function does check if GET parameter is set / empty
die();
