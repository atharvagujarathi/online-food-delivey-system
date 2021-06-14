<?php 

$num1 = 1;
$num2 = 2;
$result = $num1 + $num2;
echo $result;

?>
<br>
<?php 


$text1 = 'atharva';
$text2 = 'gujarathi';
echo $text1 . $text2;


?>
<br>
<?php 


$text = "hello world";
$output_data = "$text is a string";
echo $output_data;
?>
<br>
<?php 


$num1 = 2000.0;
echo var_dump(is_float($num1));

?>
<br>
<?php 

$first = "first text";
$second = "second text";
$third = "$first";
echo $third;
echo strlen($third);


?>
<br>
<?php 

$string = "hello world";
$number = 25;
$float = 3.1456458456435;
$boolean = true;
$array = array('hello', 'world', 25, $string);
echo '<pre>';
echo var_dump($string);
echo var_dump($number);
echo var_dump($float);
echo var_dump($boolean);
echo var_dump($array);
echo '</pre>'
?>
<br>
<?php 

$server_name = 'localhost';
$user_name = 'root';
$pass_word = '';
$db = 'demo';

$conn = mysqli_connect($server_name, $user_name, $pass_word, $db);

if( !$conn ){
     die( 'unable to connect' );
}else{
echo 'connected';
}



?>
<br>
<?php 



?>
<br>



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
<?php 

if( isset($_POST['e_add']) ){
        $e_name = $_POST['e_name'];
        $e_email = $_POST['e_email'];
        $e_number = $_POST['e_number'];
        

        $sql = "INSERT INTO employee (e_name, e_email, e_number) VALUES ( '$e_name', '$e_email', '$e_number' )";
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




<?php 

$conn = mysqli_connect( 'localhost', 'root', '', 'demo');

if( !conn ){
    die( 'unable to connect');
}

?>







<?php require 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width-device-width, initial-scale.0">
        <title>login</title>
</head>
<center>
    <form action="#" method="POST">
        <table>
            <tr>
                <td>username<td>
                <input type="text" name="r_username" required></td>
            </tr>
            <tr>
                <td>password<td>
                <input type="text" name="r_password" required></td>
            </tr>   
            <tr>
                <td><td>
                <input type="submit" name="r_add" required></td>
            </tr>   
        </table>  
    </form>


    <?php
    if( isset($_POST['r_add'])){
        $r_username = $_POST['r_username'];
        $r_password = $_POST['r_password'];
    }

    $sql = "INSERT INTO register (r_username, r_password) VALUES ('$r_username', '$r_password')";
    if (mysqli_query($server, $sql)){
        echo  "<script>alert('new record created successfully');</script>";
    }else{
        echo "error: " . $sql . "<br>" . mysqli_error($server);
    }


?>


</body>
</html>
    












<?php require 'server.php'; ?>
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
                <td>username<td>
                <input type="text" name="user" required></td>
            </tr>
            <tr>
                <td>password<td>
                <input type="text" name="pass" required></td>
            </tr>   
            <tr>
                <td><td>
                <input type="submit" name="e_add" required></td>
            </tr>   
        </table>  
    </form>


    <?php

    
    if( isset($_POST['e_add']) ){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    }

    $sql = "INSERT INTO register (user, pass) VALUE ('$user', '$pass')";
    if (mysqli_query($server, $sql)){
        echo  "<script>alert('new record created successfully');</script>";
    }else{
        echo "error: " . $sql . "<br>" . mysqli_error($server);
    }


?>


</body>
</html>
    







<?php

    
if( isset($_POST['e_add']) ){
    $a_username = $_POST['a_username'];
    $a_password = $_POST['a_password'];
}

$sql = "INSERT INTO register (a_username, a_password) VALUE ('$a_username', '$a_password')";
if (mysqli_query($server, $sql)){
    echo  "<script>alert('new record created successfully');</script>";
}else{
    echo "error: " . $sql . "<br>" . mysqli_error($server);
}


?>












<div class="recipe__section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg1.jpeg">
                            <div class="image__wrapper-text">
                                <h2>mcbc</h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg2.jpeg">
                            <div class="image__wrapper-text">
                                <h2>Pepperoni Pizza</h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg3.jpeg">
                            <div class="image__wrapper-text">
                                <h2>Margherita Pizza</h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="bc__section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg4.jpeg">                                                
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                                
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg5.jpeg">
                            
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg6.jpeg">
                            
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mc__section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg4.jpeg">
                           
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg5.jpeg">
                            
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg6.jpeg">
                            
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="yz__sction">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg7.jpeg">
                            
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg8.jpeg">
                            
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image__wrapper">
                            <img src="akg9.jpeg">
                            
                            <div class="image__wrapper-text">
                                <h2></h2>
                                <a href="">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="about__section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="image_background">
                            <img src="image2.jpg" class="image__responsive">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h3>Pizza Delivery</h3>
                        <p>the user needs to have GUI access to the various menu items and be able to quickly enter the desired orders .This menu needs to have various sizes of pizzas,the typical types of toppings, various crust options, and beverages. The customer should be able to order things like a medium, thin crust pizza , with pepperoni and extra cheesse. </p>
                    </div>
                </div>
            </div>
        </div>











        <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>