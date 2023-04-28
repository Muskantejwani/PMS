<?php
include 'connection.php';

if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];

    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf','txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(msg_id) as id from msg';
            $result = mysqli_query($conn, $sql);
           // if (count($result) > 0)
            if ($result)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO msg (filename) VALUES('$filename')";
            mysqli_query($conn, $sql);
            header("Location: index222.php?st=success");
        }
        else
        {
            header("Location: index222.php?st=error");
        }
    }
    else
        header("Location: index222.php");
}
?>