<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];



include 'connection.php';


if(isset($_POST['allocate']))
{
           $sid=$_POST['s_id']; 
           $fid=$_POST['faid'];
           $proid=$_POST['projectid'];
                      
           if (!empty($sid)|| !empty($fid)||!empty($proid))
           {
              
            $sql= "INSERT INTO `pmas`.`project` (`p_id`, `s_id`, `f_id`) VALUES ('$proid', '$sid', '$fid');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:allocate.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:allocate.php');
        }  
}



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
<html>
    <head>
        <title>
            Library Managemenr System
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  
  }
 label{
  display:flex;
  font-size:20px;
 }
    </style>

    </head>
    <body class="bg">

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
            <span class="links_name inactive">Add clients</span>
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
            <span class="links_name active">Allocate</span>
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


  <!--<center style="position: relative; top:100px; padding:8%; 0" class="bg">
<h1 style="margin-bottom:20px;">Project Allocate</h1>
<div class="content">
  <div class="row">-->
  <center  class="bg">
<div class="col"  style="position:relative;  top: -100%; margin-bottom:15%;  margin-left:30%; margin-right:20%;">
           
				<div class="row mx-auto mid">
        <div class="col-12 col-md-6 ">
    <form method="post" action="allocate.php" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; position:relative;">

      <div class="form-group">
        <!--  <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="Username" />
          </div>-->
          <label for="uname" ><b>Client ID</b></label>
         <!-- <div class="col-sm-12">-->
          <?php
            include 'connection.php';
             $sql="select s_id from client";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="s_id" style="width: 10em; height: 2em; font-size: 15px;">
                 <option >Client</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option selected="selected" value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select>

            <?php
       if (isset($_POST['chk']))
       {
                    $username=$_POST['s_id'];
                    $sql1="select * from project where s_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>
     
      </div></div>
  

      <div class="form-group">
            <label  for="coursename"><b>Client ID</b></label>
            
      <input  class="form-control" placeholder="Enter Client id" type="text" id="in" type="text" name="s_id" required>
          </div>
      

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="choose username" />-->

            <label ><b>Employee ID</b></label>
           
      <input  class="form-control" placeholder="Enter Employee id" id="in" type="text" name="faid"  required>
          </div>
     

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">ConfirmPassword</label>
          <div class="col-sm-7">
            <input type="password" name="password"  class="form-control" id="input1" placeholder="ConfirmPassword" />-->

            <label ><b>Project ID:</b></label>
           
      <input  class="form-control" placeholder="Enter Project ID"  id="in" type="text" name="projectid" value="" required>
          </div>


     
      <input id="bt" type="submit" name="allocate" value="Allocate"  class="btn btn-primary mt-5" style="width:15%; margin-left:40%;">
      
    
    </form>
</div>
</div>
</center>
</body>
    </html>
 <?php
}

?>
   
