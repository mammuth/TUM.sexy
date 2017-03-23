<?php

include __DIR__ . '/routes.php';
$routeHandler = new Route();
header('Location: ' . $routeHandler->getTargetOfSub(mb_strtolower($_GET['sub'])));
die();
