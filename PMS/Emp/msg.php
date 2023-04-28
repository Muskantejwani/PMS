<?php
session_start();
$user =  $_SESSION['Email'];
//$role = $_SESSION['Role'];

include 'connection.php';


if (isset($_POST['submit']))
{
  $to=$_POST['client']; 
  $msg=$_POST['msg'];
  $filename = $_FILES["file1"]["name"];
 // move_uploaded_file($_FILES["st_fee_slip"]["tmp_name"],".../images".$_FILES["st_fee_slip"]["name"]);
                
 if (!empty($to))
  {
     
   $sql= "INSERT INTO `pmas`.`msg` (`msg_id`, `s_id`, `f_id`, `msg`, `filename`) VALUES ('', '$to', '$user', '$msg' , '$filename');";
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
		
    background-color: rgb(11, 153, 153);
		
               
	}
  .txt{
    text-decoration:none;
    position: relative;
  }
  .bg{
  background-color: rgb(11, 153, 153);
  margin-top:20%;
  }





  .user{
  color:white;
 
margin-left:8%;
}
    </style>
</head>
<body>
<header>
<p color="White" class="user" style=" font-size:26px;">
    <?php
   // print $role;
    echo "<br/>";
    print $user;
    ?>
        </p>
</header>


  <center style="position: relative;   padding:8%; 0" class="bg">
<h1 style="margin-bottom:20px;">Message</h1>
<div class="content">
  <div class="row">

  <form method="post" action="msg.php" class="form-horizontal col-md-6 col-md-offset-3" enctype="multipart/form-data" style="font-size: 16px; position:relative; left:10%;">
 <!-- <div class="form-group" >
    
      <div class="col-sm-7">
<input class="form-control" type="submit" value="Compose" name="compose">
  
    </div>
</div>

<div class="form-group">
    
      <div class="col-sm-7">
<input class="form-control" type="submit" value="Inbox" name="inbox">
  
    </div>
</div>
<div class="form-group">
   
      <div class="col-sm-7">
<input class="form-control" type="submit" value="Sent Msg" name="sent">
  
    </div>
</div>-->
   
        
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
                        <div style="background-color: #fff; width: 60%;  border: black; ">
                        <br/><br/>
                        <font size="5"> To : &nbsp;&nbsp;</font> 
                        <?php
                        include 'connection.php';
                         $sql="select s_id from project where f_id='$user';";
                         $result=  mysqli_query($conn, $sql)
                         ?> <select name="client" style="width: 10em; height: 2em; font-size: 15px;">
                        <option >Clients</option>
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
                        <br/><br/>
                        <font size="5">  From : </font><input id="in" type="text" name="from" value="<?php echo $user;?>" readonly/
                        ><br/><br/>
                        <textarea  name="msg" cols="35" rows="5" placeholder="Message" ></textarea><br/><br/>

           
           <!-- <input class="form-control" type="file" name="st_fee_slip" id="formFile">-->
           <form action="msgupload.php" method="post" enctype="multipart/form-data">
           <input type="file" name="file1" / >
                </form>

                        <input id="bt" type="submit" value="Send" name="submit" style="background-color:rgba(10, 123, 138, 0.945); padding:0 4%; radius:9px; "/>
                        <br/><br/>
                        </div>
                    </td>
                    <td colspan="2">&nbsp;</td>
                </tr>
                 <?php
              //  }
                if (isset($_POST['inbox'])) 
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
                        }
                        //echo "<tr/>";
                        ?> </table> <?php
                         
                    }
                
                ?>
        
    </table>
</form>
 
      
<?php
//}
?>
</table>
<p>
  <?php
}
?>
   

    