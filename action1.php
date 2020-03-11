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
           
		$aadhar = mysqli_real_escape_string($link, $_REQUEST['aadha']);
		$fname = mysqli_real_escape_string($link, $_REQUEST['name']);
		$emaill = mysqli_real_escape_string($link, $_REQUEST['mymail']);
		$mobilee = mysqli_real_escape_string($link, $_REQUEST['mobno']);
		$pass = mysqli_real_escape_string($link, $_REQUEST['psw']);
		 
		$sql = "INSERT INTO register (aadhar,name,email,mobile,passwordd) VALUES ('$aadhar','$fname', '$emaill', '$mobilee','$pass')";
		if(mysqli_query($link, $sql)){
			echo "<h1 align='center'>Congratulations, Successfully Signed Up !</h1>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		} 
		// Close connection
		mysqli_close($link);
        
?>