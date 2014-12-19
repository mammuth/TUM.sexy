<html>
<head>
	<meta charset="utf-8">
	<title>tum.sexy | Raumbelegungen</title>
  <meta name="description" content="Helpfull links, subdomains, redirects and tools for students of the Technical University Munich (TUM)">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/skeleton.css">
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="icon" type="image/png" href="../images/favicon.png" />

	<style media="screen" type="text/css">
		body {
			font-size: 1.5em !important; /* currently ems cause chrome bug misinterpreting rems on body element */
			line-height: 1.6 !important;
			font-weight: 400 !important;
			font-family: "Raleway", "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
			color: #222 !important;

		}
		span.status {
			margin-top: -28 !important;
			padding: 6px !important;
		}
		.status_list li.st_occupied span.status {
			background-color: #FF3D00 !important;
		}
		h1 {
			background-image: linear-gradient(#FF9800 0%, #FF9800 100%) !important;
			background-image: werbkit-linear-gradient(#FF9800 0%, #FF9800 100%) !important;
		}

	</style>
</head>
<body>
	<?php

	$replacements = array();
	$replacements['<h1>Raumbelegung</h1>'] = '<h1 style="font-size: 30px !important">Raumbelegung | <span style="font-size:15px !important">TUM.<strong>sexy</strong></span></h1>'; // 
	$replacements['voraussichtlich'] = ''; // shorten "voraussichtlich noch x Minuten belegt."
	$replacements['wbrisweb.status_mobile_mi'] = 'https://sexipretschi.eu/Game/'; // replace Refresh with Pretschner Game
	$site = strtr(file_get_contents('https://campus.tum.de/tumonline/wbrisweb.status_mobile_mi'), $replacements); // apply replacements

	$site = preg_replace('/src=\"data:image\/png;base64,.*\"/s', 'src=refresh.png', $site); // replace refresh icon...yep - the original is an absolutely crazy one, only replaceably by regex.

	echo $site;
	?>

	<hr />
	<p>Dies ist ein Mirror mit einer Handvoll kleiner Änderungen. Original zu finden auf <a href="https://campus.tum.de/tumonline/wbrisweb.status_mobile_mi" target="_blank">https://campus.tum.de/tumonline/wbrisweb.status_mobile_mi</a></p>

</body>
</html>