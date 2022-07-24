<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FlightLab</title>
<link rel="stylesheet" href="main.css" type="text/css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<script type="text/javascript" src="time_estimate.js"></script>
</head>
<body class="is-preload">
<div id="page-wrapper">
	<!-- Added Navbar Fragment with External Nav.JS File-->
	<script id="replace_with_navbar" src="nav.js"></script>
	<section id="main" class="container medium">
	<header>
	<h2>Flight Information</h2>
	<p>
		Let's check up on your flight.
	</p>
	</header>
	<div class="box">
		<form method="post" action="capture.php">
			<div class="row gtr-50 gtr-uniform">
			
				<div class="search3">
                    <label>What is your destination? </label>
                    <input name="arr_iata" type="text" placeholder="Arrival IATA">
                </div>

				<div class="search3">
                    <label>What airline are you flying? </label>
                    <input name="airline" type="text" placeholder="Airline IATA">
                </div>

                <div class="search3">
                    <label>What is your flight number? </label>
                    <input name="flightID" type="text" placeholder="Flight #">
                </div>

				<div class="col-12">
					<ul class="actions special">
						<li><input name = "submit" type="submit" value="Check"/></li>
					</ul>
				</div>
			</div>
		</form>
	</div>
	</section>
	</div>
</body>


	<!-- Added footer Fragment with External footer.JS File-->
	<script id="replace_with_footer" src="footer.js"></script>
	</html>