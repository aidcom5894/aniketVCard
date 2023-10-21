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
  $fetchAboutUs = mysqli_query($config,"SELECT * FROM user_contact");
  while($row = mysqli_fetch_assoc($fetchAboutUs))
  
  {
    
    $mail = $row['email'];
    $Pnumber = $row['phone_number'];
    $adress = $row['user_address'];
    $udate = $row['unboarding_date'];
  }

?>
  
 
<form>
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="useremail"name = "useremail" value="<?php echo $mail;?>">
</div>
<div class="form-group">
<label for="number">Phone number</label>
<input type="number" class="form-control" id="userphoneno" name ="userphoneno" value="<?php echo $Pnumber;?>">
</div>
<div class="form-group">
<label for="Address"id="Address">Address</label>
<input type="text" class="form-control" id="user_address"name = "user_address" value="<?php echo $adress;?>">
</div>
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

$mail = $_POST['useremail'];
$Pnumber = $_POST['userphoneno'];
$adress = $_POST['user_address'];
$udate = $_POST['unboarding_date'];

if(isset($_POST['update'])) 
{

     $updateQuery =  mysqli_query($config,"UPDATE user_contact SET
   mail = '$mail', phone_no = '$Pnumber', udate = '$udate', adress = '$adress'");

      if($updateQuery)
     {
      echo "<script>alert('Data Updated Successfully')</script>";
      redirect('edit_contact.php');
     }
     else
     {
      echo "<script>alert('Update Failed')</script>";
      redirect('edit_contact.php');
     }
  }
  ?>






<?php 
include('masterpage/dashboard_footer.php');
?>