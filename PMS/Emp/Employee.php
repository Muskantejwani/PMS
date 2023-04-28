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
    padding-top:17%;
    padding-left:5%;
    text-decoration:none !important;
    list-style: none !important;
  }
  ul li a .inactive{
    text-decoration:none ;
    list-style: none ;
    font-size:20px ;
    color:#fff;
    padding:8% 10%;
    font-family: Arial, Helvetica, sans-serif;
  }
  ul li a .active{
    padding:8% 10%;
  }
.active{
  font-size:20px ;
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
		
    background-color: rgb(11, 153, 153);

    overflow:hidden;
               
	}
  .txt{
    text-decoration:none;

  }
  .side{
    position:relative;
    left:0;
    top:0;
    height:100vh;
    background-color:#404040;
   
  }
thead th{
  padding-left:20%;
}

  .bg{
  background-color: rgb(11, 153, 153);
  margin-top:20%;
  }
  td {
    padding: 5px 8em !important;
  }
  th {
    padding: 8px 8em !important;
  }
.btn1{
  position:relative;
  right:10px;
}
.user{
  color:white;
 position:relative !important;
 left:99% !important;
 margin-left:10%;
}

</style>


<style>
  /*
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
		
    background-color: rgb(11, 153, 153);
	
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
  
    background-color:#404040;
   
  }
  .bg{
  background-color: rgb(11, 153, 153);
  margin-top:20%;
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
  th{
    padding-left:10% !important;
 }
 td{
  margin:10em 10em;
 }
  .user{
  color:white;
 position:relative !important;
 left:99% !important;
margin-left:8%;
}
table{
 position:relative;
 
 right:2%;
}*/

    </style>





</head>



<body>
<!--<div class="d-flex">
<div class="contain">
<div class="row">
            <div class="col-md-3 col-sm-12" style="overflow:hidden;">
<div class="sidebar side">
    <ul class="nav_list">-->

    
<!--<div class="contain">
<div class="row">
            <div class="col" >
<div class="sidebar side">
    <ul class="nav_list">-->


    <div class="d-flex">
<div class="contain">
<div class="row">
            <div class="col-md-3 col-sm-12" >
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
            <span class="links_name active">My Projects</span>
        </a>
        </li>


      <!--  <li>
        <a href="msg.php" title="Students">
            <span class="links_name inactive">msg</span>
        </a>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
          style="font-size:20px; color:white">
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
        <a href="logout.php" title="Reports" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Logout</span>
        </a>
        </li>
    </ul>
   
</div>
</div>


<div class="col-md-9 col-sm-12">
    
<!--<center style=" class="bg">

<div class="col"  style="position:relative;  top: -100%; margin-bottom:15%;  margin-left:13%;  margin-right:13%;">-->
                <br>
               
                 <table class="table table-hover" id="myTable" style="font-size:1em;  margin-left:2%;  margin-right:2%; "> 
                 <input type="text" name="search" id="search"  onkeyup="search_table();  " placeholder="search by client Name" class=" form-control"
                style="width:80%; margin-left:2%; margin-bottom:2%; margin-top:15%">
            <?php
                echo "<tr>";
               
                echo "<th>"."project ID"."</th>";
                echo "<th>" ?>   <?php "</th>";
                echo "<th>"."Employee ID"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."Client ID"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "</tr>";
                include 'connection.php';
                      //  $sql1="select * from meeting ";
                      $sql1="select * from project where  project.f_id = $user;";
                        $rec=mysqli_query($conn, $sql1);
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                           ?> <tr bgcolor="beige" align="center" style="color:rgba(10, 123, 138, 0.945);">
                           
                            <?php
                            echo "<td>".$std['p_id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>";
                            echo "<td>".$std['f_id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>"; 
                            echo "<td>".$std['s_id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>"; 
                            
                            ?>  </tr> <?php 
                        }
            ?>
    
</tbody>
</table>
</div>
</div>
                     <!-- </center>-->
 <?php
 
}

?>
 <?php







/*
<style>
	body
	{
		background-image:url(home.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
        a link{
            text-decoration: none;
        }
</style>
<title>PMS</title>
</head>
<div>
<body>
    <table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
    <th width="74" scope="col">&nbsp;</th>
    <th width="164" scope="col"><img src="images/logo1.png" alt="LOGO"></th>
    <th width="646" scope="col"><font size="8" color="White">PMS</font></th>
    <th width="140" scope="col"><font color="White" size="5">
    <?php
    //print $role;
   // echo "<br/>";
   // print $user;
    ?>
        </font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
      <tr bgcolor="#99CCFF">
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
      <th width="15%" scope="col"><a href="FACULTY/skill.php">Skill Matrix</a></th>
      <th width="14%" scope="col"><a href="FACULTY/view.php">View</a></th>
      <th width="15%" scope="col"><a href="FACULTY/mail.php">Mail</a></th>
      <th width="13%" scope="col"><a href="FACULTY/meeting.php">Meeting</a></th>
      <th width="15%" scope="col"><a href="FACULTY/#">Reprots</a></th>
    <th width="15%" scope="col"><a href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
       <tr>
        <td colspan="10"><img src="home.png" height="50%" width="100%"></img></td>
    </tr>
</table>
 <?php
}*/



                        ?>  
                         <!-- <center  class="bg">
<div class="col"  style="position:relative;  top: -100%; margin-bottom:20%;  margin-left:40%; margin-right:2%;">
           
				<div class="row mx-auto mid">
      
                
            
                            <table width="40%" cellpadding="05" cellspacing="01" border="0" align="center" bgcolor="red"  style="position:relative; right:20%;">  

                    <?php
                               /*             echo "<br/>";
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
                        }*/
                      
                        ?> </table> 
                    
                      </div>
                      </div>-->
                      </center>

</body>
<script type="text/javascript">
   
  

function search_table() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}


</script>
</html>