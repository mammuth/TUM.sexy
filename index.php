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
          <li><a href="calendar/">Calendar Proxy</a>
            <ul>
              <li>Nice and easy proxy to remove some clutter from the TUM online iCal export. E.g.: replaces 'Tutorübung' with 'TÜ' and Google Now readable locations</li>
            </ul>
          </li>
          <li>FMI Bistro "Speiseplan" - <a href="http://hunger.tum.sexy">hunger.tum.sexy</a></li>
          <li>MI Raumbelegungen - <a href="http://rooms.tum.sexy">rooms.tum.sexy</a></li>
          <li><a href="https://sexipretschi.eu/Game/">Sexi Pretschi Game</a></li>
          <li>...</li>
        </ul>
      </div>

      <div class="one-half column">
        <h3>Simple Redirects</h3>
        <h5>Special Stuff</h5>
        <ul>
          <li>TUM Online - <a href="http://c.tum.sexy">c.tum.sexy</a></li>
          <li>ReddiTUM - <a href="http://reddi.tum.sexy">reddi.tum.sexy</a></li>
          <li>Moodle - <a href="http://m.tum.sexy">m.tum.sexy</a></li>
          <li>TEDxTUM - <a href="http://tedx.tum.sexy">tedx.tum.sexy</a></li>
        </ul>


        <h5>Lessons</h5>

        1. Semester
        <ul>
          <li>Diskrete Strukturen - <a href="http://ds.tum.sexy">ds.tum.sexy</a>
            <ul><li>carlos-camino.de ❤ (Tutor) - <a href="http://carlos.tum.sexy">carlos.tum.sexy</a></li></ul>
          </li>
        </ul>

        2. Semester
        <ul>
        	<li>EIST - <a href="http://eist.tum.sexy">eist.tum.sexy</a></li>
        </ul>

        3. Semester
        <ul>
          <li>Analysis - <a href="http://anal.tum.sexy">anal.tum.sexy</a>
            <li>Info2 - <a href="http://info2.tum.sexy">info2.tum.sexy</a></li>
            <li>Algorithmische Diskrete Mathematik - <a href="http://adm.tum.sexy">adm.tum.sexy</a>
            </ul>
          </div>

        </div>
      </div>

      <div id="footer" style="margin-left:10px; font-size: smaller;"><a href="?cats=1">Gimme' cats!</a></div>
      <div id="footer"><p>Provided by Lukas K. and Max M.</p></div>
      <?php include('googleanalytics.php') ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
<script>
  function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
      var pair = vars[i].split("=");
      if (pair[0] == variable) {
        console.log("cats param = "+pair[1]);
        return pair[1];
      }
    }
    /* add cats-parameter, so the user notices it */
    console.log("Added cats=false param");
    insertParam('cats', 0);
  }

  function insertParam(key, value) {
    key = encodeURI(key); value = encodeURI(value);

    var kvp = document.location.search.substr(1).split('&');

    var i=kvp.length; var x; while(i--)
    {
      x = kvp[i].split('=');

      if (x[0]==key)
      {
        x[1] = value;
        kvp[i] = x.join('=');
        break;
      }
    }

    if(i<0) {kvp[kvp.length] = [key,value].join('=');}

        //this will reload the page, it's likely better to store this until finished
        document.location.search = kvp.join('&');
      }

      var totalCount = 8;
      var cats;
      function pageLoaded() {
        cats = getQueryVariable("cats");
        if (cats == false) {
          console.log("sadly no cats this time");
          return;
        }
     /*   var num = Math.ceil( Math.random() * totalCount );
        document.body.background = '//media.disquscdn.com/errors/img/'+num+'.gif';
        document.body.style.backgroundRepeat = "repeat";// Background repeat */
        document.body.background = 'http://thecatapi.com/api/images/get?format=src&type=gif';
      }

      window.onload = pageLoaded;
      </script
      </html>
