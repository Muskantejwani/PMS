<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];

include 'connection.php';


if (isset($_POST['sub']))
{
  $msg_id=$_POST['msg_id']; 
  $to=$_POST['client']; 
  $msg=$_POST['msg'];
  $filename = $_FILES["file1"]["name"];
 // move_uploaded_file($_FILES["st_fee_slip"]["tmp_name"],".../images".$_FILES["st_fee_slip"]["name"]);
                
 if (!empty($to))
  {
     
   $sql= "INSERT INTO `pmas`.`msg` (`msg_id`, `s_id`, `f_id`, `msg`, `filename`) VALUES ('', '$to', '$user', '$msg' , '$filename');";
       mysqli_query($conn, $sql);
       $conn->close();
       header('Location:sendmsg.php');  
  }
else
   
{
     echo 'Please fill up all fields';
     header('Location:sendmsg.php');
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
    padding-bottom:17%;
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
margin-left:8%;
}
.toactive{
  font-size:22px ;
  margin-right:50%;
  background-color: rgb(11, 153, 153);
    border-radius:20%;
    color:black;
    box-shadow: 10px 5px 5px LightGray;
}

    </style>
</head>
<body>

<div class="contain">
<div class="row">
            <div class="col" >
<div class="sidebar side">
    <ul class="nav_list">
    <p color="White" class="user" style=" font-size:26px;">
    <?php
   // print $role;
    echo "<br/>";
    print $user;
    ?>
        </p>
    <li>
        <a href="Employee.php" title="Dashboard" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">My projects</span>
        </a>
        </li>


      <!--  <li>
        <a href="msg.php" title="Students">
            <span class="links_name inactive">msg</span>
        </a>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle toactive" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
          style="font-size:20px; color:white; text-decoration:none; list-style:none;">
           Messages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="sendmsg.php" style="text-decoration:none; list-style:none;">send msg</a></li>
            <li><a class="dropdown-item" href="inbox.php" style="text-decoration:none; list-style:none;">inbox</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="sent-messages.php" style="text-decoration:none; list-style:none;">sent Messages</a></li>
          </ul>
        </li>




        <li>
        <a href="meeting.php" title="Fees" style="text-decoration:none; list-style:none;">
            
            <span class="links_name inactive">Meeting</span>
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
        <a href="logout.php" title="Reports" style="margin-bottom:10%; text-decoration:none; list-style:none;">
            <span class="links_name inactive">Logout</span>
        </a>
        </li>
    </ul>
   
</div>
</div>

  
<center style=" class="bg" >

<div class="col mb-5"  style="position:relative;  top: -100%; margin-bottom: 8%; ">

<!--<center style="position: relative;   padding:8%; 0" class="bg">
<h1 style="margin-bottom:20px;">Message</h1>
<div class="content">
  <div class="row"  >-->

  <form method="post" action="sendmsg.php" class="form-horizontal col-md-6 col-md-offset-3" enctype="multipart/form-data" style="margin-bottom:5%; font-size: 16px; position:relative; left:10%;">
        <?php
                
              //  if (isset($_POST['compose']))
              //  {
                    $sql1="select * from project where f_id ='$user' ";
                    $rec=mysqli_query($conn, $sql1);
                    $std=mysqli_fetch_assoc($rec);
                    ?>
                  
                <tr>
                    <td colspan="6" >&nbsp;</td>
                    <td colspan="4" align="center" >
                        <br/><br/>
                        <div style=" background-color: #fff;   border: black; border-radius:2%; box-shadow: 2px 10px 10px 3px rgba(0, 0, 0, 0.2); ">
                        <br/><br/>
                        <font size="5" style="margin-right:7%;"> To : &nbsp;&nbsp;</font> <br>
                        <?php
                        include 'connection.php';

                         $sql="select DISTINCT(s_id) from project where f_id='$user';";
                         $result=  mysqli_query($conn, $sql)
                         ?> <select name="client" style="width: 10em; height: 2em; font-size: 15px;">
                        <option >Clients</option>
                        <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $category= $row['s_id'];
                            ?>
                 <option selected="selected"   value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select> 
                        <br/><br/>
                        <font size="5" style="margin-right:45%; ">  From : </font><br>
                        <input class="inputs1" id="in" type="text" name="from" value="<?php echo $user;?>" readonly/
                        ><br/><br/>
                        <textarea  name="msg" class="inputs" cols="35" rows="5" placeholder="Message" ></textarea><br/><br/>

           
           <!-- <input class="form-control" type="file" name="st_fee_slip" id="formFile">-->
           <form action="sendmsg.php" method="post" enctype="multipart/form-data" style="margin-bottom:1%; margin-top:1%;">
           <input type="file" name="file1" / >

           <input id="bt" type="submit" value="Send" name="sub" style="background-color:rgba(10, 123, 138, 0.945); font-size:16px; padding:2% 8%; radius:9px; color:#fff; "/>
                </form>
                       
                        <br/><br/>
                        </div>
                    </td>
                    <td colspan="2">&nbsp;</td>
                </tr>
                 <?php
               // }
              /*  elseif (isset($_POST['inbox'])) 
                    {
                        ?>  
                        
                            <table width="40%" cellpadding="05" cellspacing="01" border="0" align="center" bgcolor="red"  style="position:relative; right:20%;">  

                    <?php
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<br/>";
                       echo "<tr>";
                    echo "<th>"."FROM"."</th>";
                    echo "<th>" ?> &nbsp; <?php "</th>";
                    echo "<th>"."MESSAGE"."</th>";
                    echo "</tr>";
                        $sql1="select * from cl_msg where f_id ='$user'";
                        $rec=mysqli_query($conn, $sql1);
                        
                        echo "<tr>";
                        while ($std= mysqli_fetch_assoc($rec))
                        {
                           if ($std['from']="supervisor")
                            {
                               ?> <tr bgcolor="beige" align="center"><?php
                            //echo "<tr>";
                            echo "<td>".$std['s_id']."<td/>";
                            echo "<td>".$std['mag']."<td/>"; 
                            ?>  </tr> <?php 
                            //echo "<tr/>";
                            }
                        }
                        
                        ?> </table> <?php
                       
                    }
                    
                    elseif (isset($_POST['sent'])) 
                    {
                        ?>  <table width="40%" cellpadding="0" cellspacing="2" border="0" align="center" bgcolor="red" style="position:relative; right:25%;">  

                    <?php
                    

                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<tr>";
                    echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO "."</th>";
                    echo "<th>" ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php "</th>";
                    echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MESSAGE"."</th>";
                    echo "</>";
                        
                  
                        $sql1="select * from msg where f_id ='$user' ";
                        $rec=mysqli_query($conn, $sql1);

                        echo "<tr>";
                       
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                        
                         

?>

                            <tr bgcolor="beige" align="center"><?php
                            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$std['s_id']."<td/>";
                            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$std['msg']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                           <td/>"; 
                            ?> 
                           
                          </tr> <?php 
                        }*/
                        //echo "<tr/>";
                        ?> 
                     <!-- </table> -->
                      <?php
                         
                    }
                
                ?>
        
   <!-- </table>-->
</form>
                  </div>
                  </center>
      
<?php
//}
?>
</table>
<p>
                </body>
                </html>
   

    