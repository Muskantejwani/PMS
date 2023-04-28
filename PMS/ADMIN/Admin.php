<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];

function projects(){   
  include 'connection.php';
      $sql = "SELECT COUNT(id) From myprojects Where status='Active'";
      $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
      $rs = mysqli_fetch_array($result);
      echo $rs[0];
      mysqli_close($conn);
  }

  function tprojects(){   
    include 'connection.php';
        $sql = "SELECT COUNT(*) From project";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
        $rs = mysqli_fetch_array($result);
        echo $rs[0];
        mysqli_close($conn);
    }

if(empty($_SESSION['Email']))
{
header("location:managerlogin.php");
}
else
{


//if($role=="Admin")
//{
?>

<!DOCTYPE html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    width:35%;
    height:100vh;
    /*background-color:#242444;*/
    background-color:#404040;
   
  }
  .bg{
  background-color: rgb(11, 153, 153);
  margin-top:20%;
  }
    </style>



<style>
  /*
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
    font-size:22px ;
    color:#fff;
    padding:8% 10%;
    font-family: Arial, Helvetica, sans-serif;
  }
  ul li a .active{
    padding:8% 10%;
  }
.active{
  font-size:22px ;
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
	
    background-color: rgb(11, 153, 153);
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
    
    background-color:#404040;
   
  }
  .coll{
    position:relative !important;  
    top: -100% !important; 
    margin-bottom:33% !important; 
     margin-left:10% !important;
  }*/
  
</style>
<title>PMS</title>
</head>
<body>


<div class="contain ">
<div class="row ">
            <div class="col" >
<div class="sidebar side ">
    <ul class="nav_list">
        <li>
        <a href="Admin.php" title="Dashboard" style="text-decoration:none; list-style:none;">
            <span class="links_name active">Dashboard</span>
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
            <span class="links_name inactive">Add Client</span>
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

           <!-- <div class="col-md-9 " style=" position:relative; top:-100%; margin-bottom:23%;">
            class="container cont:
           class="row row-cols-3 rows"

-->


<div class="col">
           <div class="container cont " style=" cursor: pointer;  font-size: 20px;">
         <div   class="row row-cols-3 d-flex" style="position:relative; right:25%; top:20%;">
            <div class="col"  style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); background-color:  #fff; width:35%; height:10%; margin-right: 20%;
    margin-top: 10%;"><br>
                <strong
                style="  color:rgb(11, 153, 153);  " class="text-center"><h6 style="margin-bottom:10%; "><b>Date</b> : <?php echo date("d-F-20y")?></h6>
                <h4 style="weight:600; font-size:20px; ">Active Projects</h4><br>
                <h2 style=" padding-bottom:10%;"><?php echo projects();?></h2></strong></div>

                <div class="col" style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); background-color:  #fff; width:35%; height:10%;  
    margin-top: 10%;"><br><strong
                style="  color:rgb(11, 153, 153);  " class="text-center"><h6 style="margin-bottom:10%; "><b>Date</b> : <?php echo date("d-F-20y")?></h6>
                <h4 style="weight:600; font-size:20px; ">Total Projects</h4><br>
                <h2 style=" padding-bottom:10%;"><?php echo tprojects();?></h2></strong></div>

                </div></div>
               



           <!-- <div class="col-md-4 col-tab">
                <div class="container bg-success text-light">
                <h4>Fees Paid</h4><br>
                <h2><?//php echo feepaid();?></h2>
                </div>
            </div>-->
        

</div>
</div>
</center>
<!--

<div class="container" style="position:relative; cursor: pointer; top:100px; font-size: 20px;">
          <div class="row row-cols-3" style="display:flex; justify-content: center; align-items:center; padding:20px;">
            <div class="col" style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); background-color:  #fff; width:200px; height:120px; margin-right: 25px; 
    padding-top: 35px;"><br><a href="ADMIN/student.php" class="txt"><strong
                style=" padding-left: 40px; color:rgb(11, 153, 153);">Add Client</strong></a></div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 35px;">
             <br><a href="ADMIN/faculty.php" class="txt"><strong
                style=" padding-left: 30px; color: #fff;">Add Employee</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px;  margin-right: 25px; padding-top: 35px;">
              <br><a href="ADMIN/allemployee.php" class="txt"><strong
                style=" padding-left: 30px; color: #fff;">Employee search</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 35px;">
              <br><a href="ADMIN/allclients.php" class="txt"><strong
                style=" padding-left: 40px; color: #fff;">Client search</strong></a>
            </div>
