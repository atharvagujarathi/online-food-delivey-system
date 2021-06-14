<?php require 'conn.php';  ?>
<!!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title>document</title>
</head>
</body>
<center>

<form action="" method="POST">
<table>
    <tr>
        <td>id</td>
        <td><input type="number" name="cus_id" required></td>
    </tr>
    <tr>
        <td>name</td>
       <td> <input type="text" name="cus_name" required></td>
    </tr>
    
    <tr>
        <td>email_id</td>
       <td> <input type="email" name="cus_email" required></td>
    </tr>
    <tr>
        <td>phn_no</td>
       <td> <input type="tel" name="cus_phnno"></td>
    </tr>  
        
    <tr>
        <td></td>
       <td><input type="submit" name="cus_add"><td>
    </tr>    
</table>

</form>
<?php
    if( isset($_POST['e_add']) ){
        $cus_id = $_POST['cus_id'];
        $cus_name = $_POST['cus_name'];
        $cus_email = $_POST['cus_email'];
        $cus_phnno = $_POST['cus_phnno'];
        

        $sql = "INSERT INTO customer (cus_id, cus_name, cus_email, cus_phnno) VALUES ( '$cus_id', '$cus_name', '$cus_email', '$cus_phnno' )";
        if (mysqli_query($conn, $sql)) {
                echo "<script>alert('new record created successfully');</script>";
        }else{
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>   

</body>
</html>     


