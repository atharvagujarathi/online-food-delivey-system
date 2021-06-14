<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title></title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="navigation-container">
<div class="navigation-content">
</div>
</div>


<style>

.aa {

margin-left: 200px;
margin-top:  100px;

}

.ab {

    margin-left: 200px;
margin-top:  150px;

}

</style>



<?php 



$sql = "SELECT * FROM users";
$reqult = mysqli_query( $conn, $sql);

?>
<div class="ab">
<h1 style="color: white; text-align: left;">Logins</h1>
</div>
<table border='3'>
<div class="aa">
<tr>
        <td style="color: white; width:40px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Id</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">First Name</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Last Name</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Email</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Phone</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Address-1</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Address-2</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">City</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Zip</td>
        
        
</tr>
</div>

<?php

if( mysqli_num_rows($reqult) > 0 ){

    while( $users = mysqli_fetch_assoc($reqult) ){
        ?>

            <tr>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['id']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['first_name']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['last_name']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['email']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['phone']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['address_1']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['address_2']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['city']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $users['zip']; ?></td>
                    
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