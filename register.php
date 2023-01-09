<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Tempahan Kenderaan Jabatan ILPS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
</head>
<body>

<?php
      include "conn.php";

      if(isset($_POST['submit']))
      {
        
      $name = $_POST['name'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $sql= "INSERT INTO `user`(`username`, `password`, `name`) VALUES ('{$username}','{$password}','{$name}')";
      $rs= mysqli_query($conn, $sql); 

      //displaying proper message for the user to see whether the query executed perfectly  or not 
      if (!$rs) {
        echo "something went wrong ". mysqli_error($conn);
      }

      else { echo "<script type='text/javascript'>alert('User added sucessfully!')</script>";
            echo "<script type='text/javascript'> document.location ='index.php'; </script>";
          }
    }
  ?>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="">
					<span class="login100-form-title p-b-53">
						Register
					</span>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Name
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name" required>
						<span class="focus-input100"></span>
					</div>

                    
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" required>
						<span class="focus-input100"></span>
					</div>

                    
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" value="submit" class="login100-form-btn" name="submit">
							Register
						 </button> 
					</div>

					<div class="w-full text-center p-t-55">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>