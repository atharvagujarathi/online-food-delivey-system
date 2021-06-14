<?php 


require 'conn.php'; 
$id = $_GET['e_id'];
$sql = "DELETE FROM employee WHERE e_id='$id'";

        if (mysqli_query($conn, $sql)) {
                header('Location: employee.php');
        }else{
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }


?>