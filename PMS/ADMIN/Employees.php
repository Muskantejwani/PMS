<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];
if(empty($_SESSION['Email']))
{
header("location:index.php");
}
else
{
//if($role=="Admin")
//{
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>PMS</title>
<meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="main.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" >
   

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    *{
    padding:0;
    margin:0;
  }
  .nav_list{
    padding-top:0%;
    padding-left:10%;
    text-decoration:none ;
    list-style: none ;
  }
 .inactive{
    text-decoration:none !important;
    list-style: none;
  }
  ul li{
    padding-top:17%;
    padding-left:5%;
    text-decoration:none !important;
    list-style: none !important;
  }
  ul li a .inactive{
    text-decoration:none ;
    list-style: none ;
    font-size:20px ;
    color:#fff;
    padding:8% 10%;
    font-family: Arial, Helvetica, sans-serif;
  }
  ul li a .active{
    padding:8% 10%;
  }
.active{
  font-size:20px ;
  background-color: rgb(11, 153, 153);
    border-radius:20%;
    color:black;
    box-shadow: 10px 5px 5px LightGray;
}
  
  ul li a .inactive:hover{
    background-color: rgb(11, 153, 153);
    border-radius:20%;
    color:black;
    box-shadow: 10px 5px 5px LightGray;
  }
	body
	{
		/*background-image:url(images/services-2.jpg);
    background-repeat: no-repeat; 
		background-attachment: fixed;*/
    background-color: rgb(11, 153, 153);
		/*background-size: 100% 100%;*/
    overflow:hidden;
               
	}
  .txt{
    text-decoration:none;

  }
  .side{
    position:relative;
    left:0;
    top:0;
    width:20%;
    height:100vh;
    /*background-color:#242444;*/
    background-color:#404040;
   
  }
  .bg{
  background-color: rgb(11, 153, 153);
  margin-top:20%;
  }
    </style>
</head>
<body>

<div class="contain">
<div class="row">
            <div class="col" >
<div class="sidebar side">
    <ul class="nav_list">
        <li>
        <a href=".../Admin.php" title="Dashboard" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Dashboard</span>
        </a>
        </li>
        <li>
        <a href="Clients.php" title="Students" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Add clients</span>
        </a>
        </li>
        <li>
        <a href="Employees.php" title="Fees" style="text-decoration:none; list-style:none;">
            
            <span class="links_name active">Add Employee</span>
        </a>
        </li>
        <li>
        <a href="allemployee.php" title="Expense" style="text-decoration:none; list-style:none;">
           
            <span class="links_name inactive">All Employee</span>
        </a>
        </li>
                   
    
        <li>
        <a href="allclients.php" title="Class" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">All Client</span>
        </a>
        </li>
        <li>
        <a href="allocate.php" title="Course" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Allocate</span>
        </a>
        </li>
                        
        <li>
        <a href="report.php" title="Reports" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Reports</span>
        </a>
        </li>
        <li>
        <a href="logout.php" title="Reports" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Logout</span>
        </a>
        </li>
    </ul>
   
</div>
</div>






<center  class="bg">
<div class="col"  style="position:relative;  top: -100%; margin-bottom:33%;  margin-left:10%;">
<h1 style="margin-bottom:20px;">Add Employee</h1>
<div class="content">
  <div class="row">
    <form method="post" action="fa.php" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; position:relative;">

      <div class="form-group">
        <!--  <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="Username" />
          </div>-->
          <label for="uname" class="col-sm-3 control-label"><b>Employee ID</b></label>
          <div class="col-sm-7">
      <input type="text" class="form-control" placeholder="Enter ID" id="in" name="id" required>
      </div></div>

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="choose username" />-->

            <label for="psw" class="col-sm-3 control-label"><b>Name</b></label>
            <div class="col-sm-7">
      <input  class="form-control" placeholder="Enter Name" id="in" type="text" name="faname" required>
          </div>
      </div>

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">ConfirmPassword</label>
          <div class="col-sm-7">
            <input type="password" name="password"  class="form-control" id="input1" placeholder="ConfirmPassword" />-->

            <label for="psw" class="col-sm-3 control-label"><b>Email:</b></label>
            <div class="col-sm-7">
      <input  class="form-control" placeholder="Enter Email" id="in" type="email" name="faemail" required>
          </div>
</div>

      <div class="form-group">
          <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


            <label for="psw" class="col-sm-3 control-label"><b>Phone No:</b></label>
            <div class="col-sm-7">
      <input class="form-control" placeholder="Enter Phone No" id="in" type="text" name="faphone" required>
        
          </div>
      </div>

      <div class="form-group">
          <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


            <label for="psw" class="col-sm-3 control-label"><b>Password:</b></label>
            <div class="col-sm-7">
      <input class="form-control" placeholder="Enter Password" id="in" type="password" name="fapass" required>
        
          </div>
      </div>
     
      
      <div class="form-group">
          <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


            <label for="psw" class="col-sm-3 control-label"><b>Qualification:</b></label>
            <div class="col-sm-7">
      <input class="form-control" placeholder="Qualifications"  id="in" type="text" name="faqulification" required>
        
          </div>
      </div>
      <input type="submit" name="add" value="Add" id="bt"  class="btn btn-primary col-md-2 col-md-offset-8" />
      
    
    </form>
</div>
</div>
</center>
</body>
    
 <?php
}
//elseif($role=="Faculty")    
//{
?>
    <?php
  // header('Location:../Admin.php');
   ?>
 <?php
//}
//else   
//{
?>
    <?php
  // header('Location:../Admin.php');
   ?>
<?php
//}
?>
</table>

  <?php
//}
?>
    
    

<p>&nbsp;</p>
