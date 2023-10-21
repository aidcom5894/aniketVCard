<?php 
include('config.php');
include('masterpage/dashboard_header.php');
include('masterpage/dashboard_navbar.php');
include('masterpage/dashboard_sidebar.php');
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Us</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <?php 
 $fetch = mysqli_query($config,"SELECT * FROM user_info WHERE username ='{$_SESSION['loggedInUser']}'");
 while($row = mysqli_fetch_assoc($fetch))
{
   $adphon = $row['phone_number'];
   $admail = $row['email'];
   $adress = $row['address'];
   $uname = $row['username'];
   $fname = $row['fullname'];
   $userimg = $row['user_image'];
   $instagram = $row['insta_id'];
   $facebook = $row['fb_id'];
}
  ?>


<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Quick Example</h3>
</div>


<form method="post" enctype="multipart/form-data">
<div class="card-body">
<div class="form-group">
<label for="exampleInputNumber">Phone Number</label>
<input type="number" class="form-control" name="uphon" id="Pnumber"  value="<?php echo $adphon; ?>">
</div>

<div class="form-group">
<label for="Address">Email</label>
<input type="text" class="form-control" name="umail" id="mail" value="<?php echo $admail; ?>">
</div>

<div class="form-group">
<label for="Address">Fullname</label>
<input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname; ?>">
</div>

<div class="form-group">
<label for="Address">Address</label>
<input type="text" class="form-control" name="uaddes" id="Address" value="<?php echo $adress; ?>">
</div>

<div class="form-group">
<label for="Address">username</label>
<input type="username" class="form-control" name="user" id="username" value="<?php echo $uname; ?>" readonly="">
</div>

<div class="form-group">
<label for="Address">Instagram profile</label>
<input type="username" class="form-control" name="instagram" id="profile" value="<?php echo $instagram; ?>" >
</div>

<div class="form-group">
<label for="Address">Facebook Profile</label>
<input type="username" class="form-control" name="facebook" id="profile" value="<?php echo $facebook; ?>" >
</div>

<div class="form-group">
<label for="image">User Image</label>
<input type="file" accept="jpg,png,jpeg" class="form-control" name="userimg" id="userpimg" value="<?php echo $userimg; ?>">
</div>


<button type="submit" name="submit" class="btn btn-primary">Update Profile</button>

</div>
</form>

</div>

<?php 
if(isset($_POST['submit'])) 
{
  $pone = $_POST['uphon'];
  $mail = $_POST['umail'];
  $uradd = $_POST['uaddes'];
  $uname = $_POST['user'];
  $fullname = $_POST['fname'];
  $userimg = $_POST['user_image'];
  $instagram = $_POST['instagram'];
  $facebook = $_POST['facebook'];

  // image configuration starts here
  $base_url = "http://localhost/vCard/";
  $targetFolder = "modules/upload_userpic/";

  $orgimageName = $_FILES['userimg']['name'];
  $tempPicName = $_FILES['userimg']['tmp_name'];

  $completeImageName = $base_url.$targetFolder.$orgimageName;

  // $sql = "UPDATE user_info SET phone_number='$pone',email='$mail',address='$uradd',fullname = '$fullname',userpic = '$userimg' WHERE username ='{$_SESSION['loggedInUser']}'";

  if(!empty($orgimageName))
  {
    mysqli_query($config,"UPDATE user_info SET phone_number='$pone',email='$mail',address='$uradd',fullname = '$fullname',insta_id='$instagram',fb_id = '$facebook',user_avatar = '$completeImageName' WHERE username ='{$_SESSION['loggedInUser']}'");

    move_uploaded_file($tempPicName, $targetFolder.$orgimageName);
    
    echo "<script>alert('Data & Profile Picture Updated Successfully');window.location.href='edit_home.php'</script>";
  }
  elseif(empty($orgimageName)) 
  {
    mysqli_query($config,"UPDATE user_info SET phone_number='$pone',email='$mail',address='$uradd',fullname = '$fullname',insta_id='$instagram',fb_id = '$facebook' WHERE username ='{$_SESSION['loggedInUser']}'");

    echo "<script>alert('Data Updated Successfully');window.location.href='edit_home.php'</script>";
  
  }
  else
  {
    echo "<script>alert('No Data Changed')</script>";
  }
}
 ?>

</div>

</div>
</div>
</div>
</section>

</div>









<?php 
include('masterpage/dashboard_footer.php');
?>