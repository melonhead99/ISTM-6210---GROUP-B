<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Contact</title>
<link rel="stylesheet" href="main.css" type="text/css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
</head>
<body class="is-preload">
<div id="page-wrapper">
	<!-- Added Navbar Fragment with External Nav.JS File-->
	<script id="replace_with_navbar" src="nav.js"></script>
	<section id="main" class="container medium">
	<header>
	<h2>Contact Us</h2>
	<p>
		Let's get in touch.
	</p>
	</header>
	<div class="box">
		<form method="post" action="#">
			<div class="row gtr-50 gtr-uniform">
				<div class="col-6 col-12-mobilep">
					<input type="text" name="name" id="name" value="" placeholder="First Name"/>
				</div>
				<div class="col-6 col-12-mobilep">
					<input type="email" name="email" id="email" value="" placeholder="Last Name"/>
				</div>
				<div class="col-12">
					<input type="text" name="subject" id="subject" value="" placeholder="Email Address"/>
				</div>
				<div class="col-12">
					<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
				</div>
				<div class="col-12">
					<ul class="actions special">
						<li><input type="submit" value="Send Message"/></li>
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