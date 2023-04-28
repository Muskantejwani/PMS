<?php
session_start();
if(empty($_SESSION['Email']))
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
<h2 class="text-center"  style="margin-bottom:20px;"> EMPLOYEE LOGIN FORM</h2>
</div>
<div class="panel-body">
<form role="form"action="Echk.php" method="post">
<div class="form-group">
<label><h5>Employee ID</h5></label>
<input class="form-control" type="text" name="f_id"  autocomplete="off" required/>
</div>
<div class="form-group">
<label><h5>Password</h5></label>
<input class="form-control" type="password" name="password" autocomplete="off"  required />
<p class="help-block"><a href="user-forgot-password.php" class="txt"><h5>Forgot Password</h5></a></p>
</div>


 <button type="submit" name="submit" value="Submit" class="btn btn-info">LOGIN </button> 
 <!--<a href="signup.php" class="txt"><h5  
 style="margin-top:20px;">Not Register Yet</h5></a>-->
</form>
 </div>
</div>
</div>
</div>  
</div>
</body>



<!--
<table width="100%"  cellspacing="00" cellpadding="00">
 <!-- <tr bgcolor="rgb(11, 153, 153)">
    <th width="7%" scope="col">&nbsp;</th>
     <th width="12%" scope="col"><img src="#" alt="  "/></th>
    <th width="62%" scope="col"><font size="8" color="White">PMS</font></th>
    <th width="13%" scope="col"><font size="5" color="White">&nbsp;</font></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><br/><br/><div style="width:50%;background-color:rgb(11, 153, 153); margin-left:24%;margin-top:100px;">
    	<br><br>
                <form name="login" action="chk.php" method="post">
                    
        <table width="100%"  cellspacing="02" cellpadding="05">
  <tr>
      <th colspan="2" scope="col"><font size="6">Manager LOGIN</font></th>
    </tr>
  <tr>
      <td align="right"><font size="5">ID&nbsp;:&nbsp;</font></td>
    <td><input style="height: 20px; font-size: 15px;" type="text" name="id"/><br/>
    </td>
  </tr>
  <tr>
      <td align="right"><font size="5">Password&nbsp;:&nbsp;</font></td>
    <td><input style="height: 20px; font-size: 15px;" type="password" name="pass" /></td>
  </tr>
 <!-- <tr>
      <td align="right"><font size="5">Login_As&nbsp;:&nbsp;</font></td>
    <td>
        <select name="role" style="width: 13em; height: 2em; font-size: 15px;">
        <option value="Student">Student</option>
        <option value="Faculty">Faculty</option>
        <option value="Admin">Admin</option>          
        </select>
      </td>
  </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" style="width: 4em;  height: 2em; font-size: 20px;" name="register" value="Submit" /></td>
            </tr>
</table> 

        <br/>
        &nbsp;
        </form>
    	</div>
     </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</div>-->
   


    </html>
    
<?php
}
//else
//{
//header("location:Faculty.php");
//}

?>