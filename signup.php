<?php
  include('config.php');
?>


<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color: black;">
    <h1 style="margin-left: 800px;color: whitesmoke;">Sign Up</h1>
    <div class="container" style="margin-top: 50px;margin-left: 300px;">

      <form method="post" action="#">
  <div class="mb-3">
    <label for="username" class="form-label"style="color: whitesmoke;">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label"style="color: whitesmoke;">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary" name="register"style="color: whitesmoke;">Submit</button>
</form>


    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

$user = $_POST['username'];
$pass = $_POST['password'];

if(isset($_POST['register']))
{
  $insertData = mysqli_query($config,"INSERT INTO user_info(username,password,fullname) VALUES('$user','$pass','To be updated By User')");

  if($insertData) 
  {
    echo"<script> alert('data inserted')</script>";
    echo "<script>window.location.href='login.php'</script>";
  }
  else
  {
    echo"<script> alert ('no data inserted')</script>";
  }

}



?>


