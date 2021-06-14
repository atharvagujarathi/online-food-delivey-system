<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title>login</title>
</head>



<center>
<body>

<!-- login -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-lg-push-4 col-md-push-4">
            <div class="panel panel-default" style="margin-top: 50px;">
                <div class="panel-heading">login</div>
                <div class="panel-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control input-sm" name="u_email" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" name="u_name" required placeholder="Username">
                        </div> 
                        <div class="form-group">
                            <input type="password" class="form-control input-sm" name="u_pass" required placeholder="Password">
                        </div> 
                        <div class="form-group">
                            <input type="submit" class="form-control input-sm" name="u_reg" required placeholder="Register">
                            <a href="" class="btn btn-info btn-sm">Login</a>
                        </div>     
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>