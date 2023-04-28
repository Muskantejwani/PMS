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
<title>lms</title>
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
        <a href="Admin.php" title="Dashboard" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Dashboard</span>
        </a>
        </li>
        <li>
        <a href="Clients.php" title="Students" style="text-decoration:none; list-style:none;">
            <span class="links_name active">Add clients</span>
        </a>
        </li>
        <li>
        <a href="Employees.php" title="Fees" style="text-decoration:none; list-style:none;">
            
            <span class="links_name inactive">Add Employee</span>
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




<center style=" class="bg">
<div class="col"  style="position:relative;  top: -100%; margin-bottom:35%;  margin-left:10%;">
<h1 >Add Client</h1>

 
    <form method="post" action="st.php" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; ">

      <div class="form-group">
        <!--  <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="Username" />
          </div>-->
          <label for="uname" class="col-sm-3 control-label"><b>Client ID</b></label>
          <div class="col-sm-7">
      <input type="text" class="form-control" placeholder="Enter ID" id="in" name="s_id" required>
      </div></div>

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="choose username" />-->

            <label for="psw" class="col-sm-3 control-label"><b>Name</b></label>
            <div class="col-sm-7">
      <input  class="form-control" placeholder="Enter Name" type="text" id="in" name="name" required>
          </div>
      </div>

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">ConfirmPassword</label>
          <div class="col-sm-7">
            <input type="password" name="password"  class="form-control" id="input1" placeholder="ConfirmPassword" />-->

            <label for="psw" class="col-sm-3 control-label"><b>Email:</b></label>
            <div class="col-sm-7">
      <input  class="form-control" placeholder="Enter Email"  type="email" id="in" name="email" required>
          </div>
</div>

      <div class="form-group">
          <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


            <label for="psw" class="col-sm-3 control-label"><b>Phone No:</b></label>
            <div class="col-sm-7">
      <input class="form-control" placeholder="Enter Phone No" type="text" id="in" name="phone" required>
        
          </div>
      </div>

      <div class="form-group">
          <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


            <label for="psw" class="col-sm-3 control-label"><b>Password:</b></label>
            <div class="col-sm-7">
      <input class="form-control" placeholder="Enter Password" type="password" id="in" name="password" required>
        
          </div>
      </div>
     
  
      <input type="submit"  name="add" value="Add" id="bt"  class="btn btn-primary col-md-2 col-md-offset-8" />
      
    
    </form>
</div></div>
</div>
</div>
</div>
</center>
</body>
    


<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
		background-image:url(../background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
        
</style>
<title>Project Management System</title>
</head>
<div>
<body>
<table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
    <th width="74" scope="col">&nbsp;</th>
    <th width="164" scope="col"><a href="../Admin.php"><img src="../logo1.png" alt="LOGO"/></a></th>
    <th width="646" scope="col"><font size="8" color="White">Project Managenent System</font></th>
    <th width="140" scope="col"><font color="White" size="5">
	<?php
   // print $role;
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="01" cellpadding="01">
  <tr bgcolor="#99CCFF">
      <th width="5%" scope="col"><h4>&nbsp;</h4></th>
      <th width="12%" scope="col"><a href="student.php">Add Student</a></th>
      <th width="11%" scope="col"><a href="faculty.php">Add Faculty</a></th>
      <th width="11%" scope="col"><a href="stsearch.php">Search Student</a></th>
      <th width="11%" scope="col"><a href="fa_search.php">Search Faculty </a></th>
      <th width="11%" scope="col"><a href="allocate.php">Allocate</a></th>
      <th width="11%" scope="col"><a href="skill.php">Skill Matrix</a></th>
      <th width="11%" scope="col"><a href="report.php">Reports</a></th>
      <th width="11%" scope="col"><a href="../logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
</table>
    <br/><br/>
    </p><form method="post" action="st.php">
        <div style="background-color: beige; margin-left: 25%; alignment-adjust: central; width: 50%">
            <table align="center" width="100%" cellspacing="01" cellpadding="05">
  <tr>
    <th width="7%" scope="col">&nbsp;</th>
    <th width="43%" scope="col">&nbsp;</th>
    <th width="44%" scope="col">&nbsp;</th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Student ID&nbsp;:&nbsp;</font></td>
    <td><input type="text" size="20" id="in" name="id"/><font color="red" size="4">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="stname"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Email&nbsp;:&nbsp;</font></td>
    <td><input type="email" id="in" name="stemail"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Phone&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="stphone"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"> <font size="5">Password &nbsp;:&nbsp;</font></td>
    <td><input type="password" id="in" name="stpass"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Year&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="styear"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Stream&nbsp;: &nbsp;</font></td>
    <td><select name="stream" style="width: 193px; height: 2em; font-size: 15px;">
         <option value="Selcet">Select</option>
        <option value="CSE">CSE</option>
        <option value="COM">COM</option>
        <option value="EE">EE</option>          
        </select><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center" >
    <td>&nbsp;</td>
    <br/>
    <td colspan="2"><input type="submit"  name="add" value="Add" id="bt" />
    				
    <td>&nbsp;</td>
  </tr>
            </table> <br/><br/>  </div></form>-->
 <?php
}
//elseif($role=="Faculty")    
//{
?>
  

    <?php 
   // header('Location:../Admin.php');
    ?>

</table>
<p>
 
    
    

<p>&nbsp;</p>
