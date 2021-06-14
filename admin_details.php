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

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$reqult = mysqli_query( $conn, $sql);

?>



<ul>

<?php

if( mysqli_num_rows($reqult) > 0 ){

    while( $employee = mysqli_fetch_assoc($reqult) ){
        ?>
            <li><strong>ID</strong> <?php echo $employee['id'];  ?></li>
           <li><strong>First Name</strong> <?php echo $employee['first_name'];  ?></li>
           <li><strong>Last Name</strong> <?php echo $employee['last_name'];  ?></li>
           <li><strong>Email</strong> <?php echo $employee['email'];  ?></li> 
           <li><strong>Phone</strong> <?php echo $employee['phone'];  ?></li> 
           <li><strong>First Address</strong> <?php echo $employee['address_1'];  ?></li> 
           <li><strong>Second Address</strong> <?php echo $employee['address_2'];  ?></li> 
           <li><strong>City</strong> <?php echo $employee['city'];  ?></li> 
           <li><strong>Zip</strong> <?php echo $employee['zip'];  ?></li> 

        <?php
    }

}else{
    echo '0 results';
}
?>

</ul>

</body>
</html>