</div></div>
          <div class="container" style="position:relative; cursor: pointer; top:100px; font-size: 20px;">
          <div class="row row-cols-3" style="display:flex; justify-content: center; align-items:center; padding:20px;">
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 35px;">
              <br><a href="ADMIN/allocate.php" class="txt"><strong
                style=" padding-left: 60px; color: #fff; ">Allocate</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 35px;">
              <br><a href="ADMIN/report.php" class="txt "><strong
                style=" padding-left: 60px; color: #fff;">Report</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); color: rgb(11, 153, 153); background-color: #fff;  height:120px; width:200px;  margin-right: 25px; padding-top: 35px;">
              <br><a href="logout.php" class="txt "><strong
                style=" padding-left: 60px; color:rgb(11, 153, 153);">Logout</strong></a>
            </div>
          </div>
  </div>
<!--<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr style="background-color:rgba(8, 106, 119, 0.945);">
      <th width="5%" scope="col"><h4>&nbsp;</h4></th>
      <th width="12%" scope="col"><a href="ADMIN/student.php">Add Student</a></th>
      <th width="11%" scope="col"><a href="ADMIN/faculty.php">Add Faculty</a></th>
      <th width="11%" scope="col"><a href="ADMIN/stsearch.php">Search Student</a></th>
      <th width="11%" scope="col"><a href="ADMIN/fa_search.php">Search Faculty </a></th>
      <th width="11%" scope="col"><a href="ADMIN/allocate.php">Allocate</a></th>
      <th width="11%" scope="col"><a href="ADMIN/skill.php">Skill Matrix</a></th>
      <th width="11%" scope="col"><a href="ADMIN/report.php">Reports</a></th>
      <th width="11%" scope="col"><a href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
    <tr>
        <td colspan="10"><img src="" height="50%" width="100%"></img></td>
    </tr>
</table>-->
   
<!--
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
	body
	{
		background-image:url(home.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
        a link{
            text-decoration: none;
        }
</style>
<title>Project Management System</title>
</head>
<div>
<body>
    <table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
    <th width="74" scope="col">&nbsp;</th>
    <th width="164" scope="col"><img src="images/logo1.png" alt="LOGO"></th>
    <th width="646" scope="col"><font size="8" color="White">Project Managenent System</font></th>
    <th width="140" scope="col"><font color="White" size="5">
   
        </font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
      <tr bgcolor="#99CCFF">
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
      <th width="15%" scope="col"><a href="FACULTY/skill.php">Skill Matrix</a></th>
      <th width="14%" scope="col"><a href="FACULTY/view.php">View</a></th>
      <th width="15%" scope="col"><a href="FACULTY/mail.php">Mail</a></th>
      <th width="13%" scope="col"><a href="FACULTY/meeting.php">Meeting</a></th>
      <th width="15%" scope="col"><a href="FACULTY/#">Reprots</a></th>
    <th width="15%" scope="col"><a href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
       <tr>
        <td colspan="10"><img src="home.png" height="50%" width="100%"></img></td>
    </tr>
</table>
 
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
	body
	{
		background-image:url(home.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
                
	}
        a link{
            text-decoration: none;
        }
</style>
<title>Project Management System</title>
</head>
<div>
<body>
    <table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
    <th width="74" scope="col">&nbsp;</th>
    <th width="164" scope="col"><img src="images/logo1.png" alt="LOGO"></th>
    <th width="646" scope="col"><font size="8" color="White">Project Managenent System</font></th>
    <th width="140" scope="col"><font color="White" size="5">
	</font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#99CCFF">
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
    <th width="13%" scope="col"><a href="STUDENT/project.php">Project</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="STUDENT/skill.php">View Skill Matrix</a></th>
    <th width="11%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="STUDENT/mail.php">Mail</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
       <tr>
        <td colspan="10"><img src="home.png" height="50%" width="100%"></img></td>
    </tr>
</table>

</table>
<p>-->
<?php
}
?>
</body>
</html>
 
    
