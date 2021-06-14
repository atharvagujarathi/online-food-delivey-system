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

<p><a href="employee.php">Back to employee</a></p>

<ul>

<?php

if( mysqli_num_rows($reqult) > 0 ){

    while( $employee = mysqli_fetch_assoc($reqult) ){
        ?>
            <li><strong>ID</strong> <?php echo $employee['e_id'];  ?></li>
           <li><strong>Name</strong> <?php echo $employee['e_name'];  ?></li>
           <li><strong>Email_id</strong> <?php echo $employee['e_email'];  ?></li>
           <li><strong>Phone_number</strong> <?php echo $employee['e_number'];  ?></li> 

        <?php
    }

}else{
    echo '0 results';
}
?>

</ul>

</body>
</html>