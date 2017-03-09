<?php
if (!isset($_GET['cats'])) {
    header('Location: /index.php?cats=0');
    die();
}

include('./redirect/routes.php');
$Router = new Route();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>tum.sexy | Fancy stuff related to TUM</title>
        <meta name="description" content="Helpfull links, subdomains, redirects and tools for students of the Technical University Munich (TUM)">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/custom.css">
	<link rel="search" href="opensearchdescription.xml" type="application/opensearchdescription+xml" title="tum.sexy" />
        <link rel="icon" type="image/png" href="favicon.png" />
    </head>
    <body>
        <div class="container">
            <div class="row" id="header-row">
                <h1 id="sexy-name">TUM<strong>.sexy</strong></h1>
                <a id="github-star-button" class="github-button" href="https://github.com/mammuth/TUM.sexy/" data-icon="octicon-star" data-style="mega" data-count-href="/mammuth/TUM.sexy/stargazers" data-count-api="/repos/mammuth/TUM.sexy#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star mammuth/TUM.sexy on GitHub">Star</a>
            </div>
            <div class="row" style="margin-top:10%">

                <div class="one-half column">
                    <h3>Redirects</h3>
                    <p>
                        No need for remembering long and ugly urls or bookmarks<br />
                        — Just use these redirects!
                    </p>

                    <?php echo $Router->getHtmlList(); ?>
                </div>

                <div class="one-half column">
                    <h3>About</h3>
                    <ul>
                        <li>If you want to <strong>update or add redirects</strong>, take a look at the instructions on the <a href="https://github.com/mammuth/TUM.sexy/tree/master/redirect" target="_blank">Github Repo!</a></li>
                        <li>You have an idea for how to improve this site? Feel free to <strong>contribute</strong> on our <a href="https://github.com/mammuth/TUM.sexy" target="_blank">GitHub Page</a>!
                        <li>Contact: <a href="mailto:heilig@tum.sexy">heilig@tum.sexy</a></li>
                    </ul>

                    <h3>Projects / Links</h3>
                    <ul>
                        <li><a href="https://cal.bruck.me">Calendar Proxy</a>
                            <ul>
                                <li>Nice and easy proxy to remove some clutter from the TUM online iCal export. E.g.: replaces 'Tutorübung' with 'TÜ' and Google Now readable locations</li>
                            </ul>
                        </li>
                        <li>FMI Bistro “Speiseplan” — <a href="http://hunger.tum.sexy">hunger.tum.sexy</a></li>
                        <li>MI Raumbelegungen — <a href="http://rooms.tum.sexy">rooms.tum.sexy</a></li>
                        <li><a href="https://sexipretschi.eu/Game/">Sexi Pretschi Game</a></li>
                        <li><a href="https://docs.google.com/document/d/1eW6DmvvKoolAWRMp6P3tMts-XWSb263Ap97LyRQ5Wno/edit?usp=sharing">Ersti Tipps</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div id="footer">
            <div class="left">
                <a href="?cats=1">Gimme' cats!</a>
            </div>
            <div class="right">
                Provided by Lukas, <a href="https://bruck.me">Kordian</a> &amp; <a href="http://www.maxi-muth.de">Max</a>
            </div>
        </div>
        <script async defer src="//buttons.github.io/buttons.js"></script>
    </body>
    <?php
    if (isset($_GET['cats']) && $_GET['cats'] !== '0') {
        ?>
        <script>
            window.onload = function () {
                document.body.background = 'http://thecatapi.com/api/images/get?format=src&type=gif';
            };
        </script>
        <?php
    }
    ?>
</html>
