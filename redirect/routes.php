<?php

class Route {
    private $routes = [
        'hunger'    => [
            'description' => 'FMI Bistro Speiseplan',
            'target'      => 'http://tum.sexy/hunger',
        ],
        'mensabot'  => [
            'description' => 'TUMMensabot für Telegram',
            'target'      => 'https://t.me/TUMMensabot',
        ],
        'mensabot2' => [
            'description' => 'Hübscher Telegram-MensaBot',
            'target'      => 'https://t.me/MensaMUCBot',
        ],
        'roombot' => [
            'description' => 'Roomfinder als Telegram Bot',
            'target'      => 'https://t.me/tumroomsbot',
        ],
        'rooms'     => [
            'description' => 'Lernräume',
            'target'      => 'https://www.devapp.it.tum.de/iris/app/',
        ],
        'room'      => [
            'description' => 'Lernräume',
            'target'      => 'https://www.devapp.it.tum.de/iris/app/',
        ],
        'c'         => [
            'description' => 'TUM Online',
            'target'      => 'https://campus.tum.de/',
        ],
        'm'         => [
            'description' => 'Moodle',
            'target'      => 'https://www.moodle.tum.de/auth/shibboleth/index.php',
        ],
        'o'         => [
            'description' => 'TUM Opac',
            'target'      => 'https://www.ub.tum.de/tum-opac',
        ],
        'stuff'     => [
            'description' => 'Unistuff (ehemals Tumstuff)',
            'target'      => 'https://unistuff.org',
        ],
        'reddit'    => [
            'description' => 'ReddiTUM',
            'target'      => 'https://reddit.com/r/redditum',
        ],
        'ted'          => [
            'description' => 'TEDxTUM Event-Seite',
            'target'      => 'http://tedxtum.com',
        ],
        'numprog'      => [
            'description' => 'Numerisches Programmieren',
            'target'      => 'https://www5.in.tum.de/wiki/index.php/Numerisches_Programmieren_-_Winter_17',
        ],
        'websec'       => [
            'description' => 'WebApplication Security Bachelor Praktikum',
            'target'      => 'https://websec.sec.in.tum.de',
        ],
        'netsec'       => [
            'description' => 'Netzsicherheit',
            'target'      => 'https://net.in.tum.de/teaching/ws1718/netsec.html',
        ],
        'anal'         => [
            'description' => 'Analysis für Informatiker',
            'target'      => 'https://www-m5.ma.tum.de/Allgemeines/MA0902_2017W',
            'moodle_id'   => '36704',
        ],
        'info2'        => [
            'description' => 'Einführung in die Informatik 2',
            'target'      => 'https://www2.in.tum.de/hp/Main?nid=354',
            'moodle_id'   => '35319',
        ],
        'e2ocaml'      => [
            'description' => 'Einführung in die Informatik 2 OCAML HA-Abgabe',
            'target'      => 'https://vmnipkow3.in.tum.de/',
        ],
        'db'           => [
            'description' => 'Grundlagen: Datenbanken',
            'target'      => 'https://db.in.tum.de/teaching/ws1718/grundlagen/',
            'moodle_id'   => '38031',
        ],
        'gbs'          => [
            'description' => 'Grundlagen Betriebssystem und Systemsoftware',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ws2017/grundlagen-betriebssysteme-und-systemsoftware',
            'moodle_id'   => '35140',
        ],
        'quintero'     => [
            'description' => 'Mathias Quintero',
            'target'      => 'http://home.in.tum.de/~szillat/',
        ],
        'carlos'       => [
            'description' => 'Carlos Camino',
            'target'      => 'http://carlos-camino.de',
        ],
        'github'       => [
            'description' => 'Official TUM.sexy Github Repository',
            'target'      => 'https://github.com/mammuth/TUM.sexy',
        ],
        'dwt'          => [
            'description' => 'Diskrete Wahrscheinlichkeitstheorie',
            'target'      => 'http://wwwalbers.in.tum.de/lehre/2017SS/dwt/',
        ],
        'theo'         => [
            'description' => 'Einführung in die theoretische Informatik',
            'target'      => 'https://www7.in.tum.de/um/courses/theo/ss2017/',
        ],
        'info1'        => [
            'description' => 'Einführung in die Informatik 1',
            'target'      => 'http://www14.in.tum.de/lehre/2017WS/info1/index.html.de',
        ],
        'pgdp'        => [
            'description' => 'Praktikum Grundlagen der Programmierung (Moodle-Kurs)',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=35284',
        ],
        'era'          => [
            'description' => 'Einführung in die Rechnerarchitektur',
            'target'      => 'https://www.lrr.in.tum.de/lehre/wintersemester-1718/vorlesungen/einfuehrung-in-die-rechnerarchitektur-era/',
        ],
        'scivis'       => [
            'description' => 'Scientific Visualization',
            'target'      => 'https://wwwcg.in.tum.de/teaching/teaching/winter-term-1617/scientific-visualization.html',
        ],
        'ds'           => [
            'description' => 'Diskrete Strukturen',
            'target'      => 'https://www7.in.tum.de/um/courses/ds/ws1718/index.html',
        ],
        'vorkurs'      => [
            'description' => 'Mathematik Vorkurs für Informatiker',
            'target'      => 'https://www.ma.tum.de/Vorkurse/Info/WebHome',
        ],
        'csc'          => [
            'description' => 'Computational Social Choice',
            'target'      => 'http://dss.in.tum.de/33-teaching/semester/wintersemester-2016-17/153-computational-social-choice-ws-2016-17.html',
        ],
        'eval'         => [
            'description' => 'Evaluation of Lectures',
            'target'      => 'https://evasys.zv.tum.de/evasys/online.php',
        ],
        'artemis'      => [
            'description' => 'ArTEMIS platform of the Prof. Brügge, Chair 1',
            'target'      => 'https://exercisebruegge.in.tum.de/#/courses',
        ],
        'sp'           => [
            'description' => 'Studienplan B.Sc. Informatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/informatik/studienplan/studienbeginn-ab-ws-201617.html',
        ],
        'ma-sp'        => [
            'description' => 'Studienplan M.Sc. Informatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/master-studiengaenge/informatik/studienplan/fpo-2007-und-fpsos-seit-2012.html',
        ],
        'wi-sp'        => [
            'description' => 'Studienplan B.Sc. Wirtschaftsinformatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/wirtschaftsinformatik/studienplan/studienbeginn-ab-ws-20162017.html',
        ],
        'wi-ma-sp'     => [
            'description' => 'Studienplan M.Sc. Wirtschaftsinformatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/master-studiengaenge/wirtschaftsinformatik/studienplan/ab-ss-2014.html',
        ],
        'app'          => [
            'description' => 'TUM Campus App',
            'target'      => 'https://tumcabe.in.tum.de/landing/',
        ],
        'eduroam'      => [
            'description' => 'HowTo: Setup eduroam securely!',
            'target'      => 'http://tum.sexy/eduroam.php',
        ],
        'eist'         => [
            'description' => 'Einführung in die Softwaretechnik',
            'target'      => 'https://www1.in.tum.de/lehrstuhl_1/component/content/article/118-teaching/st17/903-introduction-to-software-engineering-2017?Itemid=115',
        ],
        'gad'          => [
            'description' => 'Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'http://campar.in.tum.de/Chair/TeachingSs17GAD',
        ],
        'gog'          => [
            'description' => 'Games on Graphs',
            'target'      => 'https://www7.in.tum.de/um/courses/gog/ss17/index.php',
        ],
        'grnvs'        => [
            'description' => 'Grundlagen Rechnernetze und Verteilte Systeme',
            'target'      => 'https://www.net.in.tum.de/teaching/ss17/grnvs.html',
        ],
        'pgm'          => [
            'description' => "Probabilistic Graphical Models in Computer Vision",
            'target'      => 'http://vision.in.tum.de/teaching/ss2017/pgmcv',
        ],
        'erapraktikum' => [
            'description' => 'Praktikum - Einführung in die Rechnerarchitektur',
            'target'      => 'https://www.lrr.in.tum.de/lehre/sommersemester-17/praktika/praktikum-rechnerarchitektur/',
        ],
        'ged'          => [
            'description' => 'Game Engine Design',
            'target'      => 'https://wwwcg.in.tum.de/teaching/teaching/summer-term-17/game-engine-design.html',
        ],
        'gadunittests' => [
            'description' => 'Unit - Tests: Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'https://github.com/Code-Connect/TUM_Homework/tree/master/src/gad17/',
        ],
        'conpra'       => [
            'description' => 'Practical Course: Algorithms for Programming Contests',
            'target'      => 'https://www7.in.tum.de/um/courses/praktika/conpra/SS17/index.php?category=material',
        ],
        'gki'          => [
            'description' => 'Grundlagen der Künstlichen Intelligenz',
            'target'      => 'http://www.i6.in.tum.de/Main/TeachingWs2017KuenstlicheIntelligenz',
        ],
        'pl'           => [
            'description' => 'Programming Languages',
            'target'      => 'https://www2.in.tum.de/hp/Main?nid=362',
        ],
        'ase'          => [
            'description' => 'Advanced Topics In Software Engineering',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=35023',
        ],
        'qo'          => [
            'description' => 'Query Optimization',
            'target'      => 'https://db.in.tum.de/teaching/ws1718/queryopt/',
        ],
        'geo'          => [
            'description' => 'Geometriekalküle',
            'target'      => 'https://www-m10.ma.tum.de/bin/view/Lehre/WS1718/GeometrieKalkueleWS1718',
        ],
        'satellite'          => [
            'description' => 'The TUM Satellite',
            'target'      => 'https://www.move2space.de/',
        ],
        'statista' => [
            'description' => 'Statista',
            'target'      => 'https://de-statista-com.eaccess.ub.tum.de',
        ]

    ];

