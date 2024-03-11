<?php

session_start();

if (!isset(($_SESSION['username'])){
	header('location:login_db.php');}

?>

<title> User Login and Registration </title>
	<link rel="stylesheet" type ="text/css" href="style.css">
		<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<html>
<head>
<title> Home Page</title>
</head>

<body>

<div class ="container">

<a class="float-right" href="logoutdb.php"> LOGOUT </a>

<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>

</div>

</body>

</html>