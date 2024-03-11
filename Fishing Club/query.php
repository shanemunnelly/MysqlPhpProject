<?php
	$hostName='localhost';
	$authName='root';
	$pass='';
	$dbname='Fishing';
	
	$conn=new mysqli($hostName,$authName,$pass,$dbname);
	switch($_POST['action']){
		case 'registration':
			$email=$_POST['email'];
			$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
			
			$sql="INSERT INTO user(email,password) VALUES('$email','$password')";
			$run_qry=mysqli_query($conn,$sql);
			if($run_qry){
				header("location:login.php");
			}
			break;
		case 'login':
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			$select_user="SELECT * FROM user WHERE email='$email'";
			$run_qry=mysqli_query($conn,$select_user);
			if(mysqli_num_rows($run_qry)>0){
				while($row=mysqli_fetch_assoc($run_qry)){
					if(password_verify($password, $row['password'])){
						$email=$row['email'];
						session_start();
						$_SESSION['email']=$row['email'];
						header("location:home.php");
					}
					else{
						header("location:login.php");
					}
				}
			}else{
				header("location:login.php");
			}
			break;
		default:
			break;
	}
?>