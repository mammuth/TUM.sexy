
<?php
//Send some important headers and setup php
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');
date_default_timezone_set('Europe/Berlin');

//Include libs
include 'vendor/autoload.php';


function crawl_page($url){
    $mylinks = array();     
        //Create a new DOM document
    $dom = new DOMDocument;
        //Parse the HTML. The @ is used to suppress any parsing errors
        //that will be thrown if the $html string isn't valid XHTML.
    @$dom->loadHTMLFile($url);
        //Get all links. You could also use any other tag name here,
        //like 'img' or 'table', to extract other tags.
    $links = $dom->getElementsByTagName('a');

        //Iterate over the extracted links and display their URLs 
    foreach ($links as $link){
            //Extract and save the "href" attribute.
        array_push($mylinks, $link->getAttribute('href'));
    }

    return $mylinks;
}

function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);
   die();
}

function pdfToString(){
    $weekNumber = date("W"); 

    //Check if we have the current week in cache
    $text=apc_fetch('hungertext' . $weekNumber);
    if($text !== false){
        return $text;
    }

    $links = crawl_page("http://www.betriebsrestaurant-gmbh.de/index.php?id=91");
    $pdfLink;

    foreach ($links as $file) {
        if (strpos(strtolower($file), '.pdf') !== FALSE && strpos($file, '_FMI_') !== FALSE) {
            
            if ($weekNumber === substr($file,16,2)){
                // current link is MI pdf
                $pdfLink = "http://www.betriebsrestaurant-gmbh.de/".$file;
            }
        }
    }
    
    // Parse pdf file and build necessary objects.
    $parser = new \Smalot\PdfParser\Parser();
    $pdf    = $parser->parseFile($pdfLink);
    
    $text = $pdf->getText();

    //Store it in cache
    apc_store('hungertext' . $weekNumber, $text, 2*24*3600);
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
        <p>This is the 'Speiseplan' of the current week in the Bistro of the Informatik Fakultät at TUM.</p>
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

