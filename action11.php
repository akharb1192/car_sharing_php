<?php
        
		$link = mysqli_connect("localhost", "root", "", "carshare");
		 
		if($link === true){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
         echo "<html><head>
        <style>
        body
        {
        background-image:url('add1.jpg');
        }
        h1
        {
        color:white;
        margin:200px;
        }
        </style>
        </head><body></body></html>";
           
		$b1 = mysqli_real_escape_string($link, $_REQUEST['a1']);
		$b2 = mysqli_real_escape_string($link, $_REQUEST['a2']);
		$b3 = mysqli_real_escape_string($link, $_REQUEST['a3']);
		$b4 = mysqli_real_escape_string($link, $_REQUEST['a4']);
		$b5 = mysqli_real_escape_string($link, $_REQUEST['a5']);
        $b6 = mysqli_real_escape_string($link, $_REQUEST['a6']);
        
		 
		$sql = "INSERT INTO ride (adh,fromloc,toloc,date,timee,contno) VALUES ('$b1','$b2', '$b3', '$b4','$b6','$b5')";
		if(mysqli_query($link, $sql)){
			echo "<h1 align='center'>You added Ride successfully ! !</h1>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		} 
		// Close connection
		mysqli_close($link);
        
?>