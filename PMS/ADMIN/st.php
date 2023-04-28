<?php
    include 'connection.php';
        if(isset($_POST['add']))
        {
           $id=$_POST['s_id']; 
           $name=$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
           $pass=$_POST['password']; 
         //  $year=$_POST['styear'];
         //  $stream=$_POST['stream'];
           
           
          if (!empty($id)|| !empty($name)||!empty($email)||!empty($phone)||!empty($pass))
           {
              
            $sql= "INSERT INTO `pmas`.`client` (`s_id`, `name`, `email`, `phone`, `password`) VALUES ('$id', '$name', '$email', '$phone', '$pass');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:Clients.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:Clients.php');
        }       
                  
        }
 
?>
    
