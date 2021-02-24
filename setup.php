<?php

//Send some important headers and setup php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
date_default_timezone_set('Europe/Berlin');

header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');

session_start();

//Include libs
include __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

//Startup Twig
$loader = new FilesystemLoader(__DIR__ . '/tpl');
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/tmp/compile',
    'debug' => true
]);


function renderTemplate($vars, $tplName = 'start') {
    global $twig;
    $vars['main_tpl'] = $tplName . '.twig';
    echo $twig->render('main.twig', $vars);
}

//Add Donation info
/*include __DIR__ . '/donateInfos.php';
\Stripe\Stripe::setApiKey($stripe['secret_key']);*/