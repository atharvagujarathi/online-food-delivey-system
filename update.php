<!!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title>document</title>
</head>
<body>
<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title>document</title>
</head>
<body>

<?php 

$id = $_GET['e_id'];
$sql = "SELECT * FROM employee WHERE e_id='$id'";
$reqult = mysqli_query( $conn, $sql);

?>

<p><a href="employee.php"><-</a></p>

<form action="" method="POST">

<?php

if( mysqli_num_rows($reqult) > 0 ){

    while( $employee = mysqli_fetch_assoc($reqult) ){
        ?>
             
           <table>
        <tr>
            <td>id</td>
        <td><input type="number" name="e_id" value="<?php echo $employee['e_id'];  ?>" required></td>
    </tr>
    <tr>
            <td>name</td>
        <td><input type="text" name="e_name" value="<?php echo $employee['e_name'];  ?>"  required></td>
    </tr>
    <tr>
        <td>Email</td>
       <td> <input type="email" name="e_email" value="<?php echo $employee['e_email'];  ?>"  required></td>
    </tr>
    <tr> 
        <td>phone</td>
       <td> <input type="tel" name="e_number" value="<?php echo $employee['e_number'];  ?>"  required></td>
    </tr>
    <tr>
        <td></td>
       <td> <input type="submit" name="e_update"></td>
    </tr>  
        
   </table>
        <?php
    }

}else{
    echo '0 results';
}
?>

</form>

<?php 
    if( isset($_POST['e_update']) ){
        $e_id = $_POST['e_id'];
        $e_name = $_POST['e_name'];
        $e_email = $_POST['e_email'];
        $e_number = $_POST['e_number'];
        

        $sql = "UPDATE employee SET e_id='$e_id', e_name='$e_name', e_email='$e_email', e_number='$e_number'WHERE e_id='$e_id'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('data updated sucessfully');</script>";
    }else{
        echo "error updating record: " . mysqli_error($conn);
    }
}
?>

</body>
</html>
</body>
</html>