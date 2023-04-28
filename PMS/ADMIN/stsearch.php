<?php
session_start();
$user =  $_SESSION['Email'];
include 'connection.php';
if(isset($_POST['update']))
{
            $id=$_POST['s_id']; 
           $name=$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
           $pass=$_POST['password']; 
           if (!empty($id)|| !empty($name)||!empty($email)||!empty($phone)||!empty($pass))
           {    
            $sql= "UPDATE `pmas`.`client` SET s_id = '$id',`name` = '$name', `email` = '$email', `phone` = '$phone', `password` = '$pass' WHERE `client`. s_id = '$id';";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:stsearch.php');  
           }
        else     
        {
              echo 'Please fill up all fields';
              header('Location:stsearch.php');
        }  
      }
if(empty($_SESSION['Email']))
{
header("location:index.php");
}
else
{
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
    	body
	{
		background-image:url(services-2.jpg);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
               
	}
  .txt{
    text-decoration:none;
    position: relative;
  }
  .bg{
  background-color: rgb(11, 153, 153);
  margin-top:20%;
  }
    </style>
</head>
<body>
<header>

</header>
<body>
<div class="container" style="position:relative; cursor: pointer; top:100px; font-size: 20px;">
          <div class="row row-cols-3" style="display:flex; justify-content: center; align-items:center;">
            <div class="col" style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); background-color:  #fff; width:200px; height:120px; margin-right: 25px; 
    padding-top: 10px;"><br><a href="student.php" class="txt"><strong
                style=" padding-left: 40px; color:rgb(11, 153, 153);">Add Client</strong></a></div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
             <br><a href="faculty.php" class="txt"><strong
                style=" padding-left: 30px;  color: #fff;">Add Employee</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px;  margin-right: 25px; padding-top: 10px;">
              <br><a href="stsearch.php" class="txt"><strong
                style="padding-left: 15%;  color: #fff;">Client search</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="fa_search.php" class="txt"><strong
                style=" padding-left: 10%; color: #fff;">Employee search</strong></a>
            </div>
</div></div>
<div class="container" style="position:relative; cursor: pointer; top:100px; font-size: 20px;">
          <div class="row row-cols-3" style="display:flex; justify-content: center; align-items:center; padding:20px;">
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="allocate.php" class="txt"><strong
                style=" padding-left: 60px; color: #fff; ">Allocate</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="report.php" class="txt "><strong
                style=" padding-left: 60px; color: #fff;">Report</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); color: rgb(11, 153, 153); background-color: #fff;  height:120px; width:200px;  margin-right: 25px; padding-top: 10px;">
              <br><a href="logout.php" class="txt "><strong
                style=" padding-left: 60px; color:rgb(11, 153, 153);">Logout</strong></a>
            </div>
          </div>
  </div>

  <center style="position: relative; top:100px; padding:8%; 0" class="bg">
<h1 style="margin-bottom:20px;">search & Update</h1>
<div class="content">
  <div class="row">
    <form method="post" action="stsearch.php" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; position:relative;">

     <!-- <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="Username" />
          </div>
          <label for="uname" class="col-sm-3 control-label"><b>Client ID</b></label>
          <div class="col-sm-7">
          <?php
            include '../connection.php';
             $sql="select s_id from client";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px; ">
                 <option selected="selected" >Client</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option  value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
             </select>
      <input  type="submit" name="search" value="Search" id="bt" required>
      </div></div>
      <?php
      if (isset($_POST['search']))
       {
                    $username=$_POST['s_id'];
                    $sql1="select * from client where s_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>-->

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="choose username" />-->

            <label for="psw" class="col-sm-3 control-label"><b>Client ID</b></label>
            <div class="col-sm-7">
      <input  class="form-control" placeholder="Enter id" type="text" id="in" type="text" name="s_id" required>
          </div>
      </div>

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
     
  
      <input type="submit" name="update" value="Update" id="bt"  class="btn btn-primary col-md-2 col-md-offset-8" />
      
    
    </form>
</div>
</div>
</center>
</body>
    </html>
 <?php
}

?>
   
  


