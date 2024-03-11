
<!DOCTYPE html>

<html>
<head>
		<title> Registation</title>
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
	<fieldset>
		<center>
			<form action="query.php" method="POST" autocomplete="off ">
				<input type="hidden" name="action" value="registration">
				<table>
					<h1>Registration</h1>
					<tr>
						<td>Email: </td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			</form>
			
			 <a href="login.php" > <p>Already have an account? </br> Login in here </p>
		</center>
			</fieldset>

	</body>
</html>




