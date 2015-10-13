<?php
include('./routes.php');
$routeHandler = new Route();

echo "This is for testing purposes only <br />";

header("Location: ".$routeHandler->getTargetOfSub($_GET['sub']));
die();
