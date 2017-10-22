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

function getWeekNumber() {
    $weekNumber = date('W');

    //Skip to next week on saturday or sunday
    if (date('w') == 0 || date('w') == 6) {
        $weekNumber++;
    }

    return $weekNumber;
}

function getPdfLink() {
    //Fetch all links
    $links = crawl_page(URL_PAGE_WITH_LINKS);
    foreach ($links as $file) {
        if (strpos(strtolower($file), '.pdf') !== false
            && strpos($file, 'Garching-Speiseplan_KW' . getWeekNumber()) !== false) {
            return $file;
        }
    }
}

function dowloadAndConvert($url, $pdfFile, $imageFile) {
    if (file_exists($imageFile)) {
        return true;
    }

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $result = file_put_contents($pdfFile, $data);

    if ($result > 0) {
        $pdf = new Spatie\PdfToImage\Pdf($pdfFile);
        $pdf->saveImage($imageFile);

        return true;
    }

    return false;
}

$filenamePDF = __DIR__ . '/../tmp/hunger/' . getWeekNumber() . '.pdf';
$filenameImage = __DIR__ . '/../tmp/hunger/' . getWeekNumber() . '.png';

$output = ['linkPage' => URL_PAGE_WITH_LINKS, 'title' => 'Hunger!11!! - Speiseplan MI, TUM'];

if (file_exists($filenameImage)) {
    $output['pdfImage'] = '/tmp/hunger/' . getWeekNumber() . '.png';
} else {
    $link = getPdfLink();
    if (!empty($link) && dowloadAndConvert($link, $filenamePDF, $filenameImage)) {
        $output['pdfImage'] = '/tmp/hunger/' . getWeekNumber() . '.png';
    } else if (!empty($link)) {
        $output['pdfLink'] = $link;
    }
}

//Render the template
renderTemplate('hunger', $output);
