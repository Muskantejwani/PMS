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
		background: rgb(11, 153, 153);
		
		background-size: 100% 100%;
    overflow-x:hidden;           
	}
  .txt{
    text-decoration:none;
    position: relative;
  }
  .bg{
  background-color: rgb(11, 153, 153);
  
  }
 
    </style>
</head>
<body>
<header>
<table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr style="background:rgb(11, 153, 153);">
  <th><button type="button" class="btn btn-dark hello" style="margin: 1% 2%; padding: 2% 6%;  font-size:18px; border-radius:10px;"><a href="client-inbox.php" style="color:white; text-decoration:none; list-style:none;">Back</a></button></th>
    <th width="74" scope="col">&nbsp;</th>
   <th width="646" scope="col"><font size="8" color="White"></font></th>
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
<body>
<center style="width:100wv; position: relative;  padding-left:1%;" class="bg center1">
<h1 style="margin-bottom:20px;">Report</h1>
<input type="text" name="search" id="search"  onkeyup="search_table();  " placeholder="search by employee Name" class="form-control mb-4" style="width:30%;">

<div class="content">
  <div class="row">

    <table class="table table-hover" id="myTable" border=" 0" align="center" bgcolor="black" style="font-size:16px;">
            <?php
                echo "<tr>";
               
                echo "<th>"."Meeting ID"."</th>";
                echo "<th>" ?>   <?php "</th>";
                echo "<th>"."Employee ID"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."Client ID"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."Project Name"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."Submittion_Date"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description"."</th>";
                echo "</tr>";
                include 'connection.php';
                
                       // $sql1="select * from meeting inner join student on student.s_id = meeting.s_id";
                        $sql1="select * from meeting where  meeting.s_id = $user;";
                        $rec=mysqli_query($conn, $sql1);
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                           ?> <tr bgcolor="beige" align="center" style="color:rgba(10, 123, 138, 0.945);">
                           
                            <?php
                            echo "<td>".$std['meeting_id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>";
                            echo "<td>".$std['f_id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>"; 
                            echo "<td>".$std['s_id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>"; 
                            echo "<td>".$std['project_name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>"; 
                            echo "<td>".$std['date']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>"; 
                            echo "<td>".$std['submission_date']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td/>"; 
                            echo "<td>".$std['time']."<td/>"; 
                            echo "<td>".$std['desc']."<td/>"; 
                            ?>  </tr> <?php 
                        }
            ?>
       </table>
                      </div>
                      </div>
                      </center>
 <?php
 
}
//elseif($role=="Faculty")    
//{
 //   header('Location:../Admin.php'); 
?>
 <?php
//}
//else   
//{
  //  header('Location:../Admin.php'); 
?>
      
<?php
//}
?>
</table>
<p>
  <?php
//}
?>
    </body>
   <script type="text/javascript">

function search_table() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

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