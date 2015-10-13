<?php
class Route {
  private $ROUTES_JSON_STRING = '{
    "Special Stuff": {
      "hunger": {
        "description": "FMI Bistro Speiseplan",
        "target": "http://tum.sexy/hunger"
      },
      "rooms": {
        "description": "MI Raumbelegungen",
        "target": "http://tum.sexy/rooms"
      }
    },

    "1. Semester": {
      "abc": {
        "description": "testestest",
        "target": "http://tum.sexy/abc"
      }
    },

    "2. Semester": {

    }
  }';
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
    return "http://tum.sexy/404";
  }

  public function getRoutes(){
    return $this->routes;
  }
}
