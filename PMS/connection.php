<?php
$db='pmas';

$conn= mysqli_connect("localhost","root","",'pmas');
if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}
mysqli_select_db($conn, $db); 
               
?>