<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title>login</title>
</head>



<center>


<form action="" method="POST">
     <table>
    
    <tr>
            <td>Name</td>
        <td><input type="text" name="name_1" required></td>
    </tr>
    <tr>
        <td>Phone number</td>
       <td> <input type="number" name="phone_number" required></td>
    </tr>
    <tr>
        <td>Email</td>
       <td> <input type="email" name="email_1" required></td>
    </tr>
    <tr>
        <td>Password</td>
       <td> <input type="number" name="password_2" required></td>
    </tr>
    <tr>
        <td>Confirm Password</td>
       <td> <input type="number" name="password_3" required></td>
    </tr>
    
    <tr>
        <td></td>
       <td> <input type="submit" name="e_add"></td>
    </tr>  
        
   </table>
   </form>



   <?php 

if( isset($_POST['e_add']) ){
        $name_1 = $_POST['name_1'];
        $phone_number = $_POST['phone_number'];
        $email_1 = $_POST['email_1'];
        $password_2 = $_POST['password_2'];
        $password_3 = $_POST['password_3'];
        
        
 
        $sql = "INSERT INTO employee1 (name_1, phone_number, email_1, password_2, password_3 ) VALUES ( '$name_1', '$phone_number', '$email_1' , '$password_2', '$password_3')";
        if (mysqli_query($conn, $sql)) {
                echo "<script>alert('new record created successfully');</script>";
        }else{
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }
}

?>


   </body>
   </html>