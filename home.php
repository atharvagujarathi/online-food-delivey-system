<?php require 'conn.php'; ?>
<!!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title>customer</title>
</head>
</body>
<center>

<form action="" method="POST">
     <table>
     <tr>
        <td></td>
       <td> <input type="hidden" name="cus_id" required></td>
    </tr>
        <tr>
            <td>name</td>
        <td><input type="text" name="customer" required></td>
    </tr>
    <tr>
        <td>Email</td>
       <td> <input type="email" name="cus_email" required></td>
    </tr>
    <tr>
        <td>phone</td>
       <td> <input type="tel" name="cus_phnno" required></td>
    </tr>
    
    <tr>
        <td></td>
       <td> <input type="submit" name="cus_add"></td>
    </tr>  
        
   </table>
   </form>

   <?php 

if( isset($_POST['cus_add']) ){
        $cus_id = $_POST['cus_id'];
        $customer = $_POST['customer'];
        $cus_email = $_POST['cus_email'];
        $cus_phnno = $_POST['cus_phnno'];
        

        $sql = "INSERT INTO customer (cus_id, customer, cus_email, cus_phnno) VALUES ( '$cus_id', '$customer', '$cus_email', '$cus_phnno' )";
        if (mysqli_query($conn, $sql)) {
                echo "<script>alert('new record created successfully');</script>";
        }else{
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }
}

?>


   </body>
   </html>
