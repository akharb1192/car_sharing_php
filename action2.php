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
    $sql = "SELECT * FROM register where email='$naam' and passwordd='$paas'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<h1 align='center' style='text-decoration: underline; color:white;'>Welcome ".$row['name']."</h1>";
             echo "<html>";
        echo "<head><style>body { background-image:url('img8.jpg'); }
        .resdiv { border:4px solid black; width:600px; height:520px; position:absolute; right:20px; top:60px; border-radius:20px;}
        .div1 {border:4px solid black; width:600px; height:400px; border-radius:20px;}
        input[type=text] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
        }
        input[type=text] {
          border: 2px solid red;
          border-radius: 4px;
        }
        input[type=submit] {
          border: 2px solid black;
          border-radius: 4px;
          width:150px;
          height:40px;
          font-weight:bold;
        }
        #my1
        {
          border: 2px solid black;
          border-radius: 4px;
          width:240px;
          height:40px;
          font-weight:bold;
        }
        #my2
        {
          border: 2px solid black;
          border-radius: 4px;
          width:240px;
          height:40px;
          font-weight:bold;
        }
      #my3
      {
        border: 2px solid black;
        border-radius: 4px;
        width:240px;
        height:40px;
        font-weight:bold;
      }
        .txt1
        {
            color:white;
            font-size:20px;
        }
        .mod
        {
        float:left;
        margin:20px;
        border-radius:10px;
        width:750px;
        height:40px;
        border:2px solid white;
        }
        </style></head>";
        echo "<body bgcolor='grey'>";
        echo "<div class='div1'>";
        echo "<form name='form1' action='action22.php'>";
        echo "<table>";
        echo "<tr><h1 style='color:white'>Search a Ride</h1></tr><tr>";
        echo "<td><span class='txt1'>From</span></td>";
        echo "<td><input type='text' name='pla' id='place1'></td>";
        echo "</tr>";
        echo "<tr><td><span class='txt1'>To</span></td>";
        echo "<td><input type='text' name='plac' id='place2'></td></tr>";
        echo "<tr><td><input type='submit' value='Search for ride'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><h4 id='h11'></h4></td>";
        echo "</tr>";
        echo "</table></form>";
        echo "</div>";
        echo "<div class='resdiv'><form name='form2' action='action11.php'>";
        echo "<table>
        <tr><h1 style='color:white'>Create a Ride</h1></tr>
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
        <input type='submit' value='Add ride'></td>
        </tr>
        </table>
        </form>
        </div>";
        echo "<div class='mod'>
        <input type='button' id='my1' value='Modify Personal Settings' onclick='redi()'>
        <input type='button' id='my2' value='Manage Rides' onclick='redi()'>
        <input type='button' id='my3' value='Delete Rides' onclick='redi()'>
        </div>";
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
    function redi()
    {
    document.getElementById("my1").onclick = function () {
        location.href = "change1.html";
    };
    document.getElementById("my2").onclick = function () {
        location.href = "change2.php";
    };
    document.getElementById("my3").onclick = function () {
        location.href = "change3.php";
    };
    }
    function act()
    {
    var pla1=document.getElementById("place1").value;
    var pla2=document.getElementById("place2").value;
    document.getElementById('h11').innerHTML="Following are the available ride for you : ";
    }
</script>
