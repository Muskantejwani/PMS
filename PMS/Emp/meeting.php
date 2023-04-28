<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];

include 'connection.php';
        if(isset($_POST['submit']))
        {
           $sid=$_POST['sid']; 
           $pro=$_POST['project_name']; 
           //$fid=$_POST['fid'];
           $fid= $_SESSION['Email'];
           $date=$_POST['dat'];
           $date2=$_POST['submission_date'];
           $time=$_POST['tem'];
           $dec=$_POST['des']; 
           
           
          if (!empty($date)||!empty($date2)||!empty($time)||!empty($dec))
           {
            if ($date2 > $date){
            $sql= "INSERT INTO `pmas`.`meeting` (`meeting_id`, `f_id`, `s_id`, `project_name`, `date`, `submission_date`,  `time`,`desc`) VALUES ('', '$fid', '$sid','$pro', '$date','$date2', '$time', '$dec');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:meeting.php');  
           }
           echo '<script>alert("submission date couldnot be greater than start date")</script>';
          }
        else
            
        {
          echo '<script>alert("Please fill up all fields correctly")</script>';
              header('Location:meeting.php');
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  .inputs1{
    width:50%;
   padding-top:1%;
   padding-bottom:1%;
   font-size:18px;
  }
  .inputs{
    width:50%;
    font-size:18px;
  }
  .user{
  color:white;
 position:relative !important;
 left:99% !important;
 margin-left:10%;
}
#in{
  height:10%;
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
        <a href="Employee.php" title="Dashboard" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">My Projects</span>
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
        <a href="meeting.php" title="Fees" style="text-decoration:none; list-style:none;">
            
            <span class="links_name active">Meeting</span>
        </a>
        </li>
        <li>
        <a href="report.php" title="Expense" style="text-decoration:none; list-style:none;">
           
            <span class="links_name inactive">Report</span>
        </a>
        </li>
                   
  
        <li>
        <a href="allocate.php" title="Course" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Add data</span>
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





<!--<header>

<table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr style="background:rgb(11, 153, 153);">
    <th width="74" scope="col">&nbsp;</th>
    <th width="646" scope="col"><font size="8" color="White">PMS</font></th>
    <th width="140" scope="col"><font color="White" size="5">
    <?php
    //print $role;
  //  echo "<br/>";
   // print $user;
    ?>
        </font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
</header>-->



<center  class="bg">
<p color="White" class="user" style=" font-size:26px;">
    <?php
   // print $role;
    echo "<br/>";
    print $user;
    ?>
        </p>
<div class="col"  style="position:relative;  top: -100%; margin-bottom:25%;  margin-left:15%; margin-right:2%;">
				<div class="row mx-auto mid">

  <form method="post" action="meeting.php" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; ">
  
<div class="form-group">
    <label for="uname" class="col-sm-3 control-label"><b>Employee ID</b></label>
    <div class="col-sm-7">
    <?php
      include '../connection.php';
      // $sql="select f_id from faculty";
      // $result=  mysqli_query($conn, $sql)
       ?><!-- <select  id="in" type="text" name="fid" style="width: 10em; height: 2em; font-size: 15px;">-->
           <!--<option >Faculty</option>-->
           <?php
      //     while($row = mysqli_fetch_assoc($result))
           {
               //$category= $row['f_id'];
               $category= $user;
               ?>
          <!-- <input selected="selected"    value="<?//php echo $category; ?>"><?//php echo $category;?></input>-->
           <input id="in" type="text" name="fid" style="width: 10em; height: 2em; font-size: 15px; background-color:#fff;" value="<?php echo $category; ?>"disabled>
           <?php
           }
?>
       </select>
       <!--<input id="bt" type="submit" name="search" value="Search" />-->
</div></div>

<?php
 /*if (isset($_POST['search']))
 {
              $username=$_POST['f_id'];
              $sql1="select * from faculty where f_id ='$username'; ";
              $rec=mysqli_query($conn, $sql1);
              $row=mysqli_fetch_assoc($rec);
 }*/
 ?>

<!--<div class="form-group">
 
    <label for="uname" class="col-sm-3 control-label"><b>Employee ID</b></label>
    <div class="col-sm-7">
<input  class="form-control" id="in" type="text" name="fid" value="<?php echo $user;?>" readonly>
</div></div>-->

<div class="form-group">
   <!-- <label for="input1" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-7">
      <input type="text" name="uname"  class="form-control" id="input1" placeholder="choose username" />-->

      <label for="psw" class="col-sm-3 control-label"><b>Client ID</b></label>
      <div class="col-sm-7">
      <?php
            include '../connection.php';
             $sql="select distinct(s_id) from project where f_id='$user';";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="sid" style="width: 10em; height: 2em; font-size: 15px;">
                <!-- <option selected>Supervisory</option>-->
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
    </div>
</div>

<div class="form-group">
   <!-- <label for="input1" class="col-sm-3 control-label">ConfirmPassword</label>
    <div class="col-sm-7">
      <input type="password" name="password"  class="form-control" id="input1" placeholder="ConfirmPassword" />-->

      <label for="psw" class="col-sm-3 control-label"><b>Project Name:</b></label>
      <div class="col-sm-7">
<input  class="form-control" placeholder="Project Name"  id="in" type="text" name="project_name" required>
    </div>
</div>

<div class="form-group">
    <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
    <div class="col-sm-7">
      <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


      <label for="psw" class="col-sm-3 control-label"><b>Date:</b></label>
      <div class="col-sm-7">
<input class="form-control"  id="in" type="date" name="dat" required>
  
    </div>
</div>

<div class="form-group">
    <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
    <div class="col-sm-7">
      <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


      <label for="psw" class="col-sm-3 control-label"><b>P_S Date:</b></label>
      <div class="col-sm-7">
<input class="form-control"  id="in" type="date" name="submission_date" required>
  
    </div>
</div>

<div class="form-group">
    <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
    <div class="col-sm-7">
      <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


      <label for="psw" class="col-sm-3 control-label"><b>Time:</b></label>
      <div class="col-sm-7">
<input class="form-control"  id="in" type="time" name="tem"  required>
  
    </div>
</div>


<div class="form-group">
    <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
    <div class="col-sm-7">
      <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


      <label for="psw" class="col-sm-3 control-label"><b>Description:</b></label>
      <div class="col-sm-7">
 <textarea class="form-control" id="in" name="des" cols="22" rows="5" required></textarea> 
  
    </div>
</div>
<input type="submit" name="submit" value="Submit"   class="btn btn-primary col-md-2 col-md-offset-8" />

</div>
</form>
</body>
</html>


<?php
}
?>




