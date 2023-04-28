
<?php

include('connection.php');

  try{
    
      if(isset($_POST['signup'])){

        if(empty($_POST['id'])){
           throw new Exception("Username id cann't be empty.");
        }

        if(empty($_POST['password'])){
           throw new Exception("Password cann't be empty.");
        }
        
        if(empty($_POST['comfirm_password'])){
           throw new Exception("confirm password cann't be empty.");
        }
        if(empty($_POST['Company'])){
           throw new Exception("institute cann't be empty.");
        }
        
          $query=("insert into admin values('$_POST[id]','$_POST[password]','$_POST[comfirm_password]','$_POST[Company]')");

          $result = mysqli_query($conn,$query);
        
      //  $success_msg="Signup Successfully!";

  
  }
}
  catch(Exception $e){
    $error_msg =$e->getMessage();
  }

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
</head>
<body style="background-color: rgb(11, 153, 153);">
<!--<div style="background-color:black; position:absolute; left:0px; top:0px; height:100%; width: 10%;">
</div>
<div style="background-color:black; position:absolute; right:0px; top:0px; height:100%; width: 10%;">
</div>-->
<header>

</header>
<center style="position: relative; top:100px;">
<h1 style="margin-bottom:20px;">Signup</h1>
<div class="content">

  <div class="row">
    <?php
    if(isset($success_msg)) echo $success_msg;
   if(isset($error_msg))  echo '<script>alert("error occur")</script>';
   // if(isset($success_msg)) echo $success_msg;
   // if(isset($error_msg)) echo $error_msg;
     ?>

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; position:relative;">

      <div class="form-group">
        <!--  <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="Username" />
          </div>-->
          <label for="uname" class="col-sm-3 control-label"><b>Manager ID</b></label>
          <div class="col-sm-7">
      <input type="text" class="form-control" placeholder="Enter ID" name="id" required>
      </div></div>

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="choose username" />-->

            <label for="psw" class="col-sm-3 control-label"><b>Password</b></label>
            <div class="col-sm-7">
      <input type="password"  class="form-control" placeholder="Enter Password" name="password" required>
          </div>
      </div>

      <div class="form-group">
         <!-- <label for="input1" class="col-sm-3 control-label">ConfirmPassword</label>
          <div class="col-sm-7">
            <input type="password" name="password"  class="form-control" id="input1" placeholder="ConfirmPassword" />-->

            <label for="psw" class="col-sm-3 control-label"><b>Confirm Password:</b></label>
            <div class="col-sm-7">
      <input type="password" class="form-control" placeholder="Confirm Password" name="comfirm_password" required>
          </div>
</div>

      <div class="form-group">
          <!--<label for="input1" class="col-sm-3 control-label">Institute</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />-->


            <label for="psw" class="col-sm-3 control-label"><b>Company:</b></label>
            <div class="col-sm-7">
      <input type="password" class="form-control" placeholder="Enter Company Name" name="Company" required>
        
          </div>
      </div>
     
      <input type="submit"  class="btn btn-primary col-md-2 col-md-offset-8" value="Signup" name="signup"/>
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </form>
  </div>
    <br>
    <h5><p><strong>If Already have an account? <a href="managerlogin.php">Login</a> here.</strong></p></h5>

</div>

</center>

</body>
</html>