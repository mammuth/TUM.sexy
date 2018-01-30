<?php

include __DIR__ . '/setup.php';

//Init the router so we can show all routes on this page
include __DIR__ . '/redirect/routes.php';
$Router = new Route();
$vars = ['routes' => $Router->getResolvedArrays()];

//We always want the parameter in the URL
if (!isset($_GET['cats'])) {
    header('Location: /index.php?cats=0');
    die();
} elseif (isset($_GET['cats']) && $_GET['cats'] !== '0') {
    $vars['cats'] = true; //Enables the script in the template
}

//Donation Key
$vars['stripe_publishable_key'] = $stripe['publishable_key'];

renderTemplate($tplName = 'start', $vars);
