<?php

include __DIR__ . '/../setup.php';

//Some constants
define('URL_MAIN', 'http://www.wilhelm-gastronomie.de/');
define('URL_PAGE_WITH_LINKS', URL_MAIN . 'tum-garching');

function crawl_page($url) {
    //Create a new DOM document
    $dom = new DOMDocument;

    //Parse the HTML. The @ is used to suppress any parsing errors
    //that will be thrown if the $html string isn't valid XHTML.
    @$dom->loadHTMLFile($url);

    //Get all links. You could also use any other tag name here,
    //like 'img' or 'table', to extract other tags.
    $linksIn = $dom->getElementsByTagName('a');

    //Iterate over the extracted links and display their URLs 
    $links = [];
    foreach ($linksIn as $link) {
        $links[] = $link->getAttribute('href'); //Extract and save the 'href' attribute.
    }

    return $links;
}

function getPdfLink() {
    $weekNumber = date('W');

    //Fetch all links
    $links = crawl_page(URL_PAGE_WITH_LINKS);

    foreach ($links as $file) {
        if (strpos(strtolower($file), '.pdf') !== FALSE
            && strpos($file, 'Garching-Speiseplan') !== FALSE
            && $weekNumber === substr($file, 83, 2)) {
            return $file;
        }
    }
    return;
}

$output = getPdfLink();

//Render the template
renderTemplate('hunger', ['pdfLink' => $output, 'linkPage' => URL_PAGE_WITH_LINKS, 'title' => 'Hunger!11!! - Speiseplan MI, TUM']);
