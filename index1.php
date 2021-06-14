<?php require 'conn.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>docs</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>

<body>


<style>

.dada {
color: white;
text-align: center;
font-size: 200%;
margin-top: -50px;

}


.bhai {
color: white;
text-align: center;
font-size: 200%;
margin-top: 70px;

}

.aa {

background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}

.ab {

    margin-left: 10px;
    margin-top: 10px;

}

.first_section {

    margin-top: 40px;

}

.second_section {

margin-top: 40px;

}




</style>


<div class="navigation-container">
<div class="navigation-content">

<div class="menu">
<ul>

<li><a href="Admin_products.php">Total Products</a></li>

<li><a href="admin_login.php">Total Logins</a></li>
<li><a href="admin_contact.php">Total Contacts</a></li>

<li><a href="admin_payment.php">Total payments</a></li>
<li><a href="admin_login_inserted.php">Time</a></li>
</div>



</div>
</div>
</div>

<?php  
session_start(); 
  
if(!$_SESSION['admin_name'])  
{  
  
    header("Location: logi.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?> 

<div class="bhai">
<h1>Welcome , Admin</h1><br>  
</div>

<div class="dada">
<h1 style="font-weight: 1000; font-weight: bold; font-weight: underline; color: hsl(0, 100%, 75%);">
<?php  


echo $_SESSION['admin_name'];  

?>
</h1>



<div class="first_section">
<div class="container">
<div class="row">



<div class="col-6">


<tr>
    <td>Total Products</td>
    <td>
    <div class="ab">
            <?php  
            
            $query = "SELECT id FROM products";
            $query_run = mysqli_query($conn, $query);

            $row = mysqli_num_rows($query_run);


            echo '<h1> '.$row.' </h1>';
            ?>
</div>
    </td>
</tr>
</div>


<div class="col-6">
<tr>
    <td>Total Logins</td>
    <td>
            <div class="ab">
            <?php  
            
            $query = "SELECT id FROM users";
            $query_run = mysqli_query($conn, $query);

            $row = mysqli_num_rows($query_run);


            echo '<h1> '.$row.' </h1>';
            ?>
            </div>
    </td>
</tr>
</div>


</div>
</div>
</div>


<div class="second_section">
<div class="container">
<div class="row">
<div class="col-4">
<tr>

    <td>Payments Details</td>
    <td>
    <div class="ac">
            <?php  
            
            $query = "SELECT id FROM users";
            $query_run = mysqli_query($conn, $query);

            $row = mysqli_num_rows($query_run);


            echo '<h1> '.$row.' </h1>';
            ?>
        </div>
        
    </td>
    </div>
</tr>



<div class="col-4">
<tr>

    <td>Login Actions</td>
    <td>
    <div class="ad">
            <?php  
            
            $query = "SELECT id FROM login";
            $query_run = mysqli_query($conn, $query);

            $row = mysqli_num_rows($query_run);


            echo '<h1> '.$row.' </h1>';
            ?>
        </div>
        
    </td>
    </div>
</tr>



<div class="col-4">
<tr>
    <td>Total Responses</td>
    <td>
    <div class="ab">
            <?php  
            
            $query = "SELECT id FROM contact";
            $query_run = mysqli_query($conn, $query);

            $row = mysqli_num_rows($query_run);


            echo '<h1> '.$row.' </h1>';
            ?>
        </div>
    </td>
</tr>
</div>


</div>
</div>
</div>


<div class="third_section">
<div class="container">
<div class="row">
<div class="col-4">


</div>


<div class="col-4">

</div>


<div class="col-4">

</div>


</div>
</div>
</div>

