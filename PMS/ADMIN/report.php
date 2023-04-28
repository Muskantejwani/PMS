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
		background-attachment: fixed;
		background-size: 100% 100%;
               
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
<button type="button" class="btn btn-dark hello" style=" margin:1% 2%; padding: 1% 4%;  font-size:18px; border-radius:10px;"><a href="Admin.php" style="color:white; text-decoration:none; list-style:none;">Back</a></button>    
           
    <center style="width:100wv;   padding-left:1%;" class="bg pt-5">
 
<h1 style="margin-bottom:20px;">Report</h1>
<input type="text" name="search" id="search"  onkeyup="search_table();  " placeholder="search by meeting id" class="form-control mb-4" style="width:30%;">

<div class="content">
  <div class="row">
  
    <table class="table" id="myTable" border=" 0" align="center" bgcolor="black" style="font-size:16px;">
            <?php
                echo "<tr>";
             echo "<th>"."Meeting ID"."</th>";
                echo "<th>" ?>   <?php "</th>";
                echo "<th>"."Employee ID"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."Client ID"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Project Name"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submittion_Date"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;Time"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description"."</th>";
                echo "<th>" ?>  <?php "</th>";
                echo "<th>"."Action"."</th>";
                echo "</tr>";
                include 'connection.php';
                
                if(isset($_GET['del']))
                {
                mysqli_query($conn,"delete from meeting where  meeting_id= '".$_GET['meeting_id']."'");
                echo '<script>alert("Session Deleted")</script>';
                echo '<script>window.location.href=report.php</script>'; 
                      }

                        $sql1="select * from meeting ";
                        $rec=mysqli_query($conn, $sql1);

                        while ($std=mysqli_fetch_assoc($rec))
                      
                        {
                           ?> <tr bgcolor="beige" align="center" style="color:rgba(10, 123, 138, 0.945);">
                           
                            <?php
                            echo "<td>".$std['meeting_id']."<td/>";
                            echo "<td>".$std['f_id']."<td/>"; 
                            echo "<td>".$std['s_id']."<td/>"; 
                            echo "<td>".$std['project_name']."<td/>"; 
                            echo "<td>".$std['date']."<td/>"; 
                            echo "<td>".$std['submission_date']."<td/>"; 
                            echo "<td>".$std['time']."<td/>"; 
                            echo "<td>".$std['desc']."<td/>"; ?>
                            <td> 
                            <a href="report.php?meeting_id=<?php echo $std['meeting_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                                                    <button class="btn btn-danger btn2">Delete</button>
                        </a>
                          </td>
                           </tr> <?php 
                        }
            ?>
       </table>
                      </div>
                      </div>
                      </center>
 <?php
 
}

?>
 <?php

?>
      
<?php

?>
</table>
<p>
  <?php

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