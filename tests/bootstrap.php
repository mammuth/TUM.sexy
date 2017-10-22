<?php
$loader = include(__DIR__ . '/../vendor/autoload.php');
$loader->add('General', __DIR__);

//Manually include classes as we don't have a psr-4 autoloader
include(__DIR__ . '/../redirect/routes.php');