<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

<?php
  include "config.php";
  //masukkan maklumat database
  if (isset($_POST['submit'])){
  $id= $_POST['id'];
  $username= $_POST['username'];
  $password= md5 ($_POST['password']);
    //echo $nokp."". $no_telefon."". $id_staf."";
    $sql = "INSERT INTO user (id,username,password) VALUES ('{$id}','{$username}','{$password}')";
    $rs=mysqli_query($link, $sql);
    //displaying proper message fot the user to see wheteher the query excuted perfectly or not
    if (!$rs){
      echo "Something went wrong ". mysqli_error($link);
    }
    else { echo "<script type'text/javascript'>alert('User added successfully!')</script>";
           echo "<script type'text/javascript'> document.location = 'index.php'; </script>";
    }
  }
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
          <h2 class="fw-bold mb-5">SIGN UP HERE</h2>
          <form method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" placeholder="Id User" name="id"/>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" placeholder="Username" name="username"/>
                </div>
              </div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">              
              <input type="password" id="form3Example4" class="form-control" placeholder="Password" name="password"/>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>

