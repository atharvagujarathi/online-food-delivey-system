<?php require 'conn.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>docs</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>


<style>

.dada {
color: white;
text-align: left;
font-size: 200%;
margin-top: -70px;

}


.bhai {
color: white;
text-align: left;
font-size: 200%;
margin-top: 50px;

}

</style>


<div class="navigation-container">
<div class="navigation-content">
<div class="logo"><img src=""/></div>
<div class="menu">
<ul>
<li><a href="menu.php">MENU</a></li>
<li><a href="about_us.php">ABOUTUS</a></li>

<li><a href="contact.php">CONTACTUS</a></li>

<li><a href="support.php">SUPPORT</a></li>
<li><a href="ath_index.php">ORDER</a></li>
<li><a href="welcome.php">Account</a></li>
</ul>
</div>
<div class="cart">
<img src="images/cart.png" height="30px">
<a href="cart.php">Cart</a>
</div>
</div>
</div>


<?php  
session_start(); 
  
if(!$_SESSION['email'])  
{  
  
    header("Location: logi.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  

<div class="bhai">
<h1>Welcome </h1><br>  
</div>

<div class="dada">
<?php  


echo $_SESSION['email'];  

?>



<!--------NAVIAGTION-END------------->
<div class="content-container">
<div class="whats-new">

</div>
<div class="content">
<!--1------------------------------------>
<div class="first-row">
<div class="new">
<p></p>
<p></p>

</div>
<!------------------------------>
<div class="find">
<div class="search">
<p></p>
<div class="text">


</div>
</div>
<!------------------------------->
<div class="order">

</div>
</div>
</div>
<!--2------------------------------------->
<div class="second-row">
<div class="food-one">
<div class="name">
<p></p>
<p></p>
</div>
<div class="price"></div>
</div>
<div class="food-two">
<div class="name">
<p></p>
<p></p>
</div>
<div class="price"></div>
</div>

</div>
<!--3------------------------------------->
<div class="third-row">
<div class="flavor">
<a href="#">
<p></p>
<p></p>
</a>
</div>
<div class="breakfast">
<a href="#">
<p></p>
<p></p>
</a>
</div>
</div>
</div>
</div>
</div>
<!------------------------------->
<div class="footer">
<div class="navigation-content">
<div class="logo"><img src=""/></div>
<div class="menu footer-menu">
<ul>

</ul>
</div>

<!--NAVIGATION-END--------------->
<div class="copyright">
<p></p>

</div>
</div>
</body>
</html>
