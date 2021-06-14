
<?php  
session_start();//session starts here  
  
?>  



  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    
    <title>Login</title>  
    <!-- CSS only -->
    <link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>  



<div class="navigation-container">
<div class="navigation-content">
</div>
</div>

<style>  
    .panel-heading {  
        margin-top: 250px;  



    .qq {

        background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
    }
  
</style>  
  
<body>  

  
<div class="container">  
    <div class="row">  
        <div class="">  
            
                <div class="panel-heading">  
                <center>
                    <h3 class="panel-title" style="color: white;">Sign In</h3>  
                    </center>
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="logi.php">  
                          <center>
                            <div class="aa">
                                <input class="form-control" placeholder="E-mail" style="width: 500px;" name="email" type="email" autofocus>  
                            </div>  
                            <div class="aa">  
                                <input class="form-control" placeholder="Password" style="width: 500px;" name="password_1" type="password">  
                            </div>  
  
                            <div class="aa">  
                                <input class="btn btn-lg btn-success btn-block" style="background-color: #f44336;" type="submit" value="login" name="logi" > 


                                <div class="qq"> 
                                <p style="color: white;">sign up here-><a href="registration.php" style="">register</a> </p.
                           </center>     
                            </div>
                           
                        
                    </form>  
                </div>  
              
        </div>  
    </div>  
</div>  
</body>  
  
</html>  
  
<?php  
  
include("Db_conection.php");  
  
if(isset($_POST['logi']))  
{  
    $email=$_POST['email'];  
    $password_1=$_POST['password_1'];  
  
    $check_user="select * from users WHERE email='$email'AND password_1='$password_1'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
        header('Location: index.php');
        $_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?> 