<!DOCTYPE html>
<html lang="en">
<head>
<title>Member Select</title>
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

<?php

//1.  Create a database connection
$dbhost ="localhost";
$dbuser ="root";
$dbpassword="";
$dbname = "fishing";

$connection= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//Test if connection occured

if(mysqli_connect_errno()){
	die("DB connection failed: " .
		mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
			);
}


if (!$connection)
  {
  die('Could not connect: ' . mysqli_error());
  }

//2.  Perform Database Query

$result = mysqli_query($connection,"SELECT * FROM MEMBER");

echo "<table border='1'>
<tr>
<th>Member ID</th>
<th>Member Title</th>
<th>Member First Name</th>
<th>Member Second Name</th>
<th>Member House Number</th>
<th>Member Street</th>
<th>Member Town</th>
<th>Member County</th>
<th>Member Post Code</th>
<th>Member Phone number</th>
<th>Member Mobile number</th>
<th>Member Email</th>
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['IngMemNumber'] . "</td>";
  echo "<td>" . $row['strMemTitle'] . "</td>";
  echo "<td>" . $row['strMemFName'] ."</td>";
  echo "<td>" . $row['strMemSName'] . "</td>";
  echo "<td>" . $row['strMemHouseNumber'] . "</td>";
  echo "<td>" . $row['strMemStreet'] ."</td>";
  echo "<td>" . $row['strMemTown'] . "</td>";
  echo "<td>" . $row['strMemCounty'] . "</td>";
  echo "<td>" . $row['strMemPostCode'] ."</td>";
  echo "<td>" . $row['strMemPhone'] . "</td>";
  echo "<td>" . $row['strMemMobile'] . "</td>";
  echo "<td>" . $row['hypeMemEMail'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

//4.  Release returned data 

mysqli_free_result($result);

//5.  Close database connection

mysqli_close($connection);
?> 