<?php
class Route {

  private $ROUTES_JSON_STRING = '
  {
    "Special Stuff": {
      "hunger": {
        "description": "FMI Bistro Speiseplan",
        "target": "http://tum.sexy/hunger",
        "display": true
      },
      "rooms": {
        "description": "MI Raumbelegungen",
        "target": "http://tum.sexy/rooms",
        "display": true
      },
      "c": {
        "description": "TUM Online",
        "target": "https://campus.tum.de/",
        "display": true
      },
      "m": {
        "description": "Moodle",
        "target": "https://www.moodle.tum.de/",
        "display": true
      },
      "stuff": {
        "description": "Unistuff (ehemals Tumstuff)",
        "target": "http://unistuff.org",
        "display": true
      },
      "reddit": {
        "description": "ReddiTUM",
        "target": "https://reddit.com/r/redditum",
        "display": true
      },
      "tedx": {
        "description": "TEDxTUM Event-Seite",
        "target": "http://tedxtum.com",
        "display": false
      }
    },

    "1. Semester": {

    },

    "2. Semester": {

    },

    "3. Semester": {

    },

    "4. Semester": {

    },

    "5. Semester": {
      "numprog": {
        "description": "Numerisches Programmieren",
        "target": "http://www5.in.tum.de/wiki/index.php/Numerisches_Programmieren_-_Winter_15",
        "display": true
      }

    },

    "6. Semester": {

    }
  }
  ';



  private $routes;

  public function __construct() {
    if(get_magic_quotes_gpc()){
      $this->stripslashes(ROUTES_JSON_STRING);
    }
    $this->routes = json_decode($this->ROUTES_JSON_STRING, true);
  }

  public function getTargetOfSub($subdomain){
    foreach ($this->routes as $section => $subs) {
      foreach($subs as $sub => $data) {
        if ($sub === $subdomain) {
          return $data['target'];
        }
      }
    }
    return "http://tum.sexy/";
  }

  public function getRoutes(){
    return $this->routes;
  }

  public function getHtmlList() {
    $htmlList;
    foreach ($this->routes as $section => $subs) {
      $htmlList .= "<h5>".$section."</h5><ul>";
      foreach($subs as $sub => $data) {
        if ($data['display']) {
          $htmlList .= "<li>".$data['description']." - <a href='http://".$sub.".tum.sexy'>".$sub.".tum.sexy</a></li>";
        }
      }
      $htmlList .= "</ul>";
    }
    return $htmlList;
  }
}
