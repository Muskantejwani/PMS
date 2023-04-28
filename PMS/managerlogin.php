<?php

session_start();
if(empty($_SESSION['email']))
{

  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
    background-color:rgb(11, 153, 153);
	/*	background-image:url(background.png);*/
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
    overflow:hidden;
  }
.txt{
  text-decoration:none; 
  color:black;
  margin-top:15px;
}
</style>
<title>PMS</title>
</head>
<body>
<div class="container" style="position:relative; left:20%; margin-top:10%;">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<div class="panel panel-info">
<div class="panel-heading">
<h2 class="text-center"   style="margin-bottom:20px;">MANAGER LOGIN FORM</h2>
</div>
<div class="panel-body">
<form role="form"action="chk.php" method="post">

<div class="form-group">
<label><h5>Manager ID</h5></label>
<input class="form-control" type="text" name="ID" required autocomplete="off" />
</div>
<div class="form-group">
<label><h5>Password</h5></label>
<input class="form-control" type="password" name="password" required autocomplete="off"  />
<p class="help-block"><a href="reset.php" class="txt"><h5>Forgot Password</h5></a></p>
</div>


 <button type="submit" name="submit" value="Submit" class="btn btn-info">LOGIN </button> <a href="signup.php" class="txt"><h5
 style="margin-top:20px;">Not Register Yet</h5></a>
</form>
 </div>
</div>
</div>
</div>  
</div>
</body>


    </html>
    <?php
}
else
{
header("location:Admin.php");
}

?>