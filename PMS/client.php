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
  //  ($role=="student") 

?>

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
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px;  margin-right: 25px; padding-top: 10px;">
              <br><a href="STUDENT/project.php" class="txt"><strong
                style="padding-left: 20%;  color: #fff;">Project</strong></a>
            </div>-->
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="Client/msg.php" class="txt"><strong
                style=" padding-left: 20%; color: #fff;">Message</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="Client/onlydownload.php" class="txt"><strong
                style=" padding-left: 15%; color: #fff; ">Download file</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="Client/report.php" class="txt"><strong
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
<?php
}
?>    
    
</body>
</html>