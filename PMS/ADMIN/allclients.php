<?php
include 'connection.php';
//$result = mysqli_query($conn, "select * from employee");
?>
<html>
    <head>
        <title>
            Library Managemenr System
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    height:100vh;
    /*background-color:#242444;*/
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
    padding: 5px 45px !important;
  }
  th {
    padding: 8px 45px !important;
  }
.btn1{
  position:relative;
  right:10px;
}

</style>
      </head>
<body>


<div class="d-flex">
<div class="contain">
<div class="row">
            <div class="col-md-2 col-sm-12">
<div class="sidebar side">
    <ul class="nav_list">
        <li>
        <a href="Admin.php" title="Dashboard" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Dashboard</span>
        </a>
        </li>
        <li>
        <a href="Clients.php" title="Students" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Add clients</span>
        </a>
        </li>
        <li>
        <a href="Employees.php" title="Fees" style="text-decoration:none; list-style:none;">
            
            <span class="links_name inactive">Add Employee</span>
        </a>
        </li>
        <li>
        <a href="allemployee.php" title="Expense" style="text-decoration:none; list-style:none;">
           
            <span class="links_name inactive">All Employee</span>
        </a>
        </li>
                   
    
        <li>
        <a href="allclients.php" title="Class" style="text-decoration:none; list-style:none;">
            <span class="links_name active">All Client</span>
        </a>
        </li>
        <li>
        <a href="allocate.php" title="Course" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Allocate</span>
        </a>
        </li>
                        
        <li>
        <a href="report.php" title="Reports" style="text-decoration:none; list-style:none;">
            <span class="links_name inactive">Reports</span>
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
<!--<div class="row" style="position:relative;  top: -100%; margin-bottom:48%;   margin-left:10%; padding-left:10%; padding-right:5%;">
            <div class="col-xs-6 ">-->
                

<div class="col-md-10 col-sm-12" >
                <br>

                 <table class="table table-hover" id="myTable" style="position:relative; right:1%;"> 
                 <input type="text" name="search" id="search"  onkeyup="search_table();  " placeholder="search by client Name" class="form-control"
                >
								<thead >
								<th>ClientID</th>
								<th>Name</th>
                <th>Email</th>
                <th >phone no</th>
								<th>Password</th>
                <th>Actions</th>
</thead>
<tbody>
<?php

$conn = new mysqli("localhost", "root", "", 'pmas');
$i =1;

 if(mysqli_connect_error())
 {
   die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
 }
 
 else
 {	
if(isset($_GET['del']))
{
mysqli_query($conn,"delete from client where s_id = '".$_GET['s_id']."'");
echo '<script>alert("Session Deleted")</script>';
echo '<script>window.location.href=allclients.php</script>'; 
      }
      $result = mysqli_query($conn, "select * from client");
foreach($result as $row){
    ?>
                               <tr>
                               <td><?php echo $row['s_id'];?> </td>
                               <td><?php echo  $row['name']?> </td>
								<td><?php echo $row['email'] ?></td>
								<td><?php echo  $row['phone']?> </td>
								<td><?php echo  $row['password']?> </td>
               <td class="d-flex pt-3"> <a href="edit-clients.php?s_id=<?php echo $row['s_id']?>">
                <button class="btn btn-primary btn1">Edit</button> </a>  
                <a href="allclients.php?s_id=<?php echo $row['s_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                                        <button class="btn btn-danger btn2">Delete</button>
            </a>
              </td>
</tr>
<?php
}}
?>
</tbody>
</table>
</div>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
    td = tr[i].getElementsByTagName("td")[1];
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











    </body>
    </html>


































