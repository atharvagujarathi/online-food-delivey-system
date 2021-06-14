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



$sql = "SELECT * FROM employee";
$reqult = mysqli_query( $conn, $sql);

?>

<table border='3'>

<tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>phn_no</td>
        
        <td>Details</td>
        <td>update</td>
        <td>delete</td>

</tr>

<?php

if( mysqli_num_rows($reqult) > 0 ){

    while( $employee = mysqli_fetch_assoc($reqult) ){
        ?>

            <tr>
                    <td><?php echo $employee['e_id']; ?></td>
                    <td><?php echo $employee['e_name']; ?></td>
                    <td><?php echo $employee['e_email']; ?></td>
                    <td><?php echo $employee['e_number']; ?></td>
                   
                    <td><a href="Details.php?e_id=<?php echo $employee['e_id']; ?>">Details</a></td>
                    <td><a href="update.php?e_id=<?php echo $employee['e_id']; ?>">update</a></td>
                    <td><a href="delete.php?e_id=<?php echo $employee['e_id']; ?>">delete</a></td>
            </tr>

        <?php
    }

}else{
    echo '0 results';
}
?>

</table>

</body>
</html>