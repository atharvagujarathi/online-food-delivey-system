
<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="./css/style.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  margin-top: 60px;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
  background-color: white;
  width: 160px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>





<div class="row">
  <div class="col-75">
    <div class="container">

    <div class="navigation-container">
<div class="navigation-content">

<div class="menu">

<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="ath_index.php">ORDER</a></li>
<li><a href="welcome.php">Account</a></li>
</ul>
</div>
</div>
</div>
      <form action="" method="POST">

      
        

          <div class="col-50">
          <center>
            <h3 style="color: white; text-align: center; font-size: 40px;">Payment</h3>
            <label for="fname" style="color: white;">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname" style="color: white;" >Name on Card</label>
            <input type="text" id="cname" name="cardname" style="width: 500px;" placeholder="John More Doe">
            <label for="ccnum" style="color: white;">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" style="width: 500px;" placeholder="1111-2222-3333-4444">
            <label for="expmonth" style="color: white;">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" style="width: 500px;" placeholder="September">
            
              <div class="col-50">
                <label for="expyear" style="color: white;">Exp Year</label>
                <input type="text" id="expyear" name="expyear" style="width: 500px;" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="expyear" style="color: white;">cvv</label>
                <input type="text" id="expyear" name="cvv" style="width: 500px;" placeholder="cvv">
              </div>
              <div class="col-50">
                <label for="expyear" style="color: white;">Enter Amount</label>
                <input type="text" id="expyear" name="rupee" style="width: 500px;" placeholder="RS/-">
              </div>
            
          </div>
          </center>
          
        
        <center>
        <label style="color: white;">
          <input type="checkbox" checked="checked"  name="sameadr" > Shipping address same as billing
        </label >
        <input type="submit" style="width: 300px;  background-color: #f44336;" value="payment" name="register" class="btn">
      </form>
    </div>
  </div>
 
  </center>

<?php     

if(isset($_POST['register']))  
{  
    
  
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];   
    $expyear = $_POST['expyear']; 
    $rupee = $_POST['rupee']; 



    $sql = "INSERT INTO payment_method (cardname, cardnumber, expmonth, expyear, rupee) VALUES ('$cardname', '$cardnumber', '$expmonth', '$expyear', '$rupee')";  
    if(mysqli_query($conn, $sql))  
    {  
        echo"<script>alert('your')</script>";  
    }  
} 

?>




</body>
</html>