    private $synonyms = [
        'erapra' => 'erapraktikum',
        'ma-sp'  => 'sp-ma',
        'eidi'  =>  'info1',
        'eidi2' =>  'info2',
    ];

    /**
     * Only items/routes listed in this will be shown on the front page of the website
     * @var mixed[][]
     */
    private $sections = [
        '1. Semester' => [
            'info1', 'pgdp', 'era', 'ds', 'carlos',
        ],
        '2. Semester' => [
            'eist', 'gad', 'erapraktikum', 'ged',
        ],
        '3. Semester' => [
            'anal', 'info2', 'db', 'gbs',
        ],
        '4. Semester' => [
            'grnvs', 'theo', 'dwt',
        ],
        '5. Semester' => [
            'numprog',
        ],
        '6. Semester' => [],
        'Special'     => [
            'hunger', 'mensabot', 'mensabot2', 'roombot', 'rooms', 'app', 'c', 'm', 'sp', 'ma-sp', 'wi-sp', 'wi-ma-sp', 'stuff', 'reddit', 'vorkurs', 'statista',
        ],
        'Electives'   => [
            'pl', 'gki', 'conpra', 'ged', 'pgm', 'gog', 'artemis', 'csc', 'scivis', 'ase', 'qo', 'netsec'
        ],
    ];

