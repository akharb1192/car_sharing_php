<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carshare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
		$naam = mysqli_real_escape_string($conn, $_REQUEST['mymail']);
		$paas= mysqli_real_escape_string($conn, $_REQUEST['psw']);
    $sql = "SELECT * FROM admin where emaill='$naam' and pass='$paas'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<h1 align='center' style='text-decoration: underline; color:white; border:2px solid white; border-radius:10px;'>Welcome ".$row['name']."</h1>";
             echo "<html>";
        echo "<head><style>body { background-image:url('img8.jpg'); }
        </style></head>";
        echo "<body>";
        $sql = "SELECT * FROM register";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
    // output data of each row
    echo "<html><head>
    <style>
    body
    {
    background-image:url('add1.jpg');
    }
    h1
    {
    color:white;
    }
    table
    {
    border:2px solid black;
    border-radius:10px;
    color:white;
    }
    </style>
    </head><body>";
    echo "<h1>Following are the Registered users :- </h1>";
    echo "<table border='1' cellpadding='12'>";
    echo "<tr>
    <th>Aadhar Number</th>
    <th>Name</th>
    <th>Email </th>
    <th>Mobile Number</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["aadhar"]."</td>";
        echo "<td>" . $row["name"]."</td>";
        echo "<td>" . $row["email"]."</td>";
        echo "<td>" . $row["mobile"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h1>No Users registered.</h1>";
}
        echo "</body>";
        echo "</html>";
        }
    } else {
        echo "<html>";
        echo "<head><style>body { background-image:url('img8.jpg'); </style></head></head> }";
        echo "<h1 align='center' style='margin:180px; color:white; border:2px solid white; border-radius:10px; padding:20px;'>Incorrect login credentials </h1> ";
    }
    
    $conn->close();
       
    ?>
<script type="text/javascript">

</script>