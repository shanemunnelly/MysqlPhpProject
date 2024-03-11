<!DOCTYPE html>

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

?>
<html lang="en">
<head>
<title>Catch Report Insert</title>
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



</head>
<body>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="Forms"> <form action="CatchReportInsert.php" method="post">

  <fieldset>
<h1>Catch Form </h1>

     <p>


            <name="IngCatchTagID" id="IngCatchTagID" maxlength="10">

        </p>
         <p> 
	     <label for="IngMemNumber">Member Number:</label>
	<select name="IngMemNumber">
    <option value="">Select Member Id</option>
    <?php 
    $query ="SELECT IngMemNumber, IngMemNumber FROM MEMBER";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['IngMemNumber'];
        $id =$optionData['IngMemNumber'];
    ?>
    <option value="<?php echo $id; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
	
	</p>
	
	<p>

            <label for="intSwimNumber">Swim Number:</label>

            <input type="text" name="intSwimNumber" id="intSwimNumber" maxlength="2">

        </p>

        <p>

            <label for="CatchSpeciesID">Species ID:</label>

	<select name="CatchSpeciesID">
    <option value="">Select Species Id</option>
    <?php 
    $query ="SELECT CatchSpeciesID, CatchSpeciesID FROM FISH";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option1 =$optionData['CatchSpeciesID'];
        $id1 =$optionData['CatchSpeciesID'];
    ?>
    <option value="<?php echo $id1; ?>" ><?php echo $option1; ?> </option>
   <?php
    }}
    ?>
</select>
        </p>

		<p>

            <label for="IngCatchWeight">Catch weight:</label>

            <input type="text" name="IngCatchWeight" id="IngCatchWeight" maxlength="10">

        </p>
        <p>

            <label for="memCatchConditions">Catch conditions:</label>

            <input type="text" name="memCatchConditions" id="memCatchConditions" maxlength="30">

        </p>
	
       
	
		
        <input type="submit" value="Submit" name="submit">
  </fieldset>

    </form>


</body>
</html>




	
    
	
	
    </body>

    </html>

