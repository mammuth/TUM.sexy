<?php

class Route {
    private $routes = [
        'hunger'       => [
            'description' => 'FMI Bistro Speiseplan',
            'target'      => 'https://tum.sexy/hunger',
        ],
        'mensabot'     => [
            'description' => 'TUMMensabot für Telegram',
            'target'      => 'https://t.me/TUMMensabot',
        ],
        'mensabot2'    => [
            'description' => 'Hübscher Telegram-MensaBot',
            'target'      => 'https://t.me/MensaMUCBot',
        ],
        'roombot'      => [
            'description' => 'Roomfinder als Telegram Bot',
            'target'      => 'https://t.me/tumroomsbot',
        ],
        'room'         => [
            'description' => 'Lernräume',
            'target'      => 'https://www.devapp.it.tum.de/iris/app/',
        ],
        'c'            => [
            'description' => 'TUM Online',
            'target'      => 'https://campus.tum.de/tumonline/anmeldung.durchfuehren',
        ],
        'm'            => [
            'description' => 'Moodle',
            'target'      => 'https://www.moodle.tum.de/auth/shibboleth/index.php',
        ],
        'o'            => [
            'description' => 'TUM Opac',
            'target'      => 'https://www.ub.tum.de/tum-opac',
        ],
        'stuff'        => [
            'description' => 'Unistuff (ehemals Tumstuff)',
            'target'      => 'https://unistuff.org',
        ],
        'reddit'       => [
            'description' => 'ReddiTUM',
            'target'      => 'https://reddit.com/r/redditum',
        ],
        'ted'          => [
            'description' => 'TEDxTUM Event-Seite',
            'target'      => 'http://tedxtum.com',
        ],
        'numprog'      => [
            'description' => 'Numerisches Programmieren',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=41992',
            'moodle_id'   => '41992',
        ],
        'websec'       => [
            'description' => 'WebApplication Security Bachelor Praktikum',
            'target'      => 'https://websec.sec.in.tum.de',
        ],
        'netsec'       => [
            'description' => 'Netzsicherheit',
            'target'      => 'https://net.in.tum.de/teaching/ws1819/netsec.html',
        ],
        'anal'         => [
            'description' => 'Analysis für Informatiker',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=43628',
            'moodle_id'   => '43628',
        ],
        'info2'        => [
            'description' => 'Einführung in die Informatik 2 / Functional Programming and Verification',
            'target'      => 'https://www.in.tum.de/i02/lehre/wintersemester-1819/vorlesungen/functional-programming-and-verification/',
            'moodle_id'   => '44932',
        ],
        'e2ocaml'      => [
            'description' => 'Einführung in die Informatik 2 OCAML HA-Abgabe',
            'target'      => 'https://vmnipkow3.in.tum.de/',
        ],
        'db'           => [
            'description' => 'Grundlagen: Datenbanken',
            'target'      => 'https://db.in.tum.de/teaching/ws1819/grundlagen/',
            'moodle_id'   => '38031',
        ],
        'gbs'          => [
            'description' => 'Grundlagen Betriebssystem und Systemsoftware',
            'target'      => 'https://www.cm.in.tum.de/teaching/gbs-1819/',
            'moodle_id'   => '42019',
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
        'docker'       => [
            'description' => 'Official TUM.sexy Docker Hub Repository',
            'target'      => 'https://hub.docker.com/r/mammuth/tum.sexy',
        ],
        'dwt'          => [
            'description' => 'Diskrete Wahrscheinlichkeitstheorie',
            'target'      => 'http://wwwalbers.in.tum.de/lehre/2018SS/dwt/',
        ],
        'theo'         => [
            'description' => 'Einführung in die theoretische Informatik',
            'target'      => 'https://www7.in.tum.de/um/courses/theo/ss2018/',
        ],
        'theojudge'    => [
            'description' => 'TUMjudge - Einführung in die theoretische Informatik',
            'target'      => 'https://judge.in.tum.de/theo/public/',
        ],
        'info1'        => [
            'description' => 'Einführung in die Informatik 1',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=42050',
        ],
        'pgdp'         => [
            'description' => 'Praktikum Grundlagen der Programmierung (Moodle-Kurs)',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=42050',
        ],
        'era'          => [
            'description' => 'Einführung in die Rechnerarchitektur',
            'target'      => 'http://www.caps.in.tum.de/lehre/ws18/vorlesungen/era/',
            'moodle_id'   => '45072',
        ],
        'scivis'       => [
            'description' => 'Scientific Visualization',
            'target'      => 'https://wwwcg.in.tum.de/teaching/teaching/winter-term-1617/scientific-visualization.html',
        ],
        'ds'           => [
            'description' => 'Diskrete Strukturen',
            'target'      => 'https://www7.in.tum.de/um/courses/ds/ws1819/index.html',
        ],
        'vorkurs'      => [
            'description' => 'Mathematik Vorkurs für Informatiker',
            'target'      => 'https://vorkurse.ma.tum.de/Vorkurse/Info/WebHome',
        ],
        'csc'          => [
            'description' => 'Computational Social Choice',
            'target'      => 'http://dss.in.tum.de/teaching/ws-18-19/37-teaching/semester/wintersemster-2018-19/193-computational-social-choice-2018-19.html',
        ],
        'eval'         => [
            'description' => 'Evaluation of Lectures',
            'target'      => 'https://evasys.zv.tum.de/evasys/online.php',
        ],
        'artemis'      => [
            'description' => 'ArTEMIS platform of the Prof. Brügge, Chair 1',
            'target'      => 'https://artemis.ase.in.tum.de',
        ],
        'sp'           => [
            'description' => 'Studienplan B.Sc. Informatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/informatik/studienplan/studienbeginn-wise-201617-bis-sose-2018/',
        ],
        'ma-sp'        => [
            'description' => 'Studienplan M.Sc. Informatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/master-studiengaenge/informatik/studienplan/fpso-2018/',
        ],
        'ge-sp'        => [
            'description' => 'Studienplan B.Sc. Informatik: Games Engineering',
            'target'      => 'https://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/informatik-games-engineering/studienplan-games/studienbeginn-ab-ws-201617-games/',
        ],
        'ge-ma-sp'     => [
            'description' => 'Studienplan M.Sc. Informatik: Games Engineering',
            'target'      => 'https://www.in.tum.de/de/fuer-studierende/master-studiengaenge/informatik-games-engineering/curriculum/',
        ],
        'wi-sp'        => [
            'description' => 'Studienplan B.Sc. Wirtschaftsinformatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/wirtschaftsinformatik/studienplan/studienbeginn-ab-ws-20182019/',
        ],
        'wi-ma-sp'     => [
            'description' => 'Studienplan M.Sc. Wirtschaftsinformatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/master-studiengaenge/wirtschaftsinformatik/studienplan/ab-sose-2018/',
        ],
        'app'          => [
            'description' => 'TUM Campus App',
            'target'      => 'https://tumcabe.in.tum.de/landing/',
        ],
        'eduroam'      => [
            'description' => 'HowTo: Setup eduroam securely!',
            'target'      => 'https://tum.sexy/eduroam.php',
        ],
        'eist'         => [
            'description' => 'Einführung in die Softwaretechnik',
            'target'      => 'https://www1.in.tum.de/lehrstuhl_1/teaching/summer-2018/121-teaching/st18/963-eist-2018',
            'moodle_id'   => '39072',
        ],
        'gad'          => [
            'description' => 'Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'http://campar.in.tum.de/Chair/TeachingSs18GAD',
            'moodle_id'   => '40888',
        ],
        'linalg'       => [
            'description' => 'Lineare Algebra für Informatik',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=41011',
        ],
        'gog'          => [
            'description' => 'Games on Graphs',
            'target'      => 'https://www7.in.tum.de/um/courses/gog/ss17/index.php',
        ],
        'grnvs'        => [
            'description' => 'Grundlagen Rechnernetze und Verteilte Systeme',
            'target'      => 'https://www.net.in.tum.de/teaching/ss18/grnvs.html',
        ],
        'pgm'          => [
            'description' => "Probabilistic Graphical Models in Computer Vision",
            'target'      => 'http://vision.in.tum.de/teaching/ss2017/pgmcv',
        ],
        'erapraktikum' => [
            'description' => 'Praktikum - Einführung in die Rechnerarchitektur',
            'target'      => 'https://www.caps.in.tum.de/lehre/ws18/praktika/praktikum-rechnerarchitektur/',
        ],
        'ged'          => [
            'description' => 'Game Engine Design',
            'target'      => 'https://wwwcg.in.tum.de/teaching/teaching/summer-term-18/game-engine-design.html',
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
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=41898',
            'moodle_id'   => '41898',
        ],
        'pl'           => [
            'description' => 'Programming Languages',
            'target'      => 'https://www.in.tum.de/i02/lehre/wintersemester-1819/vorlesungen/programming-languages/',
        ],
        'ase'          => [
            'description' => 'Advanced Topics In Software Engineering',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=35023',
        ],
        'qo'           => [
            'description' => 'Query Optimization',
            'target'      => 'https://db.in.tum.de/teaching/ws1718/queryopt/',
        ],
        'satellite'    => [
            'description' => 'The TUM Satellite',
            'target'      => 'https://www.move2space.de/',
        ],
        'shuttle'      => [
            'description' => 'WZW-GAR-MUC shuttle schedule',
            'target'      => 'https://tum.sexy/shuttle/',
        ],
        'statista'     => [
            'description' => 'Statista',
            'target'      => 'https://de-statista-com.eaccess.ub.tum.de',
        ],
        'sharelatex'   => [
            'description' => 'ShareLaTeX@TUM',
            'target'      => 'https://sharelatex.tum.de/',
        ],
        'modsim'       => [
            'description' => 'Modellbildung und Simulation',
            'target'      => 'https://www5.in.tum.de/wiki/index.php/Modeling_and_Simulation_-_Summer_18',
        ],
        'pp'           => [
            'description' => 'Protein Prediction 1',
            'target'      => 'https://www.rostlab.org/teaching/sose18/pp1cs',
        ],
        'mvs'          => [
            'description' => 'Mobile Verteilte Systeme',
            'target'      => 'https://www.os.in.tum.de/studium-und-lehre/ss18/mobile-verteilte-systeme/',
            'moodle_id'   => '38940',
        ],
        'adlr'         => [
            'description' => 'Advanced Deep Learning for Robotics',
            'target'      => 'https://bbaeuml.github.io/ss18-advanced-dl-for-robotics/docs/index.html',
        ],
        'diversity'    => [
            'description' => 'Diversity & Queer Referat',
            'target'      => 'https://www.asta.tum.de/studentische-vertretung/asta/aemter/diversityqueer/',
        ],
        'asta'         => [
            'description' => 'Studentische Vertretung – AStA',
            'target'      => 'https://www.asta.tum.de',
        ],
        'slam'         => [
            'description' => 'TUM Hörsaal Slam',
            'target'      => 'https://www.facebook.com/events/1892789647682641/',
        ],
        'sbrml'        => [
            'description' => 'Sensorbased Robotic Manipulation and Locomotion',
            'target'      => 'http://www23.in.tum.de/index.php?id=6598'
        ],
        'rpchi'        => [
            'description' => 'Robot Programming and Control for Human Interaction',
            'target'      => 'http://www23.in.tum.de/index.php?id=6680'
        ],
        'wahl'         => [
            'description' => 'Hochschulwahlen',
            'target'      => 'https://www.asta.tum.de/wahl/'
        ],
        'agt'          => [
            'description' => 'Algorithmic Game Theory',
            'target'      => 'http://dss.in.tum.de/teaching/36-teaching/semester/sommersemster-2018/183-algorithmic-game-theory-ss2018.html'
        ],
        'io'           => [
            'description' => 'Information Officer',
            'target'      => 'https://www.asta.tum.de/studentische-vertretung/asta/aemter/information-office-io/',
        ],
        'csd'          => [
            'description' => 'CSD Parade',
            'target'      => 'https://pride.tum.sexy',
        ],
        'pride'        => [
            'description' => 'TUM Diversity & Queer',
            'target'      => 'https://www.facebook.com/qrtum/',
        ],
        'matching'     => [
            'description' => 'IN.TUM-Matching-System',
            'target'      => 'https://matching.in.tum.de/saml2/login/',
        ],
        'esn'          => [
            'description' => 'ESN TUMi München',
            'target'      => 'https://portal.mytum.de/veranstaltungen/ic/termine-tumi/index_html',
        ],
        'adm'          => [
            'description' => 'Algorithmische Diskrete Mathematik',
            'target'      => 'https://www-m9.ma.tum.de/WS2018/ADM',
        ],
        'crypto'       => [
            'description' => 'Kryptographie',
            'target'      => 'https://www7.in.tum.de/um/courses/crypto/ws1819/',
        ],
        'markov'       => [
            'description' => 'Markovketten',
            'target'      => 'https://www-m5.ma.tum.de/Allgemeines/MA2404_2018W',
        ],
        'androidsec'   => [
            'description' => 'Praktikum: Android Security',
            'target'      => 'https://www22.in.tum.de/en/teaching/android-security-lab/',
        ],
        'itsec'        => [
            'description' => 'IT-Sicherheit',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ws2018/it-sicherheit',
            'moodle_id'   => '42097',
        ],
        'geokalkuele'  => [
            'description' => 'Geometriekalküle',
            'target'      => 'https://www-m10.ma.tum.de/bin/view/Lehre/WS1819/GeometrieKalkueleWS1819',
        ],
        'automata'     => [
            'description' => 'Automata and Formal Languages',
            'target'      => 'https://www7.in.tum.de/um/courses/auto/ws1819/',
        ],
        'sd'           => [
            'description' => 'Signaldarstellung',
            'target'      => 'https://www.mmk.ei.tum.de/lehre/signaldarstellung-ab-ws1415/',
            'moodle_id'   => '44034',
        ],
        'markov'       => [
            'description' => 'Markovketten',
            'target'      => 'http://www-m5.ma.tum.de/Allgemeines/MA2404_2018W',
            'moodle_id'   => '44962',
        ],
        'progopt'      => [
            'description' => 'Program Optimization',
            'target'      => 'https://www.in.tum.de/i02/lehre/wintersemester-1819/vorlesungen/program-optimization/',
        ],
        'advalgs'      => [
            'description' => 'Advanced Algorithms',
            'target'      => 'http://www14.in.tum.de/lehre/2018WS/ada/index.html.en',
        ],
        'ea'           => [
            'description' => 'Efficient Algorithms',
            'target'      => 'http://www14.in.tum.de/lehre/2018WS/ea/index.html.en',
        ],
        'algebra1'     => [
            'description' => 'Algebra 1',
            'target'      => 'https://www.moodle.tum.de/course/view.php?idnumber=950370507',
        ],
        'rts'          => [
            'description' => 'Echtzeitsysteme / Real Time Systems',
            'moodle_id'   => '42138',
        ],
        'ezp'          => [
            'description' => 'Von der Erfindung zum Patent',
            'target'      => 'https://campus.tum.de/tumonline/wbLv.wbShowLVDetail?pStpSpNr=950372125',
        ],
        'ecarus'          => [
            'description' => 'E-Mobility der Zukunft: Ingenieurspraxis, Forschungspraxis & Co.',
            'target'      => 'https://www.ecarus.ei.tum.de',
        ],
        'ja'          => [
            'description' => 'Junge Akademie',
            'target'      => 'https://www.jungeakademie.tum.de/',
        ],
    ];

    // Format is: <source / synonym> => <target> - the target must be present in the $routes array
    private $synonyms = [
        'erapra'  => 'erapraktikum',
        'sp-ma'   => 'ma-sp',
        'eidi'    => 'info1',
        'eidi2'   => 'info2',
        'latex'   => 'sharelatex',
        'tex'     => 'sharelatex',
        'netz'    => 'grnvs',
        'protein' => 'pp',
        'queer'   => 'diversity',
        'rooms'   => 'room',
        'match'   => 'matching',
        'la'      => 'linalg',
        'geokal'  => 'geokalkuele',
        'geo'     => 'geokalkuele',
        'ada'     => 'advalgs',
        'algebra' => 'algebra1',
        'ezs'     => 'rts',
        'urban-mobility'=> 'ecarus'
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
            'eist', 'gad', 'erapraktikum', 'linalg', 'ged',
        ],
        '3. Semester' => [
            'anal', 'info2', 'db', 'gbs',
        ],
        '4. Semester' => [
            'grnvs', 'theo', 'theojudge', 'dwt',
        ],
        '5. Semester' => [
            'numprog', 
        ],
        '6. Semester' => [],
        'Special'     => [
            'hunger', 'mensabot', 'mensabot2', 'roombot', 'room', 'app', 'c', 'm', 'sp', 'ma-sp', 'ge-sp', 'ge-ma-sp', 'wi-sp', 'wi-ma-sp', 'stuff', 'reddit', 'vorkurs', 'statista', 'shuttle', 'sharelatex', 'matching', 'ecarus'
        ],
        'Electives'   => [
            'pl', 'gki', 'conpra', 'ged', 'pgm', 'gog', 'artemis', 'csc', 'scivis', 'ase', 'qo', 'itsec', 'netsec', 'modsim', 'pp', 'mvs', 'adlr', 'sbrml', 'rpchi', 'agt', 'adm', 'crypto', 'geokalkuele', 'automata', 'sd', 'markov', 'progopt', 'advalgs', 'ea', 'algebra1', 'rts',
        ],
    ];

    public function getTargetOfSub($host) {
        //Split up the requested host into parts and filter out unneeded info
        $domain = explode('.', $host);
        $domain = array_filter($domain, function ($e) {
            return $e !== 'sexy' && $e !== 'tum' && $e !== 'www';
        });

        //DEPRECATED - First item should be a site type: tutor, moodle or other
        $siteType = null;
        if (count($domain) > 1) {
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
        } //Moodle support; Example: mgad.tum.sexy
        else {
            if (strlen($redirectUrl) > 1 && $redirectUrl[0] == 'm' && !isset($this->routes[$redirectUrl])) {
                $redirectUrl = substr($redirectUrl, 1);
                $siteType = 'm';
                //Allow for synonyms as well in moodle redirects
                if (isset($this->synonyms[$redirectUrl])) {
                    $redirectUrl = $this->synonyms[$redirectUrl];
                }
            }
        }

        //If it does not exist? Go to main page
        if (!isset($this->routes[$redirectUrl])) {
            return 'https://tum.sexy/';
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
        
        sort($this->sections['Electives']);

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
