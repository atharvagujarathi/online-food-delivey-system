<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title></title>
<link rel='stylesheet' href='css/yash1.css' type='text/css' media='all' />
</head>
<body>

<link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="navigation-container">
<div class="navigation-content">
<div class="menu">

<ul>
<li><a href="index.php">home</a></li>
<li><a href="ath_index.php">order</a></li>
<li><a href="welcome.php">account</a></li>
<li><?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php" style="color: white;">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div></li>
</ul>
</div>
</div>
</div>

<style>

	.de {

		color: white;
		text-align: center;
		padding-top: 20px;

	}

	.table {

		color: white;
	} 

	.cart_div1 {

		color: white;
	}
	</style>

<div style="width:700px; margin:50 auto;">
<div class="de">
<h2>order</h2>   
</div>


<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="150" height="140" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onChange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "Rs".$product["price"]; ?></td>
<td><?php echo "Rs".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}

?>

<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs .".$total_price; ?></strong>
</td>

<tr><td colspan="5" align="center"><h1>Payment</h1></td></tr>

<tr><td colspan="5" align="left"><a href="cod.php" style=" margin-left: 150px;"><button background-color: #e7e7e7; color: black;>Cash On Delivery</button>  <a href="card_details.php" style="text-align: right; margin-left: 150px;"><button background-color: #e7e7e7; color: black;>Card Payment</button></a></a></tr></td>


</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>

	

</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<br /><br />

</div>
</body>
</html>