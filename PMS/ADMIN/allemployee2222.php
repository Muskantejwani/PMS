<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="assets/bt/css/bootstrap.min.css" rel="stylesheet" ><title>Students | Sk Institute</title>
    <style>
*{
    padding:0;
    margin:0;
  }
  .nav_list{
  
    text-decoration:none ;
    list-style: none ;
  }
 .inactive{
    text-decoration:none !important;
    list-style: none;
  }
  ul li{
   
    text-decoration:none !important;
    list-style: none !important;
  }
  ul li a .inactive{
    text-decoration:none ;
    list-style: none ;
    font-size:22px ;
    color:#fff;
   
    font-family: Arial, Helvetica, sans-serif;
  }
  ul li a .active{
    
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
   
    background-color:#404040;
   
  }


  .bg{
  background-color: rgb(11, 153, 153);
  
  }
</style>
</head>
<body style="background: rgba(174, 233, 230, 0.973);">
<div class="contain">
<div class="row">
            <div class="col-md-3" >
<div class="sidebar side">
    <ul class="nav_list">
        <li>
        <a href=".../Admin.php" title="Dashboard">
            <span class="links_name inactive">Dashboard</span>
        </a>
        </li>
        <li>
        <a href="Clients.php" title="Students">
            <span class="links_name inactive">Add clients</span>
        </a>
        </li>
        <li>
        <a href="Employees.php" title="Fees">
            
            <span class="links_name inactive">Add Employee</span>
        </a>
        </li>
        <li>
        <a href="allemployee.php" title="Expense">
           
            <span class="links_name active">All Employee</span>
        </a>
        </li>
                   
    
        <li>
        <a href="allclients.php" title="Class">
            <span class="links_name inactive">All Client</span>
        </a>
        </li>
        <li>
        <a href="allocate.php" title="Course">
            <span class="links_name inactive">Allocate</span>
        </a>
        </li>
                        
        <li>
        <a href="report.php" title="Reports">
            <span class="links_name inactive">Reports</span>
        </a>
        </li>
        <li>
        <a href="logout.php" title="Reports">
            <span class="links_name inactive">Logout</span>
        </a>
        </li>
    </ul>
   
</div>
</div>
   
    ?>
    <div class="home-text">
        <h1 style="margin-top: 10px;margin-bottom:20px;">Students</h1>
      
       
                <br>
                <div class="table-div" id="table-div">
                 <table class="table" id="myTable" style="margin-left:10%;"> 
                 <input type="text" name="search" id="search"  onkeyup="search_table();  " placeholder="search by employee Name" class="form-control" style="margin-left:10%;">
								<thead >
								<th >Employee ID</th>
								<th >Name</th>
								<th>Email</th>
								<th >phone no</th>
								<th >Password</th>
								<th >Qualification:</th>
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
mysqli_query($conn,"delete from employee where f_id = '".$_GET['f_id']."'");
echo '<script>alert("Session Deleted")</script>';
echo '<script>window.location.href=allemployee.php</script>'; 
      }
      $result = mysqli_query($conn, "select * from employee");
foreach($result as $row){
    ?>
                               <tr>
                               <td ><?php echo $row['f_id'];?> </td>
                               <td ><?php echo  $row['name']?> </td>
								<td ><?php echo $row['email'] ?></td>
								<td ><?php echo  $row['phone']?> </td>
								<td ><?php echo  $row['password']?> </td>
								<td ><?php echo  $row['qualification']?> </td>
               <td class="d-flex"> <a href="edit-employee.php?f_id=<?php echo $row['f_id']?>">
                <button class="btn btn-primary btn1">Edit</button> </a>  
                <a href="allemployee.php?f_id=<?php echo $row['f_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                                        <button class="btn btn-danger btn2">Delete</button>
            </a>
              </td>
</tr>
<?php
}}
?>
      <tbody id="table-data">
    
  </tbody>
</table>
        </div>
    </div>


        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="assets/js/jquery.js"></script>





<script>
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