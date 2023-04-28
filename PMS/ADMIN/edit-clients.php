<?php
session_start();
include('connection.php');
/*if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{*/
$sid=intval($_GET['s_id']);
//$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['add']))
{
//$bookNo=$_POST['bookNo'];
$sid=$_POST['s_id'];
$sname=$_POST['name'];
$semail=$_POST['email'];
$sphone=$_POST['phone'];
$spass=$_POST['password'];


$ret=mysqli_query($conn,"update client set s_id='$sid',name='$sname',email='$semail',phone='$sphone',password='$spass' where s_id='$sid'");
if($ret)
{
echo '<script>alert("Data Updated Successfully !!")</script>';
echo '<script>window.location.href=allclients.php</script>';
}else{
  echo '<script>alert("Error : Data not Updated!!")</script>';
echo '<script>window.location.href=allclients.php</script>';
}
}
?>





                        <!DOCTYPE html>
<html>
    <head>
        <title>
            Library Managemenr System
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
 label{
  display:flex;
  font-size:20px;
 }
    </style>

    </head>
    <body class="bg">

<div class="contain">
<div class="row">
            <div class="col" >
<div class="sidebar side">
    <ul class="nav_list">
        <li>
        <a href="Admin.php" title="Dashboard">
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
           
            <span class="links_name inactive">All Employee</span>
        </a>
        </li>
                   
    
        <li>
        <a href="allclients.php" title="Class">
            <span class="links_name active">All Client</span>
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
<center  class="bg">
<div class="col"  style="position:relative;  top: -100%; margin-bottom:9%;  margin-left:40%;">
           
				<div class="row mx-auto mid">
					<div class="col-12 col-md-6 ">
                <br><center><h2></h2></center>

<!--<font color="green" align="center"><?//php echo htmlentities($_SESSION['msg']);?><?//php echo htmlentities($_SESSION['msg']="");?></font>-->


                       <form name="dept" method="post">
<?php
$sql=mysqli_query($conn,"select * from client where s_id='$sid'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
   <!--<p><b>Last Updated at</b> :<?//php echo htmlentities($row['updationDate']);?></p>-->
  <!-- <div class="form-group">
    <label for="coursecode">Book No </label>
    <input type="text" class="form-control" id="coursecode" name="bookNo" placeholder="Book No" value="<?//php echo htmlentities($row['bookNo']);?>" required />
  </div>-->

 <div class="form-group">
    <label for="coursename">Client id </label>
    <input type="text" class="form-control" id="coursename" name="s_id" placeholder="Client id" value="<?php echo htmlentities($row['s_id']);?>" required />
  </div>

<div class="form-group">
    <label for="courseunit">Client Name </label>
    <input type="text" class="form-control" id="courseunit" name="name" placeholder="Client Name" value="<?php echo htmlentities($row['name']);?>" required />
  </div>  

<div class="form-group">
    <label for="seatlimit">Email </label>
    <input type="text" class="form-control" id="seatlimit" name="email" placeholder="Email" value="<?php echo htmlentities($row['email']);?>" required />
  </div>  

  <div class="form-group">
    <label for="seatlimit">Phone no</label>
    <input type="text" class="form-control" id="seatlimit" name="phone" placeholder="phone no" value="<?php echo htmlentities($row['phone']);?>" required />
  </div>  

  <div class="form-group">
    <label for="seatlimit">Password</label>
    <input type="text" class="form-control" id="seatlimit" name="password" placeholder="Password" value="<?php echo htmlentities($row['password']);?>" required />
  </div>  


<?php } ?>
<button type="submit" name="add" class="btn btn-primary" style="margin-top:10%;"> Update</button>
 
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>
                
            </div>





        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
 
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.js"></script>
</body>
<footer class="page-footer font-small unique-color-light" style="padding-left: 0px;background-color: #500f07; color:#000">
  <p class= "text-center  p-3" style="background:#440e08; padding: 20px 0;">© 2022 BNBWU. All rights reserved></p>>

</footer>
</html>
<?php  ?>
