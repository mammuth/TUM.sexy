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
  <link rel="icon" type="image/png" href="favicon.png" />

  <!-- Scripts at bottom -->
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row" style="margin-top: 10%">

      <h1 id="sexy-name">TUM<strong>.sexy</strong></h1>


      <p><br />What's this all about? Well first of all you find some nice <strong>subdomain-redirects</strong> which are a shorter and more memorable.</p>

      <p>In the future we are going to host some cool projects relating to TUM here.</p>

      <p>If you wanna have new redirects or have your project linked here, just drop a line at <a href="mailto:heilig@tum.sexy">heilig@tum.sexy</a>. Btw, because Open-Source is cool you find it at <a href="https://github.com/mammuth/TUM.sexy">Github</a></p>
      <br />

    </div>
    <div class="row" style="margin-top:10%">

      <div class="one-half column">


        <h3>Projects / Links</h3>
        <ul>
          <li><a href="/calendar/">Calendar Proxy</a>
            <ul>
              <li>Nice and easy proxy to remove some clutter from the TUM online iCal export. E.g.: replaces 'Tutorübung' with 'TÜ' and Google Now readable locations</li>
            </ul>
          </li>
          <li>FMI Bistro "Speiseplan" - <a href="http://hunger.tum.sexy">hunger.tum.sexy</a></li>
          <li>MI Raumbelegungen - <a href="http://rooms.tum.sexy">rooms.tum.sexy</a></li>
          <li><a href="https://sexipretschi.eu/Game/">Sexi Pretschi Game</a></li>
        </ul>
      </div>

      <div class="one-half column">
        <h3>Redirects</h3>
              <?php echo $Router->getHtmlList(); ?>
          </div>

        </div>
      </div>

      <div id="footer" style="margin-left:10px; font-size: smaller;"><a href="?cats=1">Gimme' cats!</a></div>
      <div id="footer"><p>Provided by Lukas, Kordian & Max</p></div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
<?php
  if(isset($_GET['cats']) && $_GET['cats'] !== '0') {
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
