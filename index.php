<?php

include __DIR__ . '/setup.php';

//Init the router so we can show all routes on this page
include __DIR__ . '/redirect/routes.php';
$Router = new Route();
$vars = ['routes' => $Router->getHtmlList()];

//We always want the parameter in the URL
if (!isset($_GET['cats'])) {
    header('Location: /index.php?cats=0');
    die();
} elseif (isset($_GET['cats']) && $_GET['cats'] !== '0') {
    $vars['cats'] = true; //Enables the script in the template
}

renderTemplate($tplName = 'start', $vars);
