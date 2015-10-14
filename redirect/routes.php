<?php
class Route {

  private $routes = [
    'hunger'=> [
      "description" => "FMI Bistro Speiseplan",
      "target"=> "http://tum.sexy/hunger",
      "display"=> true
    ],
    "rooms"=> [
      "description"=> "MI Raumbelegungen",
      "target"=> "http://tum.sexy/rooms",
      "display"=> true
    ],
    "c"=> [
      "description"=> "TUM Online",
      "target"=> "https://campus.tum.de/",
      "display"=> true
    ],
    "m"=> [
      "description"=> "Moodle",
      "target"=> "https://www.moodle.tum.de/",
      "display"=> true
    ],
    "stuff"=> [
      "description"=> "Unistuff (ehemals Tumstuff)",
      "target"=> "http://unistuff.org",
      "display"=> true
    ],
    "reddit"=> [
      "description"=> "ReddiTUM",
      "target"=> "https://reddit.com/r/redditum",
      "display"=> true
    ],
    "tedx"=> [
      "description"=> "TEDxTUM Event-Seite",
      "target"=> "http://tedxtum.com",
      "display"=> false
    ],
    "numprog"=> [
      "description"=> "Numerisches Programmieren",
      "target"=> "http://www5.in.tum.de/wiki/index.php/Numerisches_Programmieren_-_Winter_15",
      "display"=> true
    ]
  ];

  private $sections = [
    "Special Stuff" => [
      'hunger', 'rooms', 'c', 'm', 'stuff','reddit', 'tedx'
    ],
    '1. Semester' => [],
    '2. Semester' => [],
    '3. Semester' => [],
    '4. Semester' => [],
    '5. Semester' => [
      'numprog'
    ],
    '6. Semester' => [],
  ];

  public function getTargetOfSub($subdomain){
    if(!in_array($subdomain, $this->routes)){
      return "http://tum.sexy/";
    }
    return $this->routes[$subdomain];
  }

  public function getHtmlList() {
    $htmlList=''; //Init var

    //Iterrate over our sections which can contain any number of routes
    foreach ($this->sections as $section => $subs) {
      $htmlList .= "<h5>".$section."</h5><ul>";

      //Iterrate over all routes in current section
      foreach($subs as $sub) {

        //Only display if flag is true (we want to hide some routes maybe)
        if ($this->routes[$sub]['display']) {
          $htmlList .= "<li>".$this->routes[$sub]['description']." - <a href='http://".$sub.".tum.sexy'>".$sub.".tum.sexy</a></li>";
        }
      }

      $htmlList .= "</ul>";
    }
    return $htmlList;
  }
}
