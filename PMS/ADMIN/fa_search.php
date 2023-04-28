<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];



include 'connection.php';

if(isset($_POST['update']))
{
           $id=$_POST['f_id']; 
           $name=$_POST['faname'];
           $email=$_POST['faemail'];
           $phone=$_POST['faphone'];
           $pass=$_POST['fapass']; 
           $qualification=$_POST['qualification'];
           
           if (!empty($f_id)|| !empty($name)||!empty($email)||!empty($phone)||!empty($pass)||!empty($qualification))
           {
              
            $sql= "UPDATE `pmas`.`employee` SET   `f_id` = '$id',`name` = '$name', `email` = '$email', `phone` = '$phone', `password` = '$pass', `qualification` = '$qualification' WHERE `employee`.`f_id` = '$id';";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:fa_search.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:fa_search.php');
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
<h1 style="margin-bottom:20px;">Search and update</h1>
<div class="content">
  <div class="row">
    <form method="post" action="fa_search.php" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; position:relative;">

    <!--  <div class="form-group">
          <label for="uname" class="col-sm-3 control-label"><b>Employee ID</b></label>
          <div class="col-sm-7">
          <?php
            include '../connection.php';
             $sql="select f_id from employee";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px;">
                 <option >Faculty</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['f_id'];
                     ?>
                 <option selected="selected" value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
             </select>
             <input id="bt" type="submit" name="search" value="Search" />
      </div></div>-->

      <?php
       if (isset($_POST['search']))
       {
                    $username=$_POST['f_id'];
                    $sql1="select * from employee where f_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>

 <div class="form-group">
       
          <label for="uname" class="col-sm-3 control-label"><b>Employee ID</b></label>
          <div class="col-sm-7">
      <input type="text" class="form-control" placeholder="Enter ID" id="in" name="f_id" required>
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
      <input class="form-control" placeholder="Qualifications"  id="in" type="text" name="qualification" required>
        
          </div>
      </div>
      <input type="submit" name="update" value="Update" id="bt"  class="btn btn-primary col-md-2 col-md-offset-8" />
    
      </div>
  </form>
      </body>
      </html>
<!--
    <form method="post" action="fa_search.php">
      
       <div style="background-color: beige; margin-left: 33%; alignment-adjust: central; width: 35%">
           <table align="center"  width="100%" cellspacing="00" cellpadding="05">
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Faculty ID&nbsp;:&nbsp; </font>    </td>
    <td>
        <?php
           // include '../connection.php';
           //  $sql="select f_id from faculty";
           //  $result=  mysqli_query($conn, $sql)
             ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px;">
                 <option >Faculty</option>
                 <?php
             //    while($row = mysqli_fetch_assoc($result))
              //   {
                    // $category= $row['f_id'];
                     ?>
                 <option selected="selected" value="<?//php echo $category; ?>"><?//php echo $category;?></option>
                 <?php
               //  }
     ?>
             
             </select></td>
  </tr>
               <tr>
                   <td colspan="3" align="center"><input id="bt" type="submit" name="search" value="Search" />
    </td>
    <td>&nbsp;</td>
  </tr>
       </table>
       </div> 
       <br/><br/>
       <div style="background-color: beige; margin-left: 33%; alignment-adjust: central; width: 35%">
       <table align="center"  width="100%" cellspacing="00" cellpadding="05">
       <?php
      /* if (isset($_POST['search']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from faculty where f_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }*/
       ?>
      
      
    
       <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Faculty ID&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="fid" value="<?//php echo $row['f_id'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
       
       
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="faname" value="<?//php echo $row['name'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Email&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="email" name="faemail" value="<?//php echo $row['email'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Phone&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" name="faphone" value="<?//php echo $row['phone'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Password &nbsp;:&nbsp;</font></td>
    <td><input id="in" type="password" name="fapass" value="<?//php echo $row['password'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Qualification&nbsp;:&nbsp;</font></td>
    <td><input  id="in" type="text" name="faqualification" value="<?//php echo $row['qualification'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
    <td>&nbsp;</td>
    <td colspan="2">
        <input type="submit" name="update" value="Update" id="bt" />
    				
    <td>&nbsp;</td>
  </tr>
</table>
      </div>
  </form>
 <?php
}
//elseif($role=="Faculty")    
//{
?>
    <?php
 //  header('Location:../Admin.php');
   ?>
 <?php
//}
//else   
//{
?>
    <?php
 //  header('Location:../Admin.php');
   ?>
<?php
//}
?>

<?php
//}
?>
      


