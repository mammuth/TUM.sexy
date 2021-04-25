<?php

// please make sure to add your redirects such that the arrays remains sorted alphabetically
class Route {
    private array $routes = [
        'adlr'             => [
            'description' => 'Advanced Deep Learning for Robotics',
            'target'      => 'https://bbaeuml.github.io/tum-adlr/adlr/index.html',
        ],
        'adm'              => [
            'description' => 'Algorithmische Diskrete Mathematik',
            'target'      => 'https://agdm.ma.tum.de/teaching/2019W/adm.html',
        ],
        'advalgs'          => [
            'description' => 'Advanced Algorithms',
            'target'      => 'http://www14.in.tum.de/lehre/2020WS/ada/index.html.en',
        ],
        'agt'              => [
            'description' => 'Algorithmic Game Theory',
            'target'      => 'https://dss.in.tum.de/teaching/38-teaching/semester/sommersemster-2019/203-algorithmic-game-theory-ss2019.html',
        ],
        'algebra1'         => [
            'description' => 'Algebra 1',
            'target'      => 'https://www.moodle.tum.de/course/view.php?idnumber=950370507',
        ],
        'all-eat-api'      => [
            'description' => 'All menus for all locations from the eat-api in JSON',
            'target'      => 'https://tum-dev.github.io/eat-api/all.json',
        ],
        'anal'             => [
            'description' => 'Analysis für Informatiker',
            'moodle_id'   => '61369',
        ],
        'androidsec'       => [
            'description' => 'Praktikum: Android Security',
            'target'      => 'https://www22.in.tum.de/en/teaching/android-security-lab/',
        ],
        'apollon'         => [
            'description' => 'Apollon UML Modeling Editor',
            'target'      => 'https://apollon.ase.in.tum.de/',
        ],
        'app'              => [
            'description' => 'TUM Campus App',
            'target'      => 'https://www.tum.app/',
        ],
        'artemis'          => [
            'description' => 'ArTEMIS platform of the Prof. Brügge, Chair 1',
            'target'      => 'https://artemis.ase.in.tum.de',
        ],
        'ase'              => [
            'description' => 'Advanced Topics In Software Engineering',
            'moodle_id'   => '58021',
        ],
        'asp'              => [
            'description' => 'Aspekte der systemnahen Programmierung bei der Spieleentwicklung',
            'target'      => 'https://www.in.tum.de/caps/lehre/ws20/praktika/asp/',
        ],
        'asta'             => [
            'description' => 'Studentische Vertretung – AStA',
            'target'      => 'https://www.sv.tum.de/startseite/',
        ],
        'ausitsec'         => [
            'description' => 'ausgewählte Themen der IT-Sicherheit',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ws2019/ausgewahlte-themen-aus-dem-bereich-it-sicherheit',
        ],
        'automata'         => [
            'description' => 'Automata and Formal Languages',
            'target'      => 'https://www.in.tum.de/i07/lehre/wintersemester-20202021/automaten-und-formale-sprachen/',
        ],
        'bmt'              => [
            'description' => 'Basic Mathematical Tools for Imaging & Visualization',
            'target'      => 'http://campar.in.tum.de/Chair/TeachingWs11BasicMathTools',
        ],
        'c'                => [
            'description' => 'TUM Online',
            'target'      => 'https://campus.tum.de/tumonline/ee/ui/ca2/app/desktop/#/login',
        ],
        'canteens-eat-api' => [
            'description' => 'A JSON list of all available canteens for the eat-api',
            'target'      => 'https://tum-dev.github.io/eat-api/canteens.json',
        ],
        'carlos'           => [
            'description' => 'Carlos Camino',
            'target'      => 'https://carlos-camino.de',
        ],
        'comp'             => [
            'description' => 'Computational Complexity',
            'target'      => 'https://www7.in.tum.de/um/courses/complexity/SS19/',
        ],
        'compiler'         => [
            'description' => 'Compiler Construction',
            'target'      => 'https://www.in.tum.de/i02/lehre/sommersemester-20/vorlesungen/compiler-construction/',
        ],
        'conf'             => [
            'description' => 'TUM-Conf (Zoom)',
            'target'      => 'https://tum-conf.zoom.us',
        ],
        'conpra'           => [
            'description' => 'Practical Course: Algorithms for Programming Contests',
            'target'      => 'https://www7.in.tum.de/um/courses/praktika/conpra/WS20/',
        ],
        'corona'           => [
            'description' => 'Coronavirus Information',
            'target'      => 'https://www.in.tum.de/fuer-studierende/coronavirus/',
        ],
        'crypto'           => [
            'description' => 'Kryptographie',
            'target'      => 'https://www7.in.tum.de/um/courses/crypto/ws2021/',
        ],
        'csc'              => [
            'description' => 'Computational Social Choice',
            'target'      => 'https://dss.in.tum.de/teaching/ws-18-19/37-teaching/semester/wintersemster-2018-19/193-computational-social-choice-2018-19.html',
        ],
        'cvmvg'            => [
            'description' => 'Computer Vision II: Multiple View Geometry',
            'target'      => 'https://vision.in.tum.de/teaching/ss2020/mvg2020',
        ],
        'cvvm'             => [
            'description' => 'Computer Vision I: Variational Methods',
            'target'      => 'https://vision.in.tum.de/teaching/online/cvvm',
        ],
        'db'               => [
            'description' => 'Grundlagen: Datenbanken',
            'target'      => 'https://db.in.tum.de/teaching/ws2021/grundlagen/?lang=de',
            'moodle_id'   => '58088',
        ],
        'diversity'        => [
            'description' => 'Diversity & Queer Referat',
            'target'      => 'https://www.sv.tum.de/asta/team/diversityqueer/',
        ],
        'ds'               => [
            'description' => 'Diskrete Strukturen',
            'target'      => 'https://www7.in.tum.de/um/courses/ds/ws2021/index.html',
            'moodle_id'   => '57991',
        ],
        'dwt'              => [
            'description' => 'Diskrete Wahrscheinlichkeitstheorie',
            'target'      => 'http://wwwalbers.in.tum.de/lehre/2021SS/dwt/index.html.de',
        ],
        'ea'               => [
            'description' => 'Efficient Algorithms',
            'target'      => 'http://www14.in.tum.de/lehre/2019WS/ea/index.html.en',
        ],
        'eat-api'          => [
            'description' => 'eat-api output in a human readable format as well as the base url for eat-api calls',
            'target'      => 'https://tum-dev.github.io/eat-api/',
        ],
        'ecarus'           => [
            'description' => 'E-Mobility der Zukunft: Ingenieurspraxis, Forschungspraxis & Co.',
            'target'      => 'https://www.ecarus.ei.tum.de',
        ],
        'eduroam'          => [
            'description' => 'HowTo: Setup eduroam securely!',
            'target'      => 'https://tum.sexy/eduroam.php',
        ],
        'eist'             => [
            'description' => 'Einführung in die Softwaretechnik',
            'target'      => 'https://artemis.ase.in.tum.de/courses/121',
        ],
        'era'              => [
            'description' => 'Einführung in die Rechnerarchitektur',
            'target'      => 'https://www.in.tum.de/caps/lehre/ws20/vorlesungen/einfuehrung-in-die-rechnerarchitektur-era/',
            'moodle_id'   => '57731',
        ],
        'erapraktikum'     => [
            'description' => 'Praktikum - Einführung in die Rechnerarchitektur',
            'target'      => 'https://gepasp.in.tum.de/eraweb/main',
        ],
        'erdb'             => [
            'description' => 'Einsatz und Realisierung von Datenbanksystemen',
            'target'      => 'https://db.in.tum.de/teaching/ss21/impldb/',
        ],
        'esn'              => [
            'description' => 'International engagement: ESN TUMi e.V.',
            'target'      => 'https://tumi.esn.world',
        ],
        'eval'             => [
            'description' => 'Evaluation of Lectures',
            'target'      => 'https://evasys.zv.tum.de/evasys/online.php',
        ],
        'evpro'            => [
            'description' => 'Event Processing',
            'target'      => 'https://www.in.tum.de/i13/teaching/summer-semester-2020/event-processing/',
            'moodle_id'   => '53173',
        ],
        'exzellenz'        => [
            'description' => 'Exzellenz!!1elf',
            'target'      => 'https://shop.tum.de/accessoires/extras/105/tum-kondom',
        ],
        'fds'              => [
            'description' => 'Functional Data Structures',
            'target'      => 'https://www21.in.tum.de/teaching/fds/SS21/',
        ],
        'film'             => [
            'description' => 'tu film',
            'target'      => 'https://www.tu-film.de/',
        ],
        'finder'           => [
            'description' => 'Roomfinder',
            'target'      => 'https://www.ph.tum.de/about/visit/roomfinder/',
        ],
        'fpv'              => [
            'description' => 'Functional Programming and Verification',
            'target'      => 'https://www21.in.tum.de/teaching/fpv/WS20/',
            'moodle_id'   => '57940',
        ],
        'future'           => [
            'description' => 'TUM4Future',
            'target'      => 'https://tum4future.de',
        ],
        'gad'              => [
            'description' => 'Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'https://artemis.ase.in.tum.de/courses/119',
        ],
        'gadunittests'     => [
            'description' => 'Unit - Tests: Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'https://github.com/Code-Connect/TUM_Homework/tree/master/src/gad17/',
        ],
        'gbs'              => [
            'description' => 'Grundlagen: Betriebssysteme und Systemsoftware',
            'moodle_id'   => '58083',
        ],
        'ge-ma-sp'         => [
            'description' => 'Studienplan M.Sc. Informatik: Games Engineering',
            'target'      => 'https://www.in.tum.de/de/fuer-studierende/master-studiengaenge/informatik-games-engineering/curriculum/',
        ],
        'ge-sp'            => [
            'description' => 'Studienplan B.Sc. Informatik: Games Engineering',
            'target'      => 'https://www.in.tum.de/de/fuer-studierende/bachelor-studiengaenge/informatik-games-engineering/studienplan-games/studienbeginn-ab-ws-201819-games/',
        ],
        'ged'              => [
            'description' => 'Game Engine Design',
            'target'      => 'https://www.in.tum.de/cg/teaching/summer-term-19/echtzeit-computergrafik/',
        ],
        'geokalkuele'      => [
            'description' => 'Geometriekalküle',
            'target'      => 'https://www-m10.ma.tum.de/bin/view/Lehre/WS1819/GeometrieKalkueleWS1819',
        ],
        'git-tut'          => [
            'description' => 'Getting started with Git? Learn the basics for the console. With Visualizations!',
            'target'      => 'https://learngitbranching.js.org',
        ],
        'github'           => [
            'description' => 'Official TUM.sexy Github Repository',
            'target'      => 'https://github.com/TUM-Dev/TUM.sexy',
        ],
        'gitlab'           => [
            'description' => 'The fast way to the LRZ hosted gitlab',
            'target'      => 'https://gitlab.lrz.de/users/sign_in',
        ],
        'gki'              => [
            'description' => 'Grundlagen der Künstlichen Intelligenz',
            'moodle_id'   => '58014',
        ],
        'gog'              => [
            'description' => 'Games on Graphs',
            'target'      => 'https://www7.in.tum.de/um/courses/gog/ss17/index.php',
        ],
        'grnvs'            => [
            'description' => 'Grundlagen Rechnernetze und Verteilte Systeme',
            'target'      => 'https://svm0000.net.in.tum.de',
        ],
        'hunger'           => [
            'description' => 'FMI Bistro Speiseplan',
            'target'      => 'https://tum.sexy/hunger',
        ],
        'hyper'            => [
            'description' => 'HyPer DB Webschnittstelle',
            'target'      => 'http://hyper-db.com/interface.html',
        ],
        'i2dl'             => [
            'description' => 'Introduction to Deep Learning',
            'target'      => 'https://niessner.github.io/I2DL/',
        ],
        'ibmi'             => [
            'description' => 'Introduction to Biological and Medical Imaging',
            'target'      => 'http://www.cbi.ei.tum.de/courses/course-in-biological-imaging/',
        ],
        'ieee'             => [
            'description' => 'IEEE Xplore Login',
            'target'      => 'https://ieeexplore.ieee.org/servlet/wayf.jsp?entityId=https://tumidp.lrz.de/idp/shibboleth&url=https%3A%2F%2Fieeexplore.ieee.org',
        ],
        'ifm'              => [
            'description' => 'Investitions- und Finanzmanagement',
            'moodle_id'   => '59135',
        ],
        'ilab1'            => [
            'description' => 'Practical Course: iLab1 - Build your own Internet',
            'target'      => 'https://ilab.net.in.tum.de',
        ],
        'ilab2'            => [
            'description' => 'Practical Course: iLab2 - You set the Focus',
            'target'      => 'https://ilab2.net.in.tum.de',
        ],
        'ilabx'            => [
            'description' => 'Practical Course: iLabX - The Virtual Internet Laboratory (block)',
            'target'      => 'https://ilabx.net.in.tum.de',
        ],
        'imgtech'          => [
            'description' => 'Medical Imaging Technology',
            'moodle_id'   => '61616',
        ],
        'info1'            => [
            'description' => 'Einführung in die Informatik 1',
            'moodle_id'   => '58145',
        ],
        'io'               => [
            'description' => 'Information Officer',
            'target'      => 'https://www.sv.tum.de/asta/io/',
        ],
        'itsec'            => [
            'description' => 'IT-Sicherheit',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ws2020/it-sicherheit',
            'moodle_id'   => '58097',
        ],
        'ja'               => [
            'description' => 'Junge Akademie',
            'target'      => 'https://www.ja.tum.de/start/',
        ],
        'julius'           => [
            'description' => 'Julius Kreutz Tutoriums Website',
            'target'      => 'https://julius-kreutz.de',
        ],
        'ki'               => [
            'description' => 'Grundlagen der künstlichen Intelligenz',
            'moodle_id'   => '58014',
        ],
        'langenacht'       => [
            'description' => 'Lange Nacht der Univeristäten',
            'target'      => 'https://www.facebook.com/events/2681178088623650/',
        ],
        'linalg'           => [
            'description' => 'Lineare Algebra für Informatik',
            'target'      => 'https://www.moodle.tum.de/course/view.php?id=65973',
        ],
        'live'             => [
            'description' => 'Livestreams und Aufzeichnungen von Vorlesungen',
            'target'      => 'https://stream.tum.sexy',
        ],
        'logic'           => [
            'description' => 'Logic',
            'target'      => 'https://www21.in.tum.de/teaching/logic/SS21/',
        ],
        'm'                => [
            'description' => 'Moodle',
            'target'      => 'https://www.moodle.tum.de/Shibboleth.sso/Login?providerId=https://tumidp.lrz.de/idp/shibboleth&target=https://www.moodle.tum.de/auth/shibboleth/index.php',
        ],
        'ma-sp'            => [
            'description' => 'Studienplan M.Sc. Informatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/master-studiengaenge/informatik/studienplan/fpso-2018/',
        ],
        'markov'           => [
            'description' => 'Markovketten',
            'target'      => 'https://www-m5.ma.tum.de/Allgemeines/MA2404_2018W',
            'moodle_id'   => '44962',
        ],
        'matching'         => [
            'description' => 'IN.TUM-Matching-System',
            'target'      => 'https://matching.in.tum.de/saml2/login/',
        ],
        'med1'             => [
            'description' => 'Medizin 1',
            'moodle_id'   => '52166',
        ],
        'med2'             => [
            'description' => 'Medizin II (Krankheitslehre, klinische Propädeutik, Einführung in die Medizinische Informatik)',
            'moodle_id'   => '56092',
        ],
        'mensabot'         => [
            'description' => 'TUMMensabot für Telegram',
            'target'      => 'https://t.me/TUMMensabot',
        ],
        'mensabot2'        => [
            'description' => 'Hübscher Telegram-MensaBot',
            'target'      => 'https://t.me/MensaMUCBot',
        ],
        'ml'               => [
            'description' => 'Machine Learning',
            'target'      => 'https://piazza.com/tum.de/fall2019/in2064/resources',
        ],
        'modsim'           => [
            'description' => 'Modellbildung und Simulation',
            'moodle_id'   => '63516',
        ],
        'mvs'              => [
            'description' => 'Mobile Verteilte Systeme',
            'target'      => 'https://www.os.in.tum.de/studium-und-lehre/ss18/mobile-verteilte-systeme/',
            'moodle_id'   => '38940',
        ],
        'netsec'           => [
            'description' => 'Network Security - Netzsicherheit',
            'target'      => 'https://www.net.in.tum.de/teaching/ws2021/netsec.html',
        ],
        'nix'              => [
            'description' => 'GLÜHNIX',
            'target'      => 'https://www.facebook.com/events/807341503020074/',
        ],
        'numprog'          => [
            'description' => 'Numerisches Programmieren',
            'moodle_id'   => '63517',
        ],
        'o'                => [
            'description' => 'TUM Opac',
            'target'      => 'https://www.ub.tum.de/tum-opac',
        ],
        'osp'              => [
            'description' => 'Practical Course: Contributing to an Open-Source Project',
            'target'      => 'https://www21.in.tum.de/teaching/osp/WS20/',
        ],
        'panopto'          => [
            'description' => 'Panopto Video platform',
            'target'      => 'https://tum.cloud.panopto.eu',
        ],
        'pgdp'             => [
            'description' => 'Praktikum Grundlagen der Programmierung (Moodle-Kurs)',
            'moodle_id'   => '58145',
        ],
        'pgm'              => [
            'description' => 'Probabilistic Graphical Models in Computer Vision',
            'target'      => 'https://vision.in.tum.de/teaching/ss2017/pgmcv',
        ],
        'pl'               => [
            'description' => 'Programming Languages',
            'target'      => 'https://www.in.tum.de/i02/lehre/wintersemester-1920/vorlesungen/programming-languages/',
        ],
        'pp'               => [
            'description' => 'Protein Prediction 1',
            'target'      => 'https://www.rostlab.org/teaching/sose18/pp1cs',
        ],
        'pretschi'         => [
            'description' => 'Formerly Known As SexiPretschi.eu',
            'target'      => 'https://tum.sexy/pret/',
        ],
        'pride'            => [
            'description' => 'TUM Diversity & Queer',
            'target'      => 'https://www.facebook.com/events/599246697252806/',
        ],
        'progopt'          => [
            'description' => 'Program Optimization',
            'target'      => 'https://www.in.tum.de/i02/lehre/wintersemester-2021/vorlesungen/program-optimization/',
        ],
        'pse'              => [
            'description' => 'Patterns in Software Engineering',
            'target'      => 'https://ase.in.tum.de/lehrstuhl_1/teaching/1138-patterns-in-software-engineering-ws20-21',
        ],
        'qo'               => [
            'description' => 'Query Optimization',
            'target'      => 'https://db.in.tum.de/teaching/ws2021/queryopt/',
        ],
        'quintero'         => [
            'description' => 'Mathias Quintero',
            'target'      => 'https://home.in.tum.de/~szillat/',
        ],
        'reddit'           => [
            'description' => 'ReddiTUM',
            'target'      => 'https://reddit.com/r/redditum',
        ],
        'ref-eat-api'      => [
            'description' => 'All menus that are not older than one day for all locations from the eat-api in JSON',
            'target'      => 'https://tum-dev.github.io/eat-api/all_ref.json',
        ],
        'restplaetze'      => [
            'description' => 'Liste der Restplätze in Seminaren und Praktika',
            'target'      => 'https://www.in.tum.de/fuer-studierende/module-und-veranstaltungen/praktika-und-seminare/',
        ],
        'room'             => [
            'description' => 'Lernräume',
            'target'      => 'https://www.devapp.it.tum.de/iris/app/',
        ],
        'roombot'          => [
            'description' => 'Roomfinder als Telegram Bot',
            'target'      => 'https://t.me/tumroomsbot',
        ],
        'rpchi'            => [
            'description' => 'Robot Programming and Control for Human Interaction',
            'target'      => 'https://www.in.tum.de/i23/teaching/robot-programming-and-control-for-human-interaction/',
        ],
        'rts'              => [
            'description' => 'Echtzeitsysteme / Real Time Systems',
            'moodle_id'   => '42138',
        ],
        'satellite'        => [
            'description' => 'The TUM Satellite',
            'target'      => 'https://www.move2space.de/',
        ],
        'sbrml'            => [
            'description' => 'Sensor-based Robotic Manipulation and Locomotion',
            'moodle_id'   => '62737',
        ],
        'scivis'           => [
            'description' => 'Scientific Visualization / Visual Data Analytics',
            'target'      => 'https://www.in.tum.de/cg/teaching/winter-term-2021/visual-data-analytics/',
        ],
        'scopus'           => [
            'description' => 'TUM UB Scopus Login (eAccess)',
            'target'      => 'https://login.eaccess.ub.tum.de/login?qurl=https://ub.tum.de%2fdbis-link%3ftitle_id%3d3636%26destination%3ddatenbanken%2fsuche%253Fqt-dbis%253D1%2526type%253Ddb%2526terms%253Dscopus%2526x%253D0%2526y%253D0',
        ],
        'scraper'          => [
            'description' => 'Tool to scrape and download videos from Panopto, TumLive and TumLive-v2',
            'target'      => 'https://github.com/Valentin-Metz/tum_video_scraper',
        ],
        'seba'             => [
            'description' => 'Software Engineering for Business Applications',
            'moodle_id'   => '58046',
        ],
        'set'              => [
            'description' => 'Studieneinführungstage der FSMPI',
            'target'      => 'https://mpi.fs.tum.de/neu-an-der-tum/set/',
        ],
        'sharelatex'       => [
            'description' => 'ShareLaTeX@TUM',
            'target'      => 'https://sharelatex.tum.de/',
        ],
        'shuttle'          => [
            'description' => 'WZW-GAR-MUC shuttle schedule',
            'target'      => 'https://tum.sexy/shuttle/',
        ],
        'slam'             => [
            'description' => 'TUM Hörsaal Slam',
            'target'      => 'https://www.facebook.com/events/400633344170175/',
        ],
        'sp'               => [
            'description' => 'Studienplan B.Sc. Informatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/informatik/studienplan/studienbeginn-ab-ws-201819/',
        ],
        'springer'         => [
            'description' => 'Springer Link Login',
            'target'      => 'https://fsso.springer.com/federation/init?entityId=https://tumidp.lrz.de/idp/shibboleth&returnUrl=https%3A%2F%2Flink.springer.com',
        ],
        'st'               => [
            'description' => 'Signaltheorie',
            'target'      => 'https://www.ei.tum.de/mmk/lehre/signaltheorie-ab-ws1920/',
            'moodle_id'   => '44034',
        ],
        'statista'         => [
            'description' => 'Statista',
            'target'      => 'https://de-statista-com.eaccess.ub.tum.de',
        ],
        'streams'          => [
            'description' => 'RBGreaterAgain - Bessere RBG streams',
            'target'      => 'https://stream.tum.sexy',
        ],
        'stuff'            => [
            'description' => 'Studystuff (ehemals Unistuff)',
            'target'      => 'https://studystuff.org',
        ],
        'ted'              => [
            'description' => 'TEDxTUM Event-Seite',
            'target'      => 'https://tedxtum.com',
        ],
        'theo'             => [
            'description' => 'Einführung in die theoretische Informatik',
            'target'      => 'https://www.in.tum.de/i07/lehre/ss21/theo/',
        ],
        'theojudge'        => [
            'description' => 'TUMjudge - Einführung in die theoretische Informatik',
            'target'      => 'https://judge.in.tum.de/theo/public/',
        ],
        'theotutor'        => [
            'description' => 'Einführung in die theoretische Informatik: Automatatutor',
            'target'      => 'https://automata.model.in.tum.de/',
        ],
        'tms'              => [
            'description' => 'Support Elective: Think. Make. Start.',
            'target'      => 'https://www.thinkmakestart.com/',
        ],
        'unidb'            => [
            'description' => 'Unischema von Prof. Kemper',
            'target'      => 'https://db.in.tum.de/teaching/ws2021/grundlagen/uni.png',
        ],
        'vm'               => [
            'description' => 'Virtual Machines',
            'target'      => 'https://www.in.tum.de/i02/lehre/sommersemester-20/vorlesungen/virtual-machines/',
        ],
        'vorkurs'          => [
            'description' => 'Mathematik Vorkurs für Informatiker',
            'target'      => 'https://www.ma.tum.de/de/studium/vorkurse-ferienkurse/informatik.html',
        ],
        'vt'               => [
            'description' => 'Virtualization Techniques',
            'target'      => 'https://www.caps.in.tum.de/lehre/ws19/vorlesungen/virtualization-techniques/',
        ],
        'wahl'             => [
            'description' => 'Hochschulwahlen',
            'target'      => 'https://www.sv.tum.de/wahl/',
        ],
        'walomat'          => [
            'description' => 'Wal-O-Mat',
            'target'      => 'https://walomat.asta.tum.de',
        ],
        'websec'           => [
            'description' => 'WebApplication Security Bachelor Praktikum',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ws2017/web-application-security',
        ],
        'wi-ma-sp'         => [
            'description' => 'Studienplan M.Sc. Wirtschaftsinformatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/master-studiengaenge/wirtschaftsinformatik/studienplan/ab-sose-2020/',
        ],
        'wi-sp'            => [
            'description' => 'Studienplan B.Sc. Wirtschaftsinformatik',
            'target'      => 'https://www.in.tum.de/fuer-studierende/bachelor-studiengaenge/wirtschaftsinformatik/studienplan/studienbeginn-ab-ws-20182019/',
        ],
    ];

