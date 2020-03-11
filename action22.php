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
        $aa = mysqli_real_escape_string($conn, $_REQUEST['pla']);
		$bb= mysqli_real_escape_string($conn, $_REQUEST['plac']);
    
$sql = "SELECT adh, fromloc, toloc,date,timee,contno FROM ride where fromloc='$aa' and toloc='$bb'";
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
    color:white;
    }
    </style>
    </head><body>";
    echo "<h1>Following are the available rides :- </h1>";
    echo "<table border='1' cellpadding='7'>";
    echo "<tr>
    <th>Aadhar</th>
    <th>From</th>
    <th>To</th>
    <th>Date</th>
    <th>Time</th>
    <th>Contact at this Number </th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["adh"]."</td>";
        echo "<td>" . $row["fromloc"]."</td>";
        echo "<td>" . $row["toloc"]."</td>";
        echo "<td>" . $row["date"]."</td>";
        echo "<td>" . $row["timee"]."</td>";
        echo "<td>" . $row["contno"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h1>No rides available for this route.</h1>";
}
 echo "</body></html>";
$conn->close();
?>