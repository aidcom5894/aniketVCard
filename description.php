<?php 

include('config.php');
session_start();

if(!isset($_SESSION['loggedInUser']))
{
session_destroy();

unset($_SESSION['loggedInUser']);

header('location:login');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $_SESSION['loggedInUser']. "'s " . "Dashboard"; ?></title>
  </head>
  <body style="background-color:black;">

    <div class="container float-end" style="margin-top:25px;color: whitesmoke;"><h4>Welcome, <?php echo $_SESSION['loggedInUser']; ?></h4></div>


    <div class="container" style="margin-top:45px;">

    <?php 
      
      $fetchusername = mysqli_query($config,"SELECT * FROM user_info WHERE username='{$_SESSION['loggedInUser']}'");

      while($row = mysqli_fetch_assoc($fetchusername)) 
      {
        $data1 = $row['fullname'];
      }
?>
		<form method="POST">
		<div class="mb-3">
		<label for="username" class="form-label"style="color: whitesmoke;">User Name:</label>
		<input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?php echo $data1; ?>">
		</div>

    <form method="POST">
    <div class="mb-3">
    <label for="phone" class="form-label"style="color: whitesmoke;">Phone Number</label>
    <input type="text" class="form-control" id="Pnumber" name="phone" aria-describedby="emailHelp" value="<?php echo $Pnumber; ?>">
    </div>
		

		<button type="submit" class="btn btn-primary" name="updateDetails">Submit</button>
    <a href="logout.php" class="btn btn-danger">Logout</a>
		</form>

    	
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php 

$updUsername = $_POST['username'];

if(isset($_POST['updateDetails']))
{
  $updateName = mysqli_query($config,"UPDATE user_info SET fullname = '$updUsername' WHERE username = '{$_SESSION['loggedInUser']}'");

  if($updateName)
  {
    echo "<script>alert('Name updated Successfully')</script>";
    echo "<script>window.location.href='description.php'</script>";
  }
  else
  {
    echo "<script>alert('No Changes made')</script>";
    echo "<script>window.location.href='description.php'</script>";
  }
}

?>