<?php

include __DIR__ . '/../setup.php';


//Render the template
echo $twig->render('csd.twig', ['title' => 'Exzellenz ist bunt!']);
