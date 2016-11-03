<?php

include __DIR__ . '/../setup.php';

//Some constants
define('URL_MAIN', 'http://www.betriebsrestaurant-gmbh.de/');
define('URL_PAGE_WITH_LINKS', URL_MAIN . 'index.php?id=91');

/**
 * (\s?oder\sB.n.W.(?=\s))              strip B.n.W.
 * (\s?\d\d*(\s?,\s?\d\d*)+(?=[\s)]))   strip additives
 * (\s\d\d*\**,?(?=[\s)]))              strip random *s in the menu
 * (\*+(?=\s))                          "
 * (\s?[VKRSP](\+[VKRSP]                  strip V,K, R, S, P
 * V = Vegetarisch K = mit Kalbfleisch R = mit Rindfleisch S = mit Schweinefleisch..P = mit Pute
 * 
 * 
 */
define('THE_REGEX', '/(\s?oder\sB.n.W.(?=\s))|(\s?\d\d*(\s?,\s?\d\d*)+(?=[\s)]))|(\s\d\d*\**,?(?=[\s)]))|(\*+(?=\s))|(\s?[VKRSP](\+[VKRSP])*(?=\s))/');
$PDF_LINK = '';  

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

function pdfToString() {
    $weekNumber = date('W');

    //Check if we have the current week in cache
    $text = apc_fetch('hungertext' . $weekNumber);
    if ($text !== false) {
        return $text;
    }

    //Otherwise fetch all links
    $links = crawl_page(URL_PAGE_WITH_LINKS);
    global $PDF_LINK;
    foreach ($links as $file) {
        if (strpos(strtolower($file), '.pdf') !== FALSE && strpos($file, '_FMI_') !== FALSE && $weekNumber === substr($file, 16, 2)) {
            $PDF_LINK = URL_MAIN . $file;
        }
    }

    //Don't proceed when no link was found
    if (empty($PDF_LINK)) {
        return;
    }

    // Parse pdf file and build necessary objects.
    $parser = new \Smalot\PdfParser\Parser();
    $pdf = $parser->parseFile($PDF_LINK);
    $text = $pdf->getText();

    //Store it in cache
    apc_store('hungertext' . $weekNumber, $text, 2 * 24 * 3600);

    //return it
    return $text;
}

//Process the PDF
$raw = preg_split('/\n\s*\n/', pdfToString()); //split the whole pdf string on the days
$days = array_slice($raw, 4, count($raw) - 7); // Remove unneded stuff
$currentDayOfWeek = idate('w', time()); // Only display today and future days

$i = 1;
$output = [];
foreach ($days as $day) {
    //Only show future dates and today
    if ($i >= $currentDayOfWeek) {
        $dayArray = preg_split('/\n\d[.]/', $day);
        $title = array_shift($dayArray);
        $output[$title] = [];

        foreach ($dayArray as $meal) {
            $output[$title][] = preg_replace(THE_REGEX, '', $meal);
        }
    }
    $i += 1;
}

//Render the template
echo $twig->render('hunger.twig', ['food' => $output, 'pdf' => $PDF_LINK]);
