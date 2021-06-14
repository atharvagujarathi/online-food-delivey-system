<?php require 'conn.php'; ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="bc.css">

    <title></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <h2></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <center>
            <ul class="navbar-nav mr-auto">
                <li >
                    <a class="nav-link" href="./home.html">Home<span class="sr-only">(current)</span></a>
                </li>
                <li >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop For
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./shop_for_gents.html">Men</a>
                        <a class="dropdown-item" href="./shop_for_women.html">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./account.html">Account</a>
                </li>
               
            </ul>
        
           
               
               
            
    <div class="container mt-4">
        <h3>Sign Up Here !</h3>
        <form action="" method="POST">
            <table>
            <div class="aa">
            <tr>
            <td>first-NAme</td>
            <td><input type="text"  name="first_name" required></td>
            </tr>
            </div>
            <tr>
            <td>last-NAme</td>
            <td> <input type="text"  name="last_name" required></td>
            </tr>

            <tr>
            <td>email</td>
            <td><input type="email"  name="email" required></td>
            </tr>

            <tr>
            <td>phone</td>
            <td><input type="number"  name="phone" required></td>
            </tr>

            <tr>
            <td>pass</td>
            <td><input type="password"  name="password_1" required></td>
            </tr>

            <tr>
            <td>con pass</td>
            <td><input type="password"  name="con_password" required></td>
            </tr>

            <tr>
            <td>add</td>
            <td><input type="text"  name="address_1" required></td>
            </tr>

            <tr>
            <td>add2</td>
            <td><input type="text"  name="address_2" required></td>
            </tr>

            <tr>
            <td>city</td>
            <td><input type="text"  name="city" required></td>
            </tr>

            <tr>
            <td>zip</td>
            <td><input type="text"  name="zip" required></td>
            </tr>

            <tr>
            <td></td>
            <td><input type="submit"  name="sign" required></td>
            </tr>
        </table>
        </form>
            
               
        <?php 

if( isset($_POST['sign']) ){
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $password_1 = $_POST['password_1'];
       $con_password = $_POST['con_password'];
       $address_1 = $_POST['address_1'];
       $address_2 = $_POST['address_2'];
       $city = $_POST['city'];
       
       $zip = $_POST['zip'];
       
       
       

       $sql = "INSERT INTO login_page (first_name, last_name, email, phone, password_1, con_password, address_1, address_2, city, zip) VALUES ( '$first_name', '$last_name', '$email', '$phone', '$password_1', '$con_password', '$address_1', '$address_2', '$city', '$zip')";
       if (mysqli_query($conn, $sql)) {
               echo "<script>alert('new record created successfully');</script>";
       }else{
           echo "error: " . $sql . "<br>" . mysqli_error($conn);
       }
}

   ?>


    


    
</body>

</html>




    

