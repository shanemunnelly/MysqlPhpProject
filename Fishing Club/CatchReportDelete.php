<!DOCTYPE html>
<html lang="en">
<head>
<title> Catch Report Delete</title>
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

$result=mysqli_query($conn, "SELECT * FROM CATCHREPORT");

?>

<table border ="1">
	<tr>
		<th> Member Number: </th>
		<th> Swim Number: </th>
		<th> Species ID: </th>
		<th> Catch weight:</th>
		<th> Catch Conditions: </th>
		<th> Catch Tag ID: </th>
		<th> Delete </th>
		<th> </th>
<tr>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$IngMemNumber =	$row['IngMemNumber'];
	$intSwimNumber	= $row['intSwimNumber'];
	$CatchSpeciesID	= $row['CatchSpeciesID'];
	$IngCatchWeight	= $row['IngCatchWeight'];
	$memCatchConditions	= $row['memCatchConditions']; 
	$IngCatchTagID	= $row['IngCatchTagID'];
?>

<tr>
	
	<td><?php echo $IngMemNumber;?></td>
	<td><?php echo $intSwimNumber;?></td>
	<td><?php echo $CatchSpeciesID;?></td>
	<td><?php echo $IngCatchWeight;?></td>
	<td><?php echo $memCatchConditions;?></td>
	<td><?php echo $IngCatchTagID;?></td>
	<td>
		<a href ="CatchReportDelete.php?delete=<?php echo $IngMemNumber;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM CATCHREPORT WHERE IngMemNumber= '$delete_id'");
		
		header("location: CatchReportDelete.php");
	}
	?>
</table>
