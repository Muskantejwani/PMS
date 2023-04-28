<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];



include 'connection.php';


if(isset($_POST['allocate']))
{
         // $id=$_POST['id']; 
           $proname=$_POST['proname'];
           $status=$_POST['status'];
           $date=$_POST['date'];
                      
           if ( !empty($proname)||!empty($status))
           {
              
            $sql= "INSERT INTO `pmas`.`myprojects` VALUES ('', '$proname', '$status');";
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
    padding-bottom:17%;
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
 .user{
  color:white;
 position:relative !important;
 left:99% !important;
 margin-left:10%;
}
    </style>

    </head>
    <body class="bg">

<div class="contain">
<div class="row">
            <div class="col" >
<div class="sidebar side">
    <ul class="nav_list">
    <p color="White" class="user" style=" font-size:26px;">
    <?php
   // print $role;
    echo "<br/>";
    print $user;
    ?>
        </p>
    <li>
        <a href="Employee.php" title="Dashboard"  style="text-decoration:none; list-style:none;">
            <span class="links_name active">My Projects</span>
        </a>
        </li>


      <!--  <li>
        <a href="msg.php" title="Students">
            <span class="links_name inactive">msg</span>
        </a>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle inactive" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
          style="font-size:20px; color:white" style="text-decoration:none; list-style:none;">
           Messages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item inactive" href="sendmsg.php" style="text-decoration:none; list-style:none;">send msg</a></li>
            <li><a class="dropdown-item inactive" href="inbox.php" style="text-decoration:none; list-style:none;">inbox</a></li>
            <li><a class="dropdown-item inactive" href="sent-messages.php" style="text-decoration:none; list-style:none;">sent Messages</a></li>
          </ul>
        </li>




        <li>
        <a href="meeting.php" title="Fees"  style="text-decoration:none; list-style:none;">
            
            <span class="links_name inactive">Meeting</span>
        </a>
        </li>
        <li>
        <a href="report.php" title="Expense"  style="text-decoration:none; list-style:none;">
           
            <span class="links_name inactive">Report</span>
        </a>
        </li>
                   
        <li>
        <a href="allocate.php" title="Course"  style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Add data</span>
        </a>
        </li>
                        
        <li>
        <a href="logout.php" title="Reports"  style="text-decoration:none; list-style:none;">
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
<div class="col"  style="position:relative;  top: -100%; margin-bottom:20%;  margin-left:40%; margin-right:2%;">
           
				<div class="row mx-auto mid">
       
    <form method="post" action="allocate.php" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; position:relative;">

      <div class="form-group">
        <!--  <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="Username" />
          </div>-->
        

           

    
      <div class="form-group">
       

            <label ><b>project Name</b></label>
      <input  class="form-control" placeholder="Enter project Name" id="in" type="text" name="proname"  required>
          </div>
     

      <div class="form-group">
       
            <label ><b>status</b></label>
           
      <input  class="form-control" placeholder="Enter Project ID"  id="in" type="text" name="status" value="" required>
          </div>
         
      <input id="bt" type="submit" name="allocate" value="Save data"  class="btn btn-primary mt-5" style="width:50%; background-color:rgb(17, 99, 105);color:#fff; border:rgb(11, 153, 153); weight:600;">
      
    
    </form>
</div>
</div>
</center>
</body>
    </html>
 <?php
}

?>
   
