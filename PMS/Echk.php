<?php

 session_start();
 $user = $_POST['f_id'];
 $pass = $_POST['password'];
// $role = $_POST['role'];
 
 include 'connection.php';

if(!empty($user)||!empty($pass)){
	$sql = "SELECT * FROM employee WHERE f_id='$user' AND password='$pass'";
	$res = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);

		if($count == 0)
		{
		//echo "username password Incorrect";
		echo '<script type="text/javascript"> alert("username password Incorrect")</script>';
		//redirect("index.php");
		//header("location:Faculty.php");
		}
		else
		{
			$_SESSION['Email'] = $user;
		
			header("location:Emp\Employee.php");
		}
        }
 else {echo 'Fill up al fields';}
 ?>