
<?php require 'conn.php'; ?>

<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: index.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
<link rel="stylesheet" href="css/style.css">
</head>  
  
<body>  

<style>
.bhai {
color: white;
text-align: center;
font-size: 200%;
margin-top: 90px;

}

a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top: 30px;
}

a:hover, a:active {
  background-color: red;
}

.dada {
color: white;
text-align: center;
font-size: 200%;

}

</style>



<div class="navigation-container">
<div class="navigation-content">
<div class="menu">

<ul>
<li><a href="index.php">home</a></li>
</ul>


</div>
</div>
</div>


<div class="bhai">
<h1>Welcome</h1><br>  
</div>

<div class="dada">
<?php  

 
echo $_SESSION['email'];  

?>

</div>
<center>
 
<h1><a href="logout.php">Logout here</a>   </h1>  


  
</center>




</body>  
  
</html>

