<!DOCTYPE html>
<html>
<head>

<?php
session_start();
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Travel Time</title>
<link rel="stylesheet" href="main.css" type="text/css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<script type="text/javascript" src="time_estimate.js"></script>
</head>
<body class="is-preload">
	<!-- Added Navbar Fragment with External Nav.JS File-->
	<script id="replace_with_navbar" src="nav.js"></script>
	<section id="main" class="container medium">
	<header>
	<h2>Travel Information</h2>
	<p>
		Let's check your total estimated travel time.
	</p>
	</header>
        <?php

        echo "Estimated Flight Departure: ";
        echo $_SESSION['Est_time'];

        echo "<br>Estimated Travel Time: ";
        echo $_SESSION['duration'] . "32 minutes";

        echo "<br>Estimated TSA Wait Time: ";
        echo $_SESSION['TSA_time'] . " minutes";
        
        
    ?>
</body>


<!-- Added footer Fragment with External footer.JS File-->
<script id="replace_with_footer" src="footer.js"></script>
</html>