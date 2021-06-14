
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
                    <h3 class="panel-title" style="color: white;">Admin Login</h3>  
                    </center>
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="#">  
                          <center>
                            <div class="aa">
                                <input class="form-control" placeholder="username" style="width: 500px;" name="admin_name" type="text" autofocus>  
                            </div>  
                            <div class="aa">  
                                <input class="form-control" placeholder="Password" style="width: 500px;" name="admin_pass" type="password">  
                            </div>  
  
                            <div class="aa">  
                                <input class="btn btn-lg btn-success btn-block" style="background-color: #f44336;" type="submit" value="login" name="log" > 


                                
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
  
include("conn.php");  
  
if(isset($_POST['log']))  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $check_user="select * from admin WHERE admin_name='$admin_name'AND admin_pass='$admin_pass'";  
  
    $run=mysqli_query($conn,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
         echo "<script>window.open('welcome1.php','_self')</script>";  
         header('Location: index1.php');
         $_SESSION['admin_name']=$admin_name;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?> 