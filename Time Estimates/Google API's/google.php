<!DOCTYPE html>
<html>
<head>

<?php
session_start();
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Google Distance Matrix</title>
<link rel="stylesheet" href="main.css" type="text/css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<script type="text/javascript" src="time_estimate.js"></script>
<link href="App.css" rel="stylesheet" />
</head>
<body class="is-preload">
	<!-- Added Navbar Fragment with External Nav.JS File-->
	<script id="replace_with_navbar" src="nav.js"></script>
	<section id="main" class="container medium">
	<header>
	<h2>Transit Information</h2>
	<p>
		Let's calculate the total distance and time.
	</p>
	</header>
<body>
  

    <div class="jumbotron">
        <div class="container-fluid">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="from" placeholder="Origin" class="form-control">
                    </div>
               </div>
               <div class="form-group">
                
                    <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="to" placeholder="Destination" class="form-control">
                    </div>
                  
                 </div>
                 
            </form>

            <div class="">
                <button class="btn btn-info btn-lg " onclick="calcRoute();"> Calculate Route </button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap">

            </div>
            <div id="output">
            <!-- Testing PHP JS Variable Storage -->
            <?php 
                $_SESSION['duration'] = "<script>document.write(duration)</script>"; //I want above javascript variable 'duration' value to be store here
            ?>
            
        </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="Main.js"></script>


    </script>
<form method="post" action="wait_times.php">
        <div class="col-12">
            <ul class="actions special">
                <li><input name = "submit" type="submit" value="Confirm"/></li>
            </ul>
        </div>
    </form>
</body>


<!-- Added footer Fragment with External footer.JS File-->
<script id="replace_with_footer" src="footer.js"></script>
</html>

