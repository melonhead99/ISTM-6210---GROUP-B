<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>FAQ</title>
		<link rel="stylesheet" href="main.css" type="text/css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>

<body class="bodyfaq">
	<div id="page-wrapper">
		<header id="header">
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


    <div class="container medium">
      <div class="row">
        <div class="faq-wrapper">
          <div class="header">
            <h1>FAQs</h1>
          </div>
          <div class="faq-inner">
            <div class="faq-item">
              <h5>
                Where is MyJourney available?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
                MyJourney is currently available within the Washington, D.C. metro area.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h5>
                What are the participating airports?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
                Currently available at Ronald Reagan Washington National Airport(DCA), with more locations coming soon.
              </div>
            </div>          
            <hr>
            <div class="faq-item">
              <h5>
                Can I take advantage of a faster process for TSA PreCheck with MyJourney?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
                Unfortunately, we do not offer a faster track for the security screening.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h5>
                Is my information safe with MyJourney?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
                MyJourney will always be honest and transparent. You will be notified When MyJourney requests information from you, what information we are collecting and how it will be used.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h5>
                How do I contact MyJourney?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
                You can email us to customerservice@myjourney.com, or call us 031.256.9321.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      $(".faq-plus").on('click',function(){
        $(this).parent().parent().find('.faq-body').slideToggle();
      });
    </script>


    </body>


	<footer id="footer">
		<ul class="copyright">
			<p>MyJourney &#8855; 39281 Homestead Rd, Washington, DC 20052 &#8855; 031.256.9321 &#8855; customerservice@myjourney.com
			</p>
		</ul>
	</footer>

</html>