<!DOCTYPE html>
<html>
<head>

<?php
session_start();
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>TSA Wait Times</title>
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
	<h2>TSA Information</h2>
	<p>
		Current wait time expectations.
	</p>
	</header>
        <?php
        //Create Session
        //Wait Times API Key: yRGODcT16owChN4INC3rvwS44D8RBpFz
        
        // create & initialize a curl session
        $curl = curl_init();

        // set our url with curl_setopt()
        curl_setopt($curl, CURLOPT_URL, "https://www.tsawaittimes.com/api/airport/key=/DCA/{FORMAT}" );

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
        
        echo "Airport: ";
        echo $myArray["code"];
        echo ", ";
        echo $myArray["name"];
        echo "<br> Average Wait Time Right Now: ";
        echo $myArray["rightnow_description"];
        echo "<br><br>Estimated Wait Times per Time Slot: <br>";

        echo $myArray["estimated_hourly_times"][0]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][0]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][1]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][1]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][2]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][2]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][3]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][3]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][4]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][4]["waittime"] ." Average Minutes <br>";
        
        echo $myArray["estimated_hourly_times"][5]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][5]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][6]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][6]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][7]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][7]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][8]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][8]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][9]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][9]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][10]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][10]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][11]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][11]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][12]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][12]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][13]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][13]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][14]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][14]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][15]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][15]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][16]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][16]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][17]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][18]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][19]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][19]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][20]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][20]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][21]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][21]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][22]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][22]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][23]["timeslot"];
        echo ": ".$myArray["estimated_hourly_times"][23]["waittime"] ." Average Minutes <br>";

        echo $myArray["estimated_hourly_times"][24]["timeslot"];
        echo $myArray["estimated_hourly_times"][24]["waittime"];
        
        // Saving Estimated Wait time in Session
        $_SESSION['TSA_time'] = $myArray["rightnow"];
        ?>
    <form method="post" action="final_est.php">
        <div class="col-12">
            <ul class="actions special">
                <li><input name = "submit" type="submit" value="Final Time Estimate"/></li>
            </ul>
        </div>
    </form>
</body>


<!-- Added footer Fragment with External footer.JS File-->
<script id="replace_with_footer" src="footer.js"></script>
</html>
