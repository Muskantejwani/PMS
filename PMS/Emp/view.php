<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];

include 'connection.php';
//$sql="select s_id from project where f_id='$user';"; 
//$record=mysqli_query($conn, $sql);

/*
if (isset($_POST['ppf']))
{
    $file=$_POST['file_name'];
    if(!empty($file)){
    header('Content-type:doc/pdf');
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('ppf/'.$file);
    exit();}
 else {
    echo 'no file';
    }
}
elseif (isset($_POST['psf']))
{
    $file=$_POST['file_name1'];
    if(!empty($file)){
    header('Content-type:doc/pdf');
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('psf/'.$file);
    exit();}
 else {
    
}
}
                    elseif (isset($_POST['assess']))
                {
                $feed=$_POST['assessmen'];
                $prid=$_POST['pid'];
                if(!empty($feed))
                {
                $sql2= "UPDATE `pmas`.`project` SET `remark` = '$feed' WHERE `project`.`p_id` = '$prid';";
                mysqli_query($conn, $sql2);
                $conn->close();
                header('Location:view.php');
                }
                else 
                {
                      header('Location:view.php');
                      
                }
                }
                elseif (isset($_POST['rem']))
                {
                $re=$_POST['remainder'];
                $stuid=$_POST['stid'];
                //$stuid;
                $sql3= "INSERT INTO `pmas`.`mail` (`mail_id`, `s_id`, `f_id`, `msg`) VALUES ('', '$stuid', '$user', '$re');";
                mysqli_query($conn, $sql3);
                $conn->close();
                header('Location:view.php');
                } */
                
                
                
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
            <!--<div class="col" style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18); background-color:  #fff; width:200px; height:120px; margin-right: 25px; 
    padding-top: 10px;"><br><a href="skill.php" class="txt"><strong
                style=" padding-left: 40px; color:rgb(11, 153, 153);">Skills</strong></a></div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
             <br><a href="view.php" class="txt"><strong
                style=" padding-left: 30px;  color: #fff;">View</strong></a>
            </div>-->
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px;  margin-right: 25px; padding-top: 10px;">
              <br><a href="mail.php" class="txt"><strong
                style="padding-left: 20%;;  color: #fff;">Message</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="meeting.php" class="txt"><strong
                style=" padding-left: 30%; color: #fff;">Meetings</strong></a>
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



  <center style="position: relative; top:100px; padding:8%; 0" class="bg">
<h1 style="margin-bottom:20px;">feedback</h1>
    <form method="post" action="view.php">
        <br/><br/>
        <div style="background-color: beige; margin-left: 33%; alignment-adjust: central; width: 35%">
    <table align="center">
        <tr>
            <td><h4>&nbsp;</h4></td>
            <td align="center">
                
    <?php
            include 'connection.php';
             $sql="select s_id from project where f_id='$user';";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="student" style="width: 10em; height: 2em; font-size: 15px;">
                 <option selected="selected">Supervisory</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option  value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select>   &nbsp;&nbsp;&nbsp;
            <input style="width: 6em;  height: 2em; font-size: 15px;" type="submit" name="asses" value="Feedback"/>
            </td>
        </tr>
    </table>  
        </div>
         </form>
         
    <form method="post" action="view.php">
        <div style="background-color:beige;  alignment-adjust: central; width:90%; margin-left:5%; margin-top:75px;">
    <table width="100%" cellpadding="5" cellspacing="5" border="1" align="center">
    <?php
            if (isset($_POST['asses']))
            {   
                $stuid=$_POST['student'];          
                echo "<tr>";?>
                
                <th>Student ID</th>
                <th>Project Proposal</th>
                <th>Project Specification</th>
                <th>Assessment</th>
                <th>Quick Mail</th>
                
                <?php
                echo "</tr>";
                echo "<tr>";
                
                echo "<td>"?> <input type="text" name="stid" readonly value="<?php echo $stuid;?>"/> <?php "</td>";
                
                $sql1="select * from project where s_id ='$stuid' ";
                $rec=mysqli_query($conn, $sql1);
                
                while ($std=mysqli_fetch_assoc($rec))
                {
                    echo "<td>"?> <input name="file_name" value="<?php echo $std["ppf"]?>" type="text" readonly /><br/><br/>
                    <input type="submit" value="Download" name="ppf"/> <input type="hidden" name="pid" value="<?php echo $std['p_id']?>"/> <?php "</td>";
                    
                echo "<td>"?><input name="file_name1" value="<?php echo $std["psf"]?>" type="text" readonly /><br/><br/>
                    <input type="submit" value="Download" name="psf"/> <?php "</td>";
                    
                    echo "<td>"?><textarea  name="assessmen" cols="30" rows="5" ></textarea><br/><br/>
                    <input type="submit" value="Submit" name="assess"/> <?php "</td>";
                  
                    echo "<td>"?><textarea name="remainder"  cols="30" rows="5" ></textarea><br/><br/>
                    <input type="submit" value="Submit" name="rem"/> <?php "</td>";
                    
                    echo "</tr>";
                
                   
            }
            }
    ?>
    </table>
        </div>
    </form>
</p>-->
</div>
</body></center>
</html>
<?php
}
?>
    