    public function getTargetOfSub($host) {
        //Split up the requested host into parts and filter out unneeded info
        $domain = explode('.', $host);
        $domain = array_filter($domain, function($e){
            return $e !== 'sexy' && $e !== 'tum' && $e !== 'www';
        });

        //First item should be a site type: tutor, moodle or other
        $siteType = null;
        if(count($domain) > 1) {
            $siteType = array_shift($domain);
        }
        $redirectUrl = array_shift($domain);

        //Static route to return the route array as json
        if ($redirectUrl === 'json') {
            header('Content-type: application/json');
            die(json_encode($this->routes));
        }

        //Yea, we have multiple names for the same thing
        if (isset($this->synonyms[$redirectUrl])) {
            $redirectUrl = $this->synonyms[$redirectUrl];
        }

        //If it does not exist? Go to main page
        if (!isset($this->routes[$redirectUrl])) {
            return 'http://tum.sexy/';
        }

        //In case we actually want to go to a different target than the actual redirect
        switch ($siteType) {
            case 'm' :  
                // This is a moodle redirect like m.info1.tum.sexy
                $moodle_id = $this->routes[$redirectUrl]['moodle_id'];
                if (!isset($moodle_id)) {
                    return $this->routes[$redirectUrl]['target'];  // Fallback to target if moodle id is unknown
                }
                return 'https://www.moodle.tum.de/course/view.php?id=' . $moodle_id;
        }

        return $this->routes[$redirectUrl]['target'];
    }

    public function getResolvedArrays() {
        $ret = [];

        //Iterate over our sections which can contain any number of routes
        foreach ($this->sections as $section => $subs) {
            $ret[$section] = [];

            //Iterate over all routes in current section
            foreach ($subs as $sub) {

                //Resolve the route and add to final array
                $ret[$section][] = ['desc' => $this->routes[$sub]['description'], 'sub' => $sub];
            }
        }

        return $ret;
    }

}
