
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo $base_address; ?>modules/dashboard/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <?php 
    $fetchActiveUser = mysqli_query($config,"SELECT * FROM user_info WHERE username='{$_SESSION['loggedInUser']}'");

    while($row = mysqli_fetch_assoc($fetchActiveUser)){?>

   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $row['user_avatar']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['username']; ?></a>
        </div>
      </div>
<?php } ?>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" id="dashClick" class="nav-link" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
             </p>
            </a>

             <li class="nav-item">
            <a href="edit_home.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          
          </li>
          <li class="nav-item">
            <a href="edit_aboutus.php" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>About</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="edit_services.php" class="nav-link">
              <i class="nav-icon fas fa-check-square"></i>
              <p>Services</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>Portfolio</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="edit_blog.php" class="nav-link">
              <i class="nav-icon fas fa-rss"></i>
              <p>Blog</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="edit_contact.php" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Contact</p>
            </a>
          </li>

          

            <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-times"></i>
              <p>Sign Out</p>
            </a>
          </li>
          
          

          <script type="text/javascript">
           
              document.addEventListener('click', function handleClick(event) {
                event.target.classList.add('active');
              });
            
          </script>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>