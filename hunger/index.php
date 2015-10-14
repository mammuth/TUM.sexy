
<?php
//Send some important headers and setup php
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');
date_default_timezone_set('Europe/Berlin');

//Some constants
define('URL_MAIN', 'http://www.betriebsrestaurant-gmbh.de/');
define('URL_PAGE_WITH_LINKS', URL_MAIN . 'index.php?id=91');

//Include libs
include 'vendor/autoload.php';


function crawl_page($url){
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
    foreach ($linksIn as $link){
        $links[] = $link->getAttribute('href'); //Extract and save the "href" attribute.
    }

    return $links;
}

function pdfToString(){
    $weekNumber = date("W"); 

    //Check if we have the current week in cache
    $text=apc_fetch('hungertext' . $weekNumber);
    if($text !== false){
        return $text;
    }

    //Otherwise fetch all links
    $links = crawl_page(URL_PAGE_WITH_LINKS);
    $pdfLink = '';
    foreach ($links as $file) {
        if (strpos(strtolower($file), '.pdf') !== FALSE && strpos($file, '_FMI_') !== FALSE && $weekNumber === substr($file,16,2)) {
            $pdfLink = URL_MAIN . $file;
        }
    }

    //Don't proceed when no link was found
    if(empty($pdfLink)){
        return;
    }
    
    // Parse pdf file and build necessary objects.
    $parser = new \Smalot\PdfParser\Parser();
    $pdf    = $parser->parseFile($pdfLink);
    $text = $pdf->getText();

    //Store it in cache
    apc_store('hungertext' . $weekNumber, $text, 2*24*3600);

    //return it
    return $text;    
}
?>
<html>
<head>
    <title>Hunger!11!! - Speiseplan MI, TUM</title>
    <meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link href="/hunger/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Hunger | <a href="http://tum.sexy" class="logo">TUM.<strong>sexy</strong></a></h1>
    <div class="container">
        <p>This is the 'Speiseplan' of the current week in the FMI Bistro of the Informatik Fakultät at TUM.</p>
        <?php 
        $raw = preg_split("/\n\s*\n/", pdfToString()); //split the whole pdf string on the days
        $days = array_slice($raw, 4, count($raw)-7); // Remove unneded stuff
        $currentDayOfWeek = idate('w', time());// Only display today and future days
        
        $i = 1;
        foreach($days as $day) {
            if ($i >= $currentDayOfWeek) {
                $dayArray = preg_split("/\n\d[.]/", $day);
                $title = array_shift($dayArray);
                echo "<h3>".$title."</h3>";
                echo "<ul>";
                foreach($dayArray as $meal) {
                    echo "<li>".preg_replace("/\d([,]\d*)* oder B.n.W./", "", $meal)."€</li>";
                }
                echo "</ul>";
            }
            $i += 1;
        }
        ?>
    </div>
</body>
</html>

