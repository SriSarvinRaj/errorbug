<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
<body>

<?php
  include "config.php";
  session_start();
  if(isset($_POST['login'])){
	$username= $_POST['username'];
    $password= md5($_POST['password']);
    
     //Checking is user existing in the database or not
     $query = "SELECT * FROM user WHERE username='{$username}'and password='{$password}'";
     $result = mysqli_query($link,$query);
     //semak@baca coding satu persatu baris
     $rows = mysqli_num_rows($result);
           if($rows==1){
         $_SESSION['username'] = $username;
         $_SESSION['password'] = $password;
               // Redirect user to index.php
         header("Location: senarai.php");
            }else{
     echo "<div class='form'><h3>id/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
    }
    }else
    ?>

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('image/programmer.png');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">LOGIN NOW</h2>
          <form method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control" name="username" placeholder="Username"/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">              
            <input type="password" id="form3Example4" class="form-control" name="password" placeholder="Password"/>
            </div>

            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-lg" name='login' style="padding-left: 2.5rem; padding-right: 2.5rem;">

                <br><br>
            <div class="text-center">
              <p>Don't have an account ? Click here to  <a href="register.php">Register!</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>

