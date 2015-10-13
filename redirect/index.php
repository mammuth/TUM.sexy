<?php
include('./routes.php');
$routeHandler = new Route();

echo "This is for testing purposes only <br />";

echo "Would redirect to ".$routeHandler->getTargetOfSub($_GET['sub']);
