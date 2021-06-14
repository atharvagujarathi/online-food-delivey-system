
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
    <link rel="stylesheet" href="./css/style.css"

    <title></title>
</head>

<body>


<div class="navigation-container">
<div class="navigation-content">
<div class="menu">
<ul>
<li><a href="index.php">home</a></li>
<li><a href="menu.php">MENU</a></li>





<li><a href="ath_index.php">ORDER</a></li>
<li><a href="welcome.php">Account</a></li>

</ul>

</div>
</div>
</div>

    <style>

.aa {

            padding-top: 90px;

}

    </style>

    <div class="container mt-4">
    <div class="aa">
        <h3 style="color: white;">Sign Up Here !</h3>
        </div>
        <form action="" method="POST">
        <div class="row mt-4">
                <div class="col">
                    <input type="hidden" class="form-control" name="id">
                </div>
                
            </div>


            <div class="row mt-4">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" name="first_name" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
                </div>
            </div>
        
            <div class="row mt-4">
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Phone" name="phone" required>
                </div>
            </div>
        
            <div class="row mt-4">
                <div class="col">
                    <input type="password" class="form-control" placeholder="Password" name="password_1" required>
                </div>
                
            </div>
            <div class="form-group mt-4">
                <label for="inputAddress" style="color: white;">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address_1" required>
            </div>
            <div class="form-group">
                <label for="inputAddress2" style="color: white;">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address_2" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity" style="color: white;">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" required>
                </div>
                
                <div class="form-group col-md-2">
                    <label for="inputZip" style="color: white;">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck"  required>
                    <label class="form-check-label" for="gridCheck" style="color: white;">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Sign in</button>
        </form>

    </div>


    <?php  
  
include("Db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password_1 = $_POST['password_1'];
  
    $address_1 = $_POST['address_1'];
    $address_2 = $_POST['address_2'];
    $city = $_POST['city'];   
    $zip = $_POST['zip']; 
  
  
    if($first_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($password_1=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE email='$email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (first_name, last_name, email, phone, password_1, address_1, address_2, city, zip) VALUE ('$first_name', '$last_name', '$email', '$phone', '$password_1', '$address_1', '$address_2', '$city', '$zip')";  
    if(mysqli_query($dbcon, $insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
} 
?>

   



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>