<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
<title></title>
<link rel='stylesheet' href='css/yash.css' type='text/css' media='all' />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">
</head>
<body>

<style>

.erp {

  color: white;
  text-align: center;
  padding-top: 10px;

}



  </style>
  


<div class="navigation-container">
<div class="navigation-content">
<div class="menu">

<ul>
<li><a href="index.php">home</a></li>
<li>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
</li>
</ul>


</div>
</div>
</div>




<div style="width:700px; margin:50 auto;">
<div class="erp">
<h2></h2>  
</div> 


<?php
}

//  $result = mysqli_query($con,"SELECT * FROM `products`");
// while($row = mysqli_fetch_assoc($result)){
// 		echo "<div class='product_wrapper'>
// 			  <form method='post' action=''>
// 			  <input type='hidden' name='code' value=".$row['code']." />
// 			  <div class='image'><img src='".$row['image']."' /></div>			  
// 			  <div class='name'>".$row['name']."</div>
// 		   	  <div class='price'>$".$row['price']."</div>
// 			  <button type='submit' class='buy'>Buy Now</button>
// 			  </form>
// 		   	  </div>";
  //      }
//mysqli_close($con);
?>

	
	

<div class="">
  <?php
        $con = mysqli_connect("localhost","root","","demo") or die("Connection Failed");
        
       
		$result = mysqli_query($con,"SELECT * FROM `products`"); 

        if(mysqli_num_rows($result)>0){ 
            
    ?>


    <div class="row">
          
      
    <?php 
        while ($row = mysqli_fetch_assoc($result)) { 
    ?>
      <div class="col-md-4 card" style= "padding:0">
	  <form method='post' action=''>
    <input type='hidden' name='code' value="<?php echo $row['code']; ?>" />
        <img src=" <?php echo $row['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['name'];?></h5>
          <p class="card-text">
          <h2>Rs. <?php echo $row['price'];?> /-</h2>
		  <button type='submit' class='buy'>Add To Cart</button>
		  </form>
          
         
        </div>;
      </div>
    <?php } 
            mysqli_close($con);   
            
            //  $result = mysqli_query($con,"SELECT * FROM `products`");
// while($row = mysqli_fetch_assoc($result)){
// 		echo "<div class='product_wrapper'>
// 			  <form method='post' action=''>
// 			  <input type='hidden' name='code' value=".$row['code']." />
// 			  <div class='image'><img src='".$row['image']."' /></div>			  
// 			  <div class='name'>".$row['name']."</div>
// 		   	  <div class='price'>$".$row['price']."</div>
// 			  <button type='submit' class='buy'>Buy Now</button>
// 			  </form>
// 		   	  </div>";
  //      }
//mysqli_close($con);
        ?>
    </div>
    <?php }else{
                echo"<h2>No Records Found</h2>";
            } 
 ?>
	   



   


	
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />

</div>
</body>
</html>