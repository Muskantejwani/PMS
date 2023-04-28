<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];
/*
if(isset($_POST['bppf'])){
if (isset($_FILES['ppf']))
{
    $file= $_FILES['ppf'];
    //file properties
    $file_name=$file['name'];
    $file_temp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];
    // work out the extension
    $file_ext = explode('.', $file_name);
    $file_ext=  strtolower(end($file_ext));
    $allowed= array('docx','doc','txt','pdf');
    
    if(in_array($file_ext, $allowed))
    {
        if($file_error===0)
        {
            if($file_size<=9999999999)
            {
                $file_name_new=uniqid('',TRUE).'.'.$file_ext;
                $file_destination='../ppf/'.$file_name_new;
                if(move_uploaded_file($file_temp, $file_destination))
                {
                    //echo $file_destination;
                    include '../connection.php';
                    $sql = "UPDATE project SET ppf='$file_name' WHERE s_id='$user'";
                    mysqli_query($conn, $sql);
                    $conn->close();
                    header('Location:project.php'); 
                }
            }
        }
    }
}
}


    elseif(isset($_POST['bpsf']))
 {
if (isset($_FILES['psf']))
{
    $file= $_FILES['psf'];
    //file properties
    $file_name=$file['name'];
    $file_temp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];
    // work out the extension
    $file_ext = explode('.', $file_name);
    $file_ext=  strtolower(end($file_ext));
    $allowed= array('docx','doc','txt','pdf');
    
    if(in_array($file_ext, $allowed))
    {
        if($file_error===0)
        {
            if($file_size<=9999999999)
            {
                $file_name_new=uniqid('',TRUE).'.'.$file_ext;
                $file_destination='../psf/'.$file_name_new;
                if(move_uploaded_file($file_temp, $file_destination))
                {
                    //echo $file_destination;
                    include '../connection.php';
                    $sql = "UPDATE project SET psf='$file_name' WHERE s_id='$user'";
                    mysqli_query($conn, $sql);
                    $conn->close();
                    header('Location:project.php'); 
                }
            }
        }
    }
}
}*/
 
 
if(empty($_SESSION['Email']))
{
header("location:index.php");
}
else
{
//if($role=="Admin")
//{
?>
<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
    <?php
//header('Location:../Admin.php');
 
//}
//elseif($role=="Faculty")    
//{
    //header('Location:../Admin.php');
?>
    
 <?php
//}
//else   
//{
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
	body
	{
		background-image:url(../background.png);
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
    <th width="164" scope="col"><a href="../Admin.php"><img src="../logo1.png" alt="LOGO"/></a></th>
    <th width="646" scope="col"><font size="8" color="White">Project Managenent System</font></th>
    <th width="140" scope="col"><font color="White" size="5">
	<?php
    print $role;
    echo "<br/>";
    print $user;
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
      <tr bgcolor="#99CCFF">
          <th width="7%" scope="col"><h4>&nbsp;</h4></th>
          <th width="13%" scope="col"><a href="project.php">Project</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="skill.php">View Skill Matrix</a></th>
    <th width="11%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="mail.php">Mail</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="../logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
<?php
//}
?>
</table>
<p>
  <?php
//}
?>
    
    
</p>

<div style="background-color: #D2691E; width: 70%; margin-left: 15%; margin-top: 0px; ">
    <br/><br /><br />
<form method="post" action="project.php" enctype="multipart/form-data">
    
<table width="100%" border="0" cellspacing="05" cellpadding="05">
  <tr>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="37%" scope="col">&nbsp;</th>
    <th width="37%" scope="col">&nbsp;</th>
    <th width="13%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"><div style="background-color: beige;"><br/><h3>Project  Proposal</h3><br /><input type="file" name="ppf"/><br/><br/><input type="submit" name="bppf" value="upload"/><br/><br/></div></td>
    <td align="center"><div style="background-color: beige;"><br/><h3>Project  Specification</h3><br /><input type="file" name="psf"/><br/><br/><input type="submit" name="bpsf" value="upload"/><br/><br/></div></td>
    <td>&nbsp;</td>
  </tr>
</form>
</table>
    <br /><br />-->

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr style="background:rgb(11, 153, 153);">
    <th width="74" scope="col">&nbsp;</th>
   <!-- <th width="164" scope="col"><img src="images/logo1.png" alt="LOGO"></th>-->
    <th width="646" scope="col"><font size="8" color="White">PMS</font></th>
    <th width="140" scope="col"><font color="White" size="5">
    <?php
    //print $role;
    echo "<br/>";
    print $user;
    ?>
        </font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
</header>

<div class="container" style="position:relative; cursor: pointer; top:100px; font-size: 20px;">
          <div class="row row-cols-3" style="display:flex; justify-content: center; align-items:center;">
           <!-- <div class="col" style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); background-color:  #fff; width:200px; height:120px; margin-right: 25px; 
    padding-top: 10px;"><br><a href="FACULTY/skill.php" class="txt"><strong
                style=" padding-left: 40px; color:rgb(11, 153, 153);">Skills</strong></a></div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
             <br><a href="FACULTY/view.php" class="txt"><strong
                style=" padding-left: 30px;  color: #fff;">View</strong></a>
            </div>-->
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px;  margin-right: 25px; padding-top: 10px;">
              <br><a href="project.php" class="txt"><strong
                style="padding-left: 20%;  color: #fff;">Project</strong></a>
            </div>
           <!-- <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="skill.php" class="txt"><strong
                style=" padding-left: 20%; color: #fff;">view skills</strong></a>
            </div>-->
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="mail.php" class="txt"><strong
                style=" padding-left: 20%; color: #fff;">Message</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="report.php" class="txt"><strong
                style=" padding-left: 30%; color: #fff; ">Report</strong></a>
            </div>
</div></div>
<div class="container" style="position:relative; cursor: pointer; top:100px; font-size: 20px;">
          <div class="row row-cols-3" style="display:flex; justify-content: center; align-items:center; padding:20px;">
           
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); color: rgb(11, 153, 153); background-color: #fff;  height:120px; width:200px;  margin-right: 25px; padding-top: 10px;">
              <br><a href="logout.php" class="txt "><strong
                style=" padding-left: 30%; color:rgb(11, 153, 153);">Logout</strong></a>
            </div>
          </div>
  </div>

  <center style="position: relative;  top:100px; padding:8%; 0" class="bg">
<h1 style="margin-bottom:20px;">Give feedback</h1>

<form method="post" action="project.php"> 
    <div style="background-color: beige; width: 30%; margin-left: 35%">
        <table align="center">
    <tr>
    <td>&nbsp;<br/><br/></td>
    <?php
    if(isset ($_POST['feedback']))
{
    include 'connection.php';
                    $sql1="select * from project where s_id ='$user' ";
                    $rec=mysqli_query($conn, $sql1);
                    
                    while($std=mysqli_fetch_assoc($rec))
                    {
                        ?>
    
    <td colspan="2" align="center"><textarea name="feedback" rows="5" cols="30" readonly="readonly" placeholder="FEEDBACK"><?php echo $std['remark'];?> </textarea> </td>  <td></td> </tr>
                      <?php 
                    }
}?>
    <tr> 
        <td></td>
        <td colspan="2" align="center"><input type="submit" name="feedback" value="Get Feedback"/><br/><br/></td>
    <td>&nbsp;</td>
  </tr></form>
  
</table>
   </div>       </body><br /><br /> </div>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
</center>
</body>
</html>
<?php
}
?>