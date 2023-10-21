  <?php
  include('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="modules/dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="modules/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="modules/dashboard/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

    
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Phone" name="phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <?php 
        $base_url = "http://localhost/vCard/";
        $folderLocation = "modules/useravatar/";

        $imageName = array('avatar1.jpg','avatar2.jpg','avatar3.jpg','avatar4.jpg','avatar5.jpg','avatar6.jpg','avatar7.jpg','avatar8.jpg','avatar9.jpg','avatar10.jpg','avatar11.jpg','avatar12.jpg','avatar13.jpg','avatar14.jpg','avatar15.jpg','avatar16.jpg','avatar17.jpg','avatar18.jpg','avatar19.jpg','avatar20.jpg','avatar21.jpg','avatar22.jpg','avatar23.jpg','avatar24.jpg','avatar25.jpg','avatar26.jpg','avatar27.jpg','avatar28.jpg','avatar29.jpg','avatar30.jpg');

        $imageAddress = $base_url.$folderLocation.$imageName[array_rand($imageName,1)];

        ?>


        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" onchange="checkstatus()" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="register" class="btn btn-primary btn-block" name="registerUser" style="display:none;">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <script type="text/javascript">
        function checkstatus()
        {
          var agreeButton = document.getElementById('agreeTerms');
          if(agreeButton.checked === true)
          {
            document.getElementById('register').style.display = 'block';
          }
          else
          {
           document.getElementById('register').style.display = 'none'; 
          }
        }
      </script>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="modules/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="modules/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="modules/dashboard/dist/js/adminlte.min.js"></script>
</body>
</html>


<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$fullName = "To be updated";
$useravatar = $imageAddress;

$e_mail = "demo123@gmail.com";
$addrs = "aidcom it solution";

if(isset($_POST['registerUser']))
{
  $enterUser = mysqli_query($config,"INSERT INTO user_info(username,fullname,email,password,address,phone_number,user_avatar) VALUES('$username','$fullName','$e_mail','$password','$addrs','$phone','$useravatar')");

  if($enterUser)
  {
    echo "<script>alert('User Registered Successfully');window.location.href='login.php'</script>";
  }
  else
  {
    echo "<script>alert('No user registered')</script>";
  }
}


?>