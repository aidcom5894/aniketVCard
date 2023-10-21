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


<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Quick Example</h3>
</div>

<?php
  $fetchAboutUs = mysqli_query($config,"SELECT * FROM user_about");
  while($row = mysqli_fetch_assoc($fetchAboutUs))
  
  {
    $name = $row['name'];
    $age = $row['age'];
    $contact = $row['phone_no'];
    $dob = $row['born_on'];
    $location = $row['native'];
    $intro = $row['description'];
    $mail = $row['mail'];
  }

?>
<form method="post">
<div class="card-body">
<div class="form-group">
<label for="User Name">Name</label>
<input type="username" class="form-control" name="user" id="username" value="<?php echo $name;?>">
</div>
<div class="form-group">
<label for="exampleforage">Age</label>
<input type="number" class="form-control" id="userage"  name="userage" value="<?php echo $age;?>">
</div>

<div class="form-group">
<label for="">Mail</label>
<input type="email" class="form-control" id="useremail" name="useremail" value="<?php echo $mail;?>">
</div>

<div class="form-group">
<label for="userphoneNo">Phone No</label>
<input type="number" class="form-control" id="userphoneNo" name="userphoneno" value="<?php echo $contact;?>">
</div>

<div class="form-group">
<label for="place">Born on</label>
<input type="date" class="form-control" id="place" name="place" value="<?php echo $dob;?>">
</div>
<div class="form-group">
<label for="place">Native</label>
<input type="text" class="form-control" id="native" name="native" value="<?php echo $location;?>">
</div>
<div class="form-group">
<label for="place"id="Description">Description</label>

<textarea class="form-control" rows="6" id="Description" name="group"><?php echo $intro;?></textarea>
</div>

<div class="card-footer">
<button type="submit" name="update" class="btn btn-primary form-control">Edit</button>
</div>

</form>

</div>

</div>
</div>
</div>
</section>

</div>


<?php 

$name = $_POST['user'];
$age = $_POST['userage'];
$mail = $_POST['useremail'];
$phoneNo = $_POST['userphoneno'];
$dob = $_POST['place'];
$native = $_POST['native'];
$description = $_POST['group'];
 
  if(isset($_POST['update']))
  {
    $updateQuery =  mysqli_query($config,"UPDATE user_about SET
    name = '$name',age = '$age',mail = '$mail', phone_no = '$phoneNo', born_on
    = '$dob',native = '$native', description = '$description'");
   
     if($updateQuery)
     {
      echo "<script>alert('Data Updated Successfully')</script>";
      redirect('edit_aboutus.php');
     }
     else
     {
      echo "<script>alert('Update Failed')</script>";
      redirect('edit_aboutus.php');
     }
  }


?>





<?php 
include('masterpage/dashboard_footer.php');
?>