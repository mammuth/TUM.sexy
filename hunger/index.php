<?php
function crawl_page($url)
{
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

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}


$links = crawl_page("http://www.betriebsrestaurant-gmbh.de/index.php?id=91");

foreach ($links as $file) {
    // Get the FMI plans
    if (strpos(strtolower($file), '.pdf') !== FALSE && strpos($file, '_FMI_') !== FALSE) {
        // Get the current weeks plan by commparing the week numbers. Because they're often late in changing their links...
        $weekNumber = date("W"); 
        if ($weekNumber === substr($file,16,2)){
            redirect("http://www.betriebsrestaurant-gmbh.de/".$file);
        }
        echo ("Seems like the \'Betriebsrestaurant-GmbH changed something...<br/>Take a look at <a href=\"http://www.betriebsrestaurant-gmbh.de/index.php?id=91)\">http://www.betriebsrestaurant-gmbh.de/index.php?id=91</a>");
    }
}

?>