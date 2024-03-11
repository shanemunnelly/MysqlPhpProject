<!DOCTYPE html>
<html lang="en">
<head>
<title>Member Delete</title>
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

$result=mysqli_query($conn, "SELECT * FROM MEMBER");

?>

<table border ="1">
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
<th>Delete </th>
</tr> <br>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
 $IngMemNumber = $row['IngMemNumber'] ;
 $strMemTitle = $row['strMemTitle'] ;
 $strMemFName = $row['strMemFName'] ;
 $strMemSName = $row['strMemSName'] ;
 $strMemHouseNumber = $row['strMemHouseNumber'] ;
 $strMemStreet = $row['strMemStreet'] ;
 $strMemTown = $row['strMemTown'] ;
 $strMemCounty = $row['strMemCounty'] ;
 $strMemPostCode = $row['strMemPostCode'] ;
 $strMemPhone = $row['strMemPhone'] ;
 $strMemMobile = $row['strMemMobile'] ;
 $hypeMemEMail = $row['hypeMemEMail'] ;
  echo "</tr>";
?>

<tr>
	
	<td><?php echo $IngMemNumber;?></td>
	<td><?php echo $strMemTitle;?></td>
	<td><?php echo $strMemFName;?></td>
	<td><?php echo $strMemSName;?></td>
	<td><?php echo $strMemHouseNumber;?></td>
	<td><?php echo $strMemStreet;?></td>
	<td><?php echo $strMemTown;?></td>
	<td><?php echo $strMemCounty;?></td>
	<td><?php echo $strMemPostCode;?></td>
	<td><?php echo $strMemPhone;?></td>
	<td><?php echo $strMemMobile;?></td>
	<td><?php echo $hypeMemEMail;?></td>
	<td>
		<a href ="MemberDelete.php?delete=<?php echo $IngMemNumber;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM MEMBER WHERE IngMemNumber= '$delete_id'");
		
		header("location: MemberDelete.php");
	}
	?>
</table>
