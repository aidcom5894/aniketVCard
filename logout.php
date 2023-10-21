<?php

session_start();
unset($_SESSION['loggedInUser']);
session_destroy();
 echo"<script> alert('User logout successfully')</script>";
    echo "<script>window.location.href='login.php'</script>";


?>