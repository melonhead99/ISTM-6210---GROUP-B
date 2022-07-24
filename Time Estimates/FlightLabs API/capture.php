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
	<!-- Added Navbar Fragment with External Nav.JS File-->
	<script id="replace_with_navbar" src="nav.js"></script>
	<section id="main" class="container medium">
	<header>
	<h2>Flight Information</h2>
	<p>
		Let's check up on your flight.
	</p>
	</header>
        <?php
        //Create Session
        session_start();
        //Creating Session ID
        $_SESSION['Arrival'] = $_POST['arr_iata'];
        $_SESSION['Airline'] = $_POST['airline'];
        $_SESSION['flightID'] = $_POST['flightID'];

        //storing session data
        $_SESSION['API'] = '';
        $_SESSION['HTTP'] = 'https://app.goflightlabs.com/flights?access_key=';
        $_SESSION['PARA'] = '&dep_iata=DCA&flight_number=';
        $_SESSION['PARAA'] = '&arr_iata=';
        $_SESSION['PARAAA'] = '&airline_iata=';


        /* Testing Param
        print_r($_POST); 
        echo $_SESSION['HTTP'] . $_SESSION['API'] . $_SESSION['PARA'] . $_SESSION['flightID'] . $_SESSION['PARAA'] . $_SESSION['Arrival'] . $_SESSION['PARAAA'] . $_SESSION['Airline'];
        */

        // create & initialize a curl session
        $curl = curl_init();

        // set our url with curl_setopt()
        curl_setopt($curl, CURLOPT_URL, $_SESSION['HTTP'] . $_SESSION['API'] . $_SESSION['PARA'] . $_SESSION['flightID'] . $_SESSION['PARAA'] . $_SESSION['Arrival'] . $_SESSION['PARAAA'] . $_SESSION['Airline']);

        // return the transfer as a string, also with setopt()
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // curl_exec() executes the started curl session
        // $data contains the output string
        $data = curl_exec($curl);

        // close curl resource to free up system resources
        // (deletes the variable made by curl_init)
        curl_close($curl);

        //4.	Display the JSON output captured in $data
        //print($data);

        //Stores JSON data in a PHP variable then decodes it into a PHP array
        $myArray = json_decode($data, true);
        //prints the selected values from the array variable
        //print_r($myArray);
        
        echo "Flight Date: ";
        echo $myArray[0]["flight_date"];
        echo "<br>Flight Status: ";
        echo $myArray[1]["flight_status"];
        echo "<br>Departure Airport: ";
        echo $myArray[3]["departure"]["airport"];
        echo "<br>Departure Time Zone: ";
        echo $myArray[3]["departure"]["timezone"];
        echo "<br>Departure Terminal: ";
        echo $myArray[3]["departure"]["terminal"];
        echo "<br>Departure Gate: ";
        echo $myArray[3]["departure"]["gate"];
        echo "<br>Departure Delay: ";
        echo $myArray[3]["departure"]["delay"];
        echo "<br>Departure Scheduled Time: ";
        echo $myArray[3]["departure"]["scheduled"];
        echo "<br>Departure Estimated Time: ";
        echo $myArray[3]["departure"]["estimated"];

        // Saving Estimated Departure time in Session
        $_SESSION['Est_time'] = $myArray[3]["departure"]["estimated"];
        ?>
    <form method="post" action="google.php">
        <div class="col-12">
            <ul class="actions special">
                <li><input name = "submit" type="submit" value="Confirm!"/></li>
            </ul>
        </div>
    </form>
</body>


<!-- Added footer Fragment with External footer.JS File-->
<script id="replace_with_footer" src="footer.js"></script>
</html>