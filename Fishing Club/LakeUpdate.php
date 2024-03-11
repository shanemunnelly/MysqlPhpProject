<!DOCTYPE html>
<html lang="en">
<head>
<title>Lake Updates</title>
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

// Check if the user has submitted data into the form

if (isset ($_POST ['submit'])){
	$IngLakeID = $_POST ['IngLakeID'];
	$StrLakeName = $_POST ['StrLakeName'];
	
	
	//Check if both fields have been entered
	if ($IngLakeID && $StrLakeName){
		
			//Connect to the server and the empdept2 database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "Fishing";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
								}
	
	// Check if that department exists
	$exists= mysqli_query ($conn,"SELECT * FROM Lakes WHERE IngLakeID = '$IngLakeID' ") or die ("Query could not be completed");
	
	// Update the location field in the DEPT table
	if (mysqli_num_rows($exists) !=0){
		mysqli_query ($conn,"UPDATE Lakes SET StrLakeName = '$StrLakeName' WHERE IngLakeID = '$IngLakeID'") or die ("Update could not be applied");
		echo "Successful Swim Number Updated";
			}else echo "That  does not exist.  Please re-enter:";
					}else echo "You must enter values for all fields.  Please re-enter";
		
		
		
		
	}
	
?>
<html>
<body>
<fieldset>
<h2> Update Department Location </h2><br /><br />
<form action ="LakeUpdate.php" method ="POST">
<table>
<tr><td>Lake No:</td> <td> <input type ="text" id="IngLakeID" name="IngLakeID"> </td></tr>
<tr><td>Lake Name:</td> <td> <input type ="text" id="StrLakeName" name="StrLakeName"> </td></tr>
<tr><td><input type ="submit" id="submit" name="submit" value = "Update Swim"></td></tr>
</table>
</fieldset
</form>
</body>
</html>