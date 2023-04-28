<?php
session_start();
$user =  $_SESSION['Email'];


include 'connection.php';


if (isset($_POST['submit']))
{
            $to=$_POST['client']; 
           $msg=$_POST['mag'];
           
           
          if (!empty($to))
           {
              
            $sql= "INSERT INTO `pmas`.`cl_msg` (`cl_msg_id`, `s_id`, `f_id`, `mag`) VALUES ('', '$user', '$to', '$msg');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:msg.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:msg.php');
        }       
}

if(empty($_SESSION['Email']))
{
header("location:index.php");
}

else   
{
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
   
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="msg.php" class="txt"><strong
                style=" padding-left: 20%; color: #fff;">Message</strong></a>
            </div>
            <div class="col"
              style="box-shadow:0 2px 20px 0 rgba(110,130,208, 0.18);background-color: rgb(11, 153, 153); height:120px; width:200px; margin-right: 25px; padding-top: 10px;">
              <br><a href="onlydownload.php" class="txt"><strong
                style=" padding-left: 15%; color: #fff; ">Download file</strong></a>
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
<h1 style="margin-bottom:20px;">Message</h1>
<div class="content">
  <div class="row">

  <form method="post" action="msg.php" class="form-horizontal col-md-6 col-md-offset-3" style="font-size: 16px; position:relative; left:10%;">
  <div class="form-group" >
     <!-- <label for="psw" class="col-sm-3 control-label"><b>P_S Date:</b></label>-->
      <div class="col-sm-7">
<input class="form-control" type="submit" value="Compose" name="compose">
  
    </div>
</div>

<div class="form-group">
     <!-- <label for="psw" class="col-sm-3 control-label"><b>P_S Date:</b></label>-->
      <div class="col-sm-7">
<input class="form-control" type="submit" value="Inbox" name="inbox">
  
    </div>
</div>
<div class="form-group">
     <!-- <label for="psw" class="col-sm-3 control-label"><b>P_S Date:</b></label>-->
      <div class="col-sm-7">
<input class="form-control" type="submit" value="Sent Msg" name="sent">
  
    </div>
</div>
   


        
        <?php
                
                if (isset($_POST['compose']))
                {
                    $sql1="select * from project where s_id ='$user' ";
                    $rec=mysqli_query($conn, $sql1);
                    $std=mysqli_fetch_assoc($rec);
                    ?>
                <tr>
                    <td colspan="6" >&nbsp;</td>
                    <td colspan="4" align="center" >
                        <br/><br/>
                        <div style="background-color: #fff; width: 60%;  border: black; ">
                        <br/><br/>
                        <font size="5"> To : &nbsp;&nbsp;</font> 
                        <?php
                        include 'connection.php';
                         $sql="select f_id from project where s_id='$user';";
                         $result=  mysqli_query($conn, $sql)
                         ?> <select name="client" style="width: 10em; height: 2em; font-size: 15px;">
                        <option >Employee</option>
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
                        <br/><br/>
                        <font size="5">  From : </font><input id="in" type="text" name="from" value="<?php echo $user;?>" readonly/
                        ><br/><br/>
                        <textarea  name="mag" cols="35" rows="5" placeholder="Message" ></textarea><br/><br/>
                        <input id="bt" type="submit" value="Send" name="submit" style="background-color:rgba(10, 123, 138, 0.945); padding:0 4%; radius:9px; "/>
                        <br/><br/>
                        </div>
                    </td>
                    <td colspan="2">&nbsp;</td>
                </tr>  
                 <?php
                
            }
            elseif (isset($_POST['inbox'])) 
                {
                    ?>  
                    
                        <table width="40%" cellpadding="0" cellspacing="2" border="0" align="center" bgcolor="red" style="position:relative; right:20%;">  

                <?php
                                        echo "<br/>";
                                        echo "<br/>";
                                        echo "<br/>";
                   echo "<tr>";
                echo "<th>"."FROM"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."MESSAGE"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Files"."</th>";
                echo "</tr>";
                    $sql1="select * from msg where s_id ='$user'";
                    $rec=mysqli_query($conn, $sql1);
                    
                    echo "<tr>";
                    while ($std= mysqli_fetch_assoc($rec))
                    {
                       if ($std['from']="supervisor")
                        {
                           ?> <tr bgcolor="beige" align="center"><?php
                        //echo "<tr>";
                        echo "<td>".$std['f_id']."<td/>";
                        echo "<td>".$std['msg']."<td/>"; ?>
                        <td><?php echo $std['filename']; ?></td>
                  <!--  <td><a href="uploads/<?//php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="download/<?//php echo $row['filename']; ?>" download>Download</td>-->
                    <td><a href="msgdownload.php/<?php echo $std['filename']; ?>" download>Download</td>
                          </tr> <?php 
                        //echo "<tr/>";
                        }
                    }
                    
                    ?> </table><?php
                         
                    }
                    
                    elseif (isset($_POST['sent'])) 
                    {
                        ?>  <table width="40%" cellpadding="0" cellspacing="2" border="0" align="center" bgcolor="red" style="position:relative; right:25%;">  

                    <?php
                    
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<tr>";
                    echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO"."</th>";
                    echo "<th>" ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php "</th>";
                    echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MESSAGE
                 "."</th>";
                    echo "</>";
                        $sql1="select * from cl_msg where s_id ='$user'";
                        $rec=mysqli_query($conn, $sql1);
                        
                        echo "<tr>";
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                           ?> <tr bgcolor="beige" align="center"><?php
                            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ".$std['f_id']."<td/>";
                            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$std['mag']."<td/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                            ?>  </tr> <?php 
                        }
                        //echo "<tr/>";
                        ?> </table> <?php
                         
                    }
                
                ?>
        
    </table>
</form>
</html>

      
<?php
//}
?>
<p>
  <?php
}
?>
   









