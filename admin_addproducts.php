<?php
	include('conn.php');

	$name=$_POST['name'];
	$code=$_POST['code'];
	$price=$_POST['price'];
    

	// $fileinfo=PATHINFO($_FILES["image"]["name"]);

	// if(empty($fileinfo['image'])){
	// 	$location="";
	// }
	// else{
	// $newFilename=$fileinfo['image'] ."_". time() . "." . $fileinfo['image'];
	// move_uploaded_file($_FILES["image"]["image"],"upload/" . $newFilename);
	// $location="upload/" . $newFilename;
	// }
	
	$sql="insert into products (name, code, price, image) values ('$name', '$code', '$price', '$image')";
	$conn->query($sql);

	// header('location:product.php');

?>