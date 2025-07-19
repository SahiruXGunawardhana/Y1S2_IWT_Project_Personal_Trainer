<?php
 session_start();

 session_destroy();
     echo"<script> alert('LogOut complete'); 
          window.location.href='Home.php' </script>";

 ?>