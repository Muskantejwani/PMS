<?php
session_start();
$user = $_POST['ID'];
$pass = $_POST['password'];
$role = $_POST['role'];

include 'connection.php';


    if(!empty($user)||!empty($pass)){
$sql = "SELECT * FROM admin WHERE ID='$user' AND password='$pass'";
$res = mysqli_query($conn,$sql);
$count = mysqli_num_rows($res);

		if($count == 0)
		{
		header("location:ADMIN\Admin.php");
		}
		else
		{
			$_SESSION['Email'] = $user;
			$_SESSION['Role'] = $role;
			header("location:ADMIN\Admin.php?image=image.php");
			echo '<script>alert("Session Deleted")</script>';
			
		}
    }
 else {
        echo 'Fill up al fields';
    }	 

?>