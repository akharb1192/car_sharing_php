<?php

echo "<html>
<head>
    <title>
    
    </title>
    <style>
    body
        {
            background-image: url('cont2.png');
        }
    .main
        {
            border-radius:10px;
            border: 2px solid white;
            width:auto;
            height:80px;
        }
        h1
        {
            color: white;
            text-align: center;
        }
        label
        {
        font-size: 20px;
        color: white;
        }
        input[type=text]
        {
            border-radius: 10px;
            margin: 10px;
            width: 200px;
            height: 40px;
        }
         .resdiv { border:4px solid white; width:600px; height:520px; position:absolute; right:20px; top:100px; border-radius:20px;}
       
        .txt1
        {
        font-size:20px;
        color:white;
        }
        .resdiv
        {
        position:fixed;
        right:0px;
        }
    </style>
    </head>
    <body>
        <div class='main'>
        <h1> Manage Your Rides </h1>
        </div>
        <div class='onee'>
    <form action='change2.php'>
        <label for='adh'>Confirm Aadhar Number </label>
        <input type='text' id='adval' name='adval'>
        <input type='submit' value='Find'>
        </form>
        </div>
        <div class='resdiv'>
        <form name='form2' action=''>
        <table>
        <tr><h1 style='color:white'>Modify your Ride</h1></tr>
        <tr>
        <td><span class='txt1'>Aadhar</span></td>
        <td><input type='text' id='one' name='a1'>
        </tr>
        <tr>
        <td><span class='txt1'>From Location</span></td>
        <td><input type='text' id='two' name='a2'>
        </tr>
        <tr>
        <td><span class='txt1'>To Location</span></td>
        <td><input type='text' id='three' name='a3'>
        </tr>
        <tr>
        <td><span class='txt1'>Date</span></td>
        <td><input type='text' id='four' name='a4'>
        </tr>
        <tr>
        <td><span class='txt1'>Time</span></td>
        <td><input type='text' id='six' name='a6'>
        </tr>
        <tr>
        <td><span class='txt1'>Contact Number</span></td>
        <td><input type='text' id='five' name='a5'>
        </tr>
        <tr>
        <td>
        <input type='submit' value='Modify ride'></td>
        </tr>
        </table>
        </form>
        </div>;
    </body>
</html>";
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
        $aa = mysqli_real_escape_string($conn, $_REQUEST['adval']);
    
$sql = "SELECT adh, fromloc, toloc,date,timee,contno FROM ride where adh='$aa'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    echo "<html><head>
    <style>
    body
    {
    background-image:url('cont2.png');
    }
    h1
    {
    color:white;
    }
    h2
    {
    color:white;
    }
    table
    {
    color:white;
    }
    </style>
    </head><body>";
    echo "<h2 align='left'>Following are the rides you have created :- </h2>";
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
    echo "<h1></h1>";
}
 echo "</body></html>";
$conn->close();
?>