    // Format is: <source / synonym> => <target> - the target must be present in the $routes array
    private $synonyms = [
        'ada'            => 'advalgs',
        'ai'             => 'ki',
        'algebra'        => 'algebra1',
        'bs'             => 'gbs',
        'complexity'     => 'comp',
        'covid'          => 'corona',
        'csd'            => 'pride',
        'eidi'           => 'info1',
        'eidi2'          => 'fpv',
        'erap'           => 'erapraktikum',
        'erapra'         => 'erapraktikum',
        'ezs'            => 'rts',
        'gdb'            => 'db',
        'geo'            => 'geokalkuele',
        'geokal'         => 'geokalkuele',
        'hsw'            => 'wahl',
        'info2'          => 'fpv',
        'kino'           => 'film',
        'kreutz'         => 'julius',
        'la'             => 'linalg',
        'latex'          => 'sharelatex',
        'match'          => 'matching',
        'netz'           => 'grnvs',
        'pat'            => 'pse',
        'patterns'       => 'pse',
        'protein'        => 'pp',
        'queer'          => 'diversity',
        'rbgreater'      => 'streams',
        'rbgreateragain' => 'streams',
        'roomfinder'     => 'finder',
        'rooms'          => 'room',
        'sp-ge'          => 'ge-sp',
        'sp-ma'          => 'ma-sp',
        'tex'            => 'sharelatex',
        'tumi'           => 'esn',
        'uml'            => 'apollon',
        'urban-mobility' => 'ecarus',
        'wahlomat'       => 'walomat',
        'zoom'           => 'conf',
        'zweidi'         => 'fpv',
    ];

