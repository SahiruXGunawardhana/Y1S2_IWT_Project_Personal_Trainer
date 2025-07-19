
 <?php
  session_start();
 ?>

<?php
include 'config.php';

if(!empty($_SESSION['Member_ID'])){
       $id = $_SESSION['Member_ID'];
       $result = mysqli_query($con,"SELECT * FROM member WHERE `Member_ID` = $id");
       $row = mysqli_fetch_assoc($result);
}
else{
       header("location:login.html");
}






?>







<!DOCTYPE html>
<html>
 <head>
  <title> login-welcome</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/signup.css">
  <link rel="stylesheet" type="text/css" href="Styles/logindisplay.css">


  <script src="JavaScripts/Home.js"></script>
  

 </head>
 <body>


 <?php
  include'homeheader.php';
 ?>

    
      <hr id="hr1">
<div class="logindisplay-container">
       <img src="Images/welcome.jpg" alt="welcome" class="welcome-image">
<h1 style="color:black;">Welcome <?php echo $row['First Name'];?>!!</h1>

      <a href="logout.php"><button class="btn-logout">Log Out</button></a><br>
	  <a href="display.php"><button class="btn-logout">My Profile</button></a>

</div>
      


 <?php
  include'homefooter.php';
 ?>
 


 <script src="JavaScripts/signup.js"></script>
 </body>
</html>