

<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title>document</title>

<link rel="stylesheet" href="css\style2.css">
<link rel="stylesheet" href="css\bootstrap-grid.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    
<div class="navbar">
            <ul>
                    <li>
                        <a href="index2.php">home</a>
                    </li>
            </ul>
</div>




<center>






<form action="" method="POST">
     <table>
    <tr>
            <td></td>
        <td><input type="hidden" name="e_id" ></td>
    </tr>
    <tr>
            <td>name</td>
        <td><input type="text" name="e_name" required></td>
    </tr>
    <tr>
        <td>Email</td>
       <td> <input type="email" name="e_email" required></td>
    </tr>
    <tr> 
        <td>phone</td>
       <td> <input type="tel" name="e_number" required></td>
    </tr>
    
    <tr>
        <td></td>
       <td> <input type="submit" name="e_add"></td>
    </tr>  
        
   </table>
   </form>

<p><a href="employee.php">Employee</a></p>

   <?php 

 if( isset($_POST['e_add']) ){
        $e_id = $_POST['e_id'];
        $e_name = $_POST['e_name'];
        $e_email = $_POST['e_email'];
        $e_number = $_POST['e_number'];
        
        
 
        $sql = "INSERT INTO employee (e_id, e_name, e_email, e_number) VALUES ( '$e_id', '$e_name', '$e_email', '$e_number')";
        if (mysqli_query($conn, $sql)) {
                echo "<script>alert('new record created successfully');</script>";
        }else{
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }
}

    ?>
    </center>


   </body>
   </html>
   