    /**
     * Only items/routes listed in this will be shown on the front page of the website
     * @var mixed[][]
     */
    private $sections = [
        '1. Semester' => [
            'info1',
            'pgdp',
            'era',
            'ds',
            'carlos',
        ],
        '2. Semester' => [
            'eist',
            'gad',
            'erapraktikum',
            'linalg',
            'ged',
        ],
        '3. Semester' => [
            'anal',
            'fpv',
            'db',
            'gbs',
        ],
        '4. Semester' => [
            'grnvs',
            'theo',
            'theojudge',
            'dwt',
        ],
        '5. Semester' => [
            'numprog',
        ],
        '6. Semester' => [],
        'Special'     => [
            'app',
            'c',
            'eat-api',
            'ecarus',
            'esn',
            'film',
            'finder',
            'ge-ma-sp',
            'ge-sp',
            'git-tut',
            'gitlab',
            'hunger',
            'ieee',
            'm',
            'ma-sp',
            'matching',
            'mensabot',
            'mensabot2',
            'panopto',
            'reddit',
            'room',
            'roombot',
            'scopus',
            'set',
            'sharelatex',
            'shuttle',
            'slam',
            'sp',
            'springer',
            'statista',
            'streams',
            'stuff',
            'vorkurs',
            'wahl',
            'walomat',
            'wi-ma-sp',
            'wi-sp',
        ],
        'Electives'   => [
            'adlr',
            'adm',
            'advalgs',
            'agt',
            'algebra1',
            'artemis',
            'ase',
            'automata',
            'bmt',
            'comp',
            'compiler',
            'conpra',
            'crypto',
            'csc',
            'cvmvg',
            'cvvm',
            'ea',
            'erdb',
            'ged',
            'geokalkuele',
            'gki',
            'gog',
            'ilab1',
            'ilab2',
            'ilabx',
            'itsec',
            'ki',
            'markov',
            'ml',
            'modsim',
            'mvs',
            'netsec',
            'osp',
            'pgm',
            'pl',
            'pp',
            'progopt',
            'pse',
            'qo',
            'rpchi',
            'rts',
            'sbrml',
            'scivis',
            'st',
            'tms',
            'vm',
            'vt',
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
        } //If target does not exist? Try moodle course
        else if (!isset($this->routes[$redirectUrl]['target'])) {
            if (isset($this->routes[$redirectUrl]['moodle_id'])) {
                $siteType = 'm';
            } //If target and moodle course does not exist? Go to main page
            else {
                return 'https://tum.sexy/';
            }
        }

        //In case we actually want to go to a different target than the actual redirect
        switch ($siteType) {
            case 'm' :
                // This is a moodle redirect like minfo1.tum.sexy
                $route = $this->routes[$redirectUrl];
                if (!isset($route['moodle_id'])) {
                    return $route['target'];  // Fallback to target if moodle id is unknown
                }

                return 'https://www.moodle.tum.de/course/view.php?id=' . $route['moodle_id'];
        }

        return $this->routes[$redirectUrl]['target'];
    }

    public function getArraysThatShouldBeSorted(): array {
        return [
            array_keys($this->routes),
            array_keys($this->synonyms),
            $this->sections["Special"],
            $this->sections["Electives"],
        ];
    }

    public function getResolvedArrays(): array {
        $ret = [];
        //all entries, will be reduced to the entries that are not in a section
        $all = $this->routes;

        sort($this->sections['Electives']);

        //Iterate over our sections which can contain any number of routes
        foreach ($this->sections as $section => $subs) {
            $ret[$section] = [];

            //Iterate over all routes in current section
            foreach ($subs as $sub) {

                //Resolve the route and add to final array
                $ret[$section][] = ['desc' => $this->routes[$sub]['description'], 'sub' => $sub];
                // remove entry from all (because it is in a section)
                unset($all[$sub]);
            }
        }
        foreach ($all as $sub => $hiddenElem) {
            $ret["Others"][] = ['desc' => $hiddenElem['description'], 'sub' => $sub];
        }
        return $ret;
    }

}
