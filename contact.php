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
  <link rel="stylesheet" href="css/style.css">


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

  .row {

    margin-top: 140px;

  }

  .form-group {
    color: white;

  }

  .asm {

 text-align: center;
  }

  .contact-info {

    color: white;
    margin-top: 50px;

  }

  </style>

  <div class="container contact">
    <div class="row">
      <div class="col-lg-5 col-sm-12">
        <form action="" method="POST" >
          <div class="form-group">
            <label for="formGroupExampleInput">Name *</label>
            <input type="text" name="Name_1" class="form-control"  id="formGroupExampleInput" placeholder="EX. athrva gujarathi" 
              Required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email *</label>
            <input type="email" name="Email" class="form-control"  id="formGroupExampleInput2" placeholder="EX. abc@gmail.com" name="Email"
              Required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">Phone *</label>
            <input type="number" name="Phone" class="form-control"  id="formGroupExampleInput3" placeholder="EX.+917788996655" name="Phone"
              Required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">your message *</label>
            <input type="text" name="ur_response" class="form-control"   id="formGroupExampleInput3" placeholder="ex. asvawvv " name="ur_response"
              Required>
          </div>
          <div class="asm">
          <button type="submit" style="background-color: #f44336;" class="btn btn-primary" name="c_add">Submit</button>
          </div>
        </form>
      </div>


      <?php 

if( isset($_POST['c_add']) ){
       $Name_1 = $_POST['Name_1'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $ur_response = $_POST['ur_response'];
       
       

       $sql = "INSERT INTO contact (Name_1, Email, Phone, ur_response) VALUES ( '$Name_1', '$Email', '$Phone', '$ur_response')";
       if (mysqli_query($conn, $sql)) {
               echo "<script>alert('ur query submitted sucessfully');</script>";
       }else{
           echo "error: " . $sql . "<br>" . mysqli_error($conn);
       }
}

   ?>


      <div class="col-lg-5 col-sm-12">
        <img src="./www.png" alt="">
        <div class="contact-info">
          <h3>ADDRESS</h3>
          <p>314/455 osm pizza., akurdi, Pune - 411022 </p>
          <h3>PHONE</h3>
          <p>+911234567890</p>
          <h3>EMAIL</h3>
          <p>osmpizza@gmail.com</p>
        </div>

      </div>
    </div>
  </div>

 



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