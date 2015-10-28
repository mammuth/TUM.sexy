<?php

class Route {

    private $routes = [
        'hunger' => [
            'description' => 'FMI Bistro Speiseplan',
            'target' => 'http://tum.sexy/hunger'
        ],
        'rooms' => [
            'description' => 'MI Raumbelegungen',
            'target' => 'http://tum.sexy/rooms'
        ],
        'c' => [
            'description' => 'TUM Online',
            'target' => 'https://campus.tum.de/'
        ],
        'm' => [
            'description' => 'Moodle',
            'target' => 'https://www.moodle.tum.de/'
        ],
        'stuff' => [
            'description' => 'Unistuff (ehemals Tumstuff)',
            'target' => 'http://unistuff.org'
        ],
        'reddit' => [
            'description' => 'ReddiTUM',
            'target' => 'https://reddit.com/r/redditum'
        ],
        'tedx' => [
            'description' => 'TEDxTUM Event-Seite',
            'target' => 'http://tedxtum.com',
        ],
        'numprog' => [
            'description' => 'Numerisches Programmieren',
            'target' => 'http://www5.in.tum.de/wiki/index.php/Numerisches_Programmieren_-_Winter_15'
        ],
        'websec' => [
            'description' => 'WebApplication Security Bachelor Praktikum',
            'target' => 'http://websec.sec.in.tum.de'
        ],
        'anal' => [
            'description' => 'Analysis für Informatiker',
            'target' => 'https://www-m14.ma.tum.de/lehre/ws15-16/analysis-fuer-informatik/'
        ],
        'propra30' => [
            'description' => 'PGdP Gruppe 30',
            'target' => 'http://home.in.tum.de/~szillat/'
        ],
        'carlos' => [
            'description' => 'Carlos Camino',
            'target' => 'http://carlos-camino.de'
        ]
    ];

    /**
     * Only items/routes listed in this will be shown on the front page of the website
     * @var mixed[][]
     */
    private $sections = [
        'Special Stuff' => [
            'hunger', 'rooms', 'c', 'm', 'stuff', 'reddit'
        ],
        '1. Semester' => [
            'carlos'
        ],
        '2. Semester' => [
            'anal'
        ],
        '3. Semester' => [],
        '4. Semester' => [],
        '5. Semester' => [
            'numprog'
        ],
        '6. Semester' => [],
    ];

    public function getTargetOfSub($subdomain) {
        if (!isset($this->routes[$subdomain])) {
            return 'http://tum.sexy/';
        }
        return $this->routes[$subdomain]['target'];
    }

    public function getHtmlList() {
        $htmlList = ''; //Init var
        //Iterrate over our sections which can contain any number of routes
        foreach ($this->sections as $section => $subs) {
            $htmlList .= '<h5>' . $section . '</h5><ul>';

            //Iterrate over all routes in current section
            foreach ($subs as $sub) {
                $htmlList .= '<li>' . $this->routes[$sub]['description'] . ' - <a href="http://' . $sub . '.tum.sexy">' . $sub . '.tum.sexy</a></li>';
            }

            $htmlList .= '</ul>';
        }
        return $htmlList;
    }

}
