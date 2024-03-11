<!DOCTYPE html>
<html lang="en">
<head>
<title>Lake Insert</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="FishingClub.css">
<div class="sidenav">
 
</div>
<div class="sidenav2">
 
</div>
<div class="header">
<div class="row">
  <h1>Ireland Fishing Club   <img src="images/fishing-icon.png" alt="Fishing!" width="50" height="50" ></img></h1>
   <div class="columnheader"> <div class="Headerfont"> <a href="Home.php"><h1> Home Page </h1></a> </div></div>
   <div class="columnheader"> <div class="Headerfont"> <a href="Inserts.html"><h1> Insert Page </h1></a> </div></div>
   <div class="columnheader"> <div class="Headerfont"> <a href="Selects.html"><h1> Select Page </h1></a> </div></div>
    <div class="columnheader"> <div class="Headerfont"> <a href="Updates.html"><h1> Update Page </h1></a> </div></div>
	<div class="columnheader"> <div class="Headerfont"> <a href="Deletes.html"><h1> Delete Page </h1></a> </div></div>
	<div class="columnheader"> <div class="Headerfont"> <a href="login.php"><h1> Login Page </h1></a> </div></div>
	<div class="columnheader"> <div class="Headerfont"> <a href="registration.php"><h1> Reg Page </h1></a> </div></div>
	<div class="columnheader"> <div class="Headerfont"> <a href="logoutdb.php"> <h1> Log out Page  </h1></a> </div> </div>


  </div>
  
</div>


	<link rel="stylesheet" type ="text/css" href="style.css">
		<link rel="stylesheet" type="text/css">
</head>
<body>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fishing";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$IngLakeID = 0	;

$StrLakeName = $_POST ['StrLakeName'];

$IngLakeAmountofSwims = $_POST['IngLakeAmountofSwims'];

$MemLakeFeatures = $_POST['MemLakeFeatures'];

 

// attempt insert query execution

mysqli_query($conn, "INSERT INTO Lakes (IngLakeID, StrLakeName, IngLakeAmountofSwims, MemLakeFeatures ) VALUES ('$IngLakeID', '$StrLakeName', '$IngLakeAmountofSwims', '$MemLakeFeatures')");

if(mysqli_affected_rows($conn)>0){

 echo "<h1> Records added successfully. </h1>";

} else{

 echo "<h1> ERROR: Could not able to execute $sql. " . mysqli_error($conn) . "</h1>";

}


 
mysqli_close($conn);

// close connection


?>