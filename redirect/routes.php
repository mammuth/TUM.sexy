<?php

class Route {

    private $routes = [
        'hunger' => [
            'description' => 'FMI Bistro Speiseplan',
            'target' => 'http://tum.sexy/hunger'
        ],
        'rooms' => [
            'description' => 'Lernräume',
            'target' => 'https://www.devapp.it.tum.de/iris/app/'
        ],
        'room' => [
            'description' => 'Lernräume',
            'target' => 'https://www.devapp.it.tum.de/iris/app/'
        ],
        'c' => [
            'description' => 'TUM Online',
            'target' => 'https://campus.tum.de/'
        ],
        'm' => [
            'description' => 'Moodle',
            'target' => 'https://www.moodle.tum.de/'
        ],
        'o' => [
            'description' => 'TUM Opac',
            'target' => 'https://www.ub.tum.de/tum-opac'
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
            'target' => 'http://www5.in.tum.de/wiki/index.php/Numerisches_Programmieren_-_Summer_16'
        ],
        'websec' => [
            'description' => 'WebApplication Security Bachelor Praktikum',
            'target' => 'http://websec.sec.in.tum.de'
        ],
        'anal' => [
            'description' => 'Analysis für Informatiker',
            'target' => 'https://www-m14.ma.tum.de/lehre/ws15-16/analysis-fuer-informatik/'
        ],
        'info2' => [
            'description' => 'Einführung in die Informatik 2',
            'target' => 'https://www2.in.tum.de/hp/Main?nid=329'
        ],
        'e2ocaml' => [
            'description' => 'Einführung in die Informatik 2 OCAML HA-Abgabe',
            'target' => 'https://vmnipkow3.in.tum.de/'
        ],
        'db' => [
    	    'description' => 'Grundlagen: Datenbanken',
    	    'target' => 'https://db.in.tum.de/teaching/ws1617/grundlagen/?lang=de',
    	],
    	'gbs' => [
    	    'description' => 'Grundlagen Betriebssystem und Systemsoftware',
    	    'target' => 'https://www.sec.in.tum.de/Grundlagen-Betriebssysteme-und-Systemsoftware-ws1617/'
    	],
    	'quintero' => [
            'description' => 'Mathias Quintero',
            'target' => 'http://home.in.tum.de/~szillat/'
        ],
        'carlos' => [
            'description' => 'Carlos Camino',
            'target' => 'http://carlos-camino.de'
        ],
        'github' => [
            'description' => 'Official TUM.sexy Github Repository',
            'target' => 'https://github.com/mammuth/TUM.sexy'
        ],
        'psa' => [
            'description' => 'Praktikum Systemadministration',
            'target' => 'http://www.net.in.tum.de/de/teaching/ss16/praktika/psa'
        ],
        'psa-wiki' => [
            'description' => 'Praktikum Systemadministration Wiki',
            'target' => 'https://wiki.rbg.tum.de/Informatik/RBG/PSA/'
        ],
        'dwt' => [
            'description' => 'Diskrete Wahrscheinlichkeitstheorie',
            'target' => 'http://wwwalbers.in.tum.de/lehre/2016SS/dwt/'
        ],
        'theo' => [
            'description' => 'Einführung in die theoretische Informatik',
            'target' => 'https://www7.in.tum.de/um/courses/theo/ss2016/index.php'
        ],
        'info1' => [
            'description' => 'Einführung in die Informatik 1',
            'target' => 'http://www14.in.tum.de/lehre/2016WS/info1/'
        ],
        'era' => [
            'description' => 'Einführung in die Rechnerarchitektur',
            'target' => 'http://www.lrr.in.tum.de/lehre/wintersemester-1617/vorlesungen/einfuehrung-in-die-rechnerarchitektur-era/'
        ],
        'scivis' => [
            'description' => 'Scientific Visualization',
            'target' => 'http://wwwcg.in.tum.de/teaching/teaching/winter-term-1617/scientific-visualization.html'
        ],
        'ds' => [
            'description' => 'Diskrete Strukturen',
            'target' => 'http://www5.in.tum.de/wiki/index.php/Diskrete_Strukturen_-_Winter_16'
        ],
        'vorkurs' => [
            'description' => 'Mathematik Vorkurs für Informatiker',
            'target' => 'http://www.ma.tum.de/Vorkurse/Info/WebHome'
        ],
        'csc' => [
            'description' => 'Computational Social Choice',
            'target' => 'http://dss.in.tum.de/33-teaching/semester/wintersemester-2016-17/153-computational-social-choice-ws-2016-17.html'
        ], 
        'eval' => [
            'description' => 'Evaluation of Lectures',
            'target' => 'http://evasys.zv.tum.de/evasys/online.php'
        ],
       'artemis' => [
            'description' => 'ArTEMIS platform of the Prof. Brügge, Chair 1',
            'target' => 'https://exercisebruegge.in.tum.de/#/courses'
        ],
        'sp' => [
            'description' => 'Studienplan',
            'target' => 'http://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/informatik/studienplan/studienbeginn-ab-ws-201617.html'
        ]
    ];

    /**
     * Only items/routes listed in this will be shown on the front page of the website
     * @var mixed[][]
     */
    private $sections = [
        'Special Stuff' => [
            'hunger', 'rooms', 'c', 'm', 'sp', 'stuff', 'reddit', 'vorkurs'
        ],
        '1. Semester' => [
            'info1', 'era', 'ds', 'carlos'
        ],
        '2. Semester' => [],
        '3. Semester' => [
            'anal', 'info2', 'db', 'gbs'
        ],
        '4. Semester' => [
            'dwt', 'theo'
        ],
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
                $htmlList .= '<li>' . $this->routes[$sub]['description'] . ' — <a href="http://' . $sub . '.tum.sexy">' . $sub . '.tum.sexy</a></li>';
            }

            $htmlList .= '</ul>';
        }
        return $htmlList;
    }

}
