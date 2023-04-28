<?php 
  
  include('connection.php');


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>LMS</title>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color:rgb(11, 153, 153);">

<header>
</header>

<center>

<div class="content" style="margin-top:10%;">
    <div class="row">

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
    <h3>Recover your password</h3>

      <div class="form-group">

          <label for="input1" class="col-sm-2 control-label">ID</label>
          <div class="col-sm-10">
            <input type="text" name="ID"  class="form-control" id="input1" placeholder="your ID" />
          </div>
      </div>

      <input type="submit" class="btn col-md-2 col-md-offset-10" value="Go" name="reset" style="color:#fff; background-color:rgb(17, 99, 105);"/>
    </form>
    <div style="margin-right:30%; margin-top:5%;"><a href="managerlogin.php" style="color:#fff;"><strong>Login Here</strong></a></div>
      <br>

      <?php

          if(isset($_POST['reset'])){

          $test = $_POST['ID'];
          $row = 0;
          $query=("select password from admin where ID = '$test'");
          $query = mysqli_query($conn,$query);
         
          $row = mysqli_num_rows($query);

          if($row == 0){
?>
      <div  class="content"><p>ID is not associated with any account. Contact PMS</p></div>

<?php
          }

          else{

            $query=("select password from admin where ID = '$test'");
            $query = mysqli_query($conn,$query);
            
            $i =0;
            while($dat = mysqli_fetch_array($query)){
                $i++;
?>
  <strong>
  <p style="text-align: center; margin-top:5%;">Hi there!<br>u requested for the password recovery. You may this key as your password to login. Recovery key: <mark><?php echo $dat['password']; ?></mark></p></strong>
<?php
      }
          }
  }


       ?>

  </div>

</div>

</center>

</body>
</html>
