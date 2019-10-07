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
        'live'         => [
            'description' => 'Livestreams und Aufzeichnungen von Vorlesungen',
            'target'      => 'https://live.rbg.tum.de',
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
            'target'      => 'https://tedxtum.com',
        ],
        'numprog'      => [
            'description' => 'Numerisches Programmieren',
            'moodle_id'   => '45799',
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
        'erdb'         => [
            'description' => 'Einsatz und Realisierung von Datenbanksystemen',
            'target'      => 'https://db.in.tum.de/teaching/ss19/impldb/'
        ],
        'gbs'          => [
            'description' => 'Grundlagen: Betriebssysteme und Systemsoftware',
            'target'      => 'https://www.cm.in.tum.de/teaching/gbs/',
            'moodle_id'   => '49592',
        ],
        'quintero'     => [
            'description' => 'Mathias Quintero',
            'target'      => 'https://home.in.tum.de/~szillat/',
        ],
        'carlos'       => [
            'description' => 'Carlos Camino',
            'target'      => 'https://carlos-camino.de',
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
            'target'      => 'http://wwwalbers.in.tum.de/lehre/2019SS/dwt/',
        ],
        'theo'         => [
            'description' => 'Einführung in die theoretische Informatik',
            'target'      => 'https://www21.in.tum.de/teaching/theo/SS19/',
        ],
        'theojudge'    => [
            'description' => 'TUMjudge - Einführung in die theoretische Informatik',
            'target'      => 'https://judge.in.tum.de/theo/public/',
        ],
        'info1'        => [
            'description' => 'Einführung in die Informatik 1',
            'moodle_id'   => '42050',
        ],
        'pgdp'         => [
            'description' => 'Praktikum Grundlagen der Programmierung (Moodle-Kurs)',
            'moodle_id'   => '42050',
        ],
        'era'          => [
            'description' => 'Einführung in die Rechnerarchitektur',
            'target'      => 'https://www.caps.in.tum.de/lehre/ws18/vorlesungen/era/',
            'moodle_id'   => '45072',
        ],
        'scivis'       => [
            'description' => 'Scientific Visualization',
            'target'      => 'https://wwwcg.in.tum.de/teaching/teaching/winter-term-1617/scientific-visualization.html',
        ],
        'ds'           => [
            'description' => 'Diskrete Strukturen',
            'target'      => 'https://www7.in.tum.de/um/courses/ds/ws1920/index.html',
        ],
        'vorkurs'      => [
            'description' => 'Mathematik Vorkurs für Informatiker',
            'target'      => 'https://www.ma.tum.de/de/studium/vorkurse-ferienkurse/informatik.html',
        ],
        'csc'          => [
            'description' => 'Computational Social Choice',
            'target'      => 'https://dss.in.tum.de/teaching/ws-18-19/37-teaching/semester/wintersemster-2018-19/193-computational-social-choice-2018-19.html',
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
            'target'      => 'https://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/informatik/studienplan/studienbeginn-ab-ws-201819/',
        ],
        'ma-sp'        => [
            'description' => 'Studienplan M.Sc. Informatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/master-studiengaenge/informatik/studienplan/fpso-2018/',
        ],
        'ge-sp'        => [
            'description' => 'Studienplan B.Sc. Informatik: Games Engineering',
            'target'      => 'https://www.in.tum.de/de/fuer-studierende/bachelor-studiengaenge/informatik-games-engineering/studienplan-games/studienbeginn-ab-ws-201819-games/',
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
            'target'      => 'https://ase.in.tum.de/lehrstuhl_1/teaching/summer-2019/123-teaching/st19/1032-eist-2019',
            'moodle_id'   => '46061',
        ],
        'gad'          => [
            'description' => 'Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'https://www.in.tum.de/cg/teaching/summer-term-19/grundlagen-algorithmen-und-datenstrukturen-in0007/',
            'moodle_id'   => '40888',
        ],
        'gadjudge'          => [
            'description' => 'TUMJudge - Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'https://judge.in.tum.de/gad/public/',
        ],
        'linalg'       => [
            'description' => 'Lineare Algebra für Informatik',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=47866',
        ],
        'gog'          => [
            'description' => 'Games on Graphs',
            'target'      => 'https://www7.in.tum.de/um/courses/gog/ss17/index.php',
        ],
        'grnvs'        => [
            'description' => 'Grundlagen Rechnernetze und Verteilte Systeme',
            'target'      => 'https://www.net.in.tum.de/teaching/ss19/grnvs.html',
        ],
        'pgm'          => [
            'description' => "Probabilistic Graphical Models in Computer Vision",
            'target'      => 'https://vision.in.tum.de/teaching/ss2017/pgmcv',
        ],
        'erapraktikum' => [
            'description' => 'Praktikum - Einführung in die Rechnerarchitektur',
            'target'      => 'https://www.caps.in.tum.de/lehre/ss19/praktika/era/',
        ],
        'ged'          => [
            'description' => 'Game Engine Design',
            'target'      => 'https://www.in.tum.de/cg/teaching/summer-term-19/echtzeit-computergrafik/',
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
            'target'      => 'https://bbaeuml.github.io/ss19-advanced-dl-for-robotics/',
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
            'target'      => 'https://www.facebook.com/events/235050653938605/',
        ],
        'sbrml'        => [
            'description' => 'Sensor-based Robotic Manipulation and Locomotion',
            'target'      => 'https://www.in.tum.de/i23/teaching/sensor-based-robotic-manipulation-and-locomotion/',
        ],
        'rpchi'        => [
            'description' => 'Robot Programming and Control for Human Interaction',
            'target'      => 'https://www.in.tum.de/i23/teaching/robot-programming-and-control-for-human-interaction/',
        ],
        'wahl'         => [
            'description' => 'Hochschulwahlen',
            'target'      => 'https://www.asta.tum.de/wahl/'
        ],
        'agt'          => [
            'description' => 'Algorithmic Game Theory',
            'target'      => 'https://dss.in.tum.de/teaching/38-teaching/semester/sommersemster-2019/203-algorithmic-game-theory-ss2019.html'
        ],
        'io'           => [
            'description' => 'Information Officer',
            'target'      => 'https://www.asta.tum.de/studentische-vertretung/asta/aemter/information-office-io/',
        ],
        'pride'        => [
            'description' => 'TUM Diversity & Queer',
            'target'      => 'https://www.facebook.com/events/599246697252806/',
        ],
        'mario'          => [
            'description' => 'Mario im tu film',
            'target'      => 'https://www.facebook.com/events/2186204174962290/',
        ],
        'matching'     => [
            'description' => 'IN.TUM-Matching-System',
            'target'      => 'https://matching.in.tum.de/saml2/login/',
        ],
        'esn'          => [
            'description' => 'ESN TUMi München',
            'target'      => 'https://esn-tumi.de',
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
            'target'      => 'https://www-m5.ma.tum.de/Allgemeines/MA2404_2018W',
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
        'ecarus'          => [
            'description' => 'E-Mobility der Zukunft: Ingenieurspraxis, Forschungspraxis & Co.',
            'target'      => 'https://www.ecarus.ei.tum.de',
        ],
        'ja'          => [
            'description' => 'Junge Akademie',
            'target'      => 'https://www.jungeakademie.tum.de/',
        ],
        'film'          => [
            'description' => 'tu film',
            'target'      => 'https://www.tu-film.de/',
        ],
        'fds'         => [
            'description' => 'Functional Data Structures',
            'target'      => 'https://www21.in.tum.de/teaching/FDS/SS19/',
        ],
        'langenacht'         => [
            'description' => 'Lange Nacht der Univeristäten',
            'target'      => 'https://www.facebook.com/events/2681178088623650/',
        ],
        'compiler'         => [
            'description' => 'Compiler Construction',
            'target'      => 'https://www.in.tum.de/i02/lehre/sommersemester-19/vorlesungen/compiler-construction/',
        ],
        'ilab1'           => [
            'description' => 'Practical Course: iLab1 - Build your own Internet',
            'target'      => 'https://ilab.net.in.tum.de',
        ],
        'ilab2'           => [
            'description' => 'Practical Course: iLab2 - You set the Focus',
            'target'      => 'https://ilab2.net.in.tum.de',
        ],
        'ilabx'           => [
            'description' => 'Practical Course: iLabX - The Virtual Internet Laboratory (block)',
            'target'      => 'https://ilabx.net.in.tum.de',
        ],
        'comp'            => [
            'description' => 'Computational Complexity',
            'target'      => 'https://www7.in.tum.de/um/courses/complexity/SS19/',
        ],
        'future'          => [
            'description' => 'TUM4Future',
            'target'      => 'https://tum4future.de',
        ],
        'restplaetze'     => [
            'description' => 'Liste der Restplätze in Seminaren und Praktika',
            'target'      => 'https://www.in.tum.de/fuer-studierende/module-und-veranstaltungen/praktika-und-seminare/',
        ],
        'tms'     => [
            'description' => 'Support Elective: Think. Make. Start.',
            'target'      => 'https://www.thinkmakestart.com/',
        ],
	'finder'     => [
            'description' => 'Roomfinder',
            'target'      => 'https://www.ph.tum.de/about/visit/roomfinder/',
        ],
        'set'     => [
            'description' => 'Studieneinführungstage der FSMPI',
            'target'      => 'https://www.fsmpi.de/set',
        ],
    ];

    // Format is: <source / synonym> => <target> - the target must be present in the $routes array
    private $synonyms = [
        'csd'     => 'pride',
        'erapra'  => 'erapraktikum',
        'erap'    => 'erapraktikum',
        'sp-ma'   => 'ma-sp',
        'eidi'    => 'info1',
        'eidi2'   => 'info2',
        'latex'   => 'sharelatex',
        'tex'     => 'sharelatex',
        'bs'      => 'gbs',
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
        'urban-mobility'=> 'ecarus',
        'kino'    => 'film',
        'gdb'     => 'db',
	'tumi'    => 'esn',
        'complexity' => 'comp',
        'sp-ge' => 'ge-sp',
	'roomfinder' => 'finder'
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
            'eist', 'gad', 'gadjudge', 'erapraktikum', 'linalg', 'ged',
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
            'hunger', 'mensabot', 'mensabot2', 'roombot', 'finder', 'room', 'app', 'c', 'm', 'sp', 'ma-sp', 'ge-sp', 'ge-ma-sp', 'wi-sp', 'wi-ma-sp', 'stuff', 'reddit', 'vorkurs', 'statista', 'shuttle', 'sharelatex', 'matching', 'ecarus', 'film', 'set'
        ],
        'Electives'   => [
            'pl', 'gki', 'conpra', 'ged', 'pgm', 'gog', 'artemis', 'csc', 'scivis', 'ase', 'qo', 'itsec', 'netsec', 'modsim', 'pp', 'mvs', 'adlr', 'sbrml', 'rpchi', 'agt', 'adm', 'crypto', 'geokalkuele', 'automata', 'sd', 'markov', 'progopt', 'advalgs', 'ea', 'algebra1', 'rts', 'erdb', 'compiler', 'ilab1', 'ilab2', 'ilabx', 'comp', 'tms'
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
        //If target does not exist? Try moodle course
        else if (!isset($this->routes[$redirectUrl]['target'])){
            if (isset($this->routes[$redirectUrl]['moodle_id'])){
                $siteType = 'm';
            }
            //If target and moodle course does not exist? Go to main page
            else {
                return 'https://tum.sexy/';
            }
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
