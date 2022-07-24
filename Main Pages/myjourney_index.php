<!DOCTYPE html>
<?php
session_destroy();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>MyJourney_Index</title>
		<link rel="stylesheet" href="main.css" type="text/css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
	</head>

	<body class="landing is-preload">
		<div id="page-wrapper">
			<header id="header" class="alt">
				<h1><a href="myjourney_index.php">MyJourney</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="myjourney_index.php">Home</a></li>
						<li><a href="how_it_works.php">How It Works</a></li>
						<li><a href="FAQ.php">FAQ</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</header>

			<section id="banner">
				<h2>Getting to your gate<br/>
						just got easier...</h2>
			</section>

			<section id="main" class="container">
				<section class="box special">
					<header class="major">
						<h2>Stress-Free: Home to Gate</h2>
							<p>MyJourney integrates traffic information, security check, and terminal walking durations to assist you in making sure you leave on time and get to your gate on time.<br/>
							All You Need Is You!
							</p>
					</header>
			</section>
<!--Flight Search Box-->
		<div id="Flight" class="search1" style="display: block;">
			<h3>Plan When to Leave for the Airport</h3>
				<form action="flightlabs.php" method="get">
					<button type="submit" class="button">Start Here!</button>
				</form>
		</div>
		</section>
	
		<section class="box special">
			<span class="image featured"><img src="image3.jpeg" alt=""/></span>
		</section>
	</body>
	

	<!-- Added footer Fragment with External footer.JS File-->
	<script id="replace_with_footer" src="footer.js"></script>

</html>
