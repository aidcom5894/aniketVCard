<?php
  include('config.php');
?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="modules/dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="modules/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="modules/dashboard/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="modules/dashboard/index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" name="username" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
     
          <!-- /.col -->
      <div class="row">
          <div class="col">
            <a href="#" class="text-centert"> Forgot Password</a>
          </div>
       </div>

       <div class="row">
          <div class="col">
            <a href="register.php" class="text-centert"> Register Here</a>
          </div>
       </div>

       

      <div class="input-group mb-3">
        <button type="submit" class="btn btn-success btn-block form-control" name="submit">Sign In</button>
      </div>

     <!-- /.social-auth-links -->

      
      <a href="index.php" class="text-center btn btn-primary btn-block form-control">Home</a>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

      <!-- /.col -->
    
      </form>

      <?php
      $username = $_POST['username'];
      $password = $_POST['password'];
      $matchcredentials = mysqli_query($config,"SELECT * FROM user_info WHERE username = '$username' AND password = '$password'");
      if(isset($_POST['submit']))
      {
        if (mysqli_num_rows($matchcredentials)>0)
        {
          session_start();
          $_SESSION['loggedInUser'] = $username;
          echo"<script>alert('login successful')</script>";
          echo"<script>window.location.href='dashboard.php'</script>";
        }
        else
        {
          echo "<script>alert('No User Found with the provided details.');window.location.href='login.php'</script>";
        }
      }
?>

    
 

<!-- jQuery -->
<script src="modules/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="modules/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="modules/dashboard/dist/js/adminlte.min.js"></script>
</body>
</html>

