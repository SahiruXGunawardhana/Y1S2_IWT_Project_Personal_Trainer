<?php
 session_start();

 if(isset($_SESSION['ID'])){
  
  

 ?>
<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/Inquiry.css">
  <link rel="stylesheet" type="text/css" href="Styles/admin.css">
  <script src="JavaScripts/Home.js"></script>
  <script src="JavaScripts/Inquiry.js"></script>

 </head>
 <body>

 <?php
  include'header.php';
 ?>
    
  <hr id="hr1">

   <!----------Begining of the body content--------> 
  <div id="homebg">
   <div id="adminhome">
    <p id="adminwelcome">Welcome <br> to <br> Admin Portal <?php echo $_SESSION['Name']; ?></script></p>
    <a href="viewadmin.php"> <button class="adminbtn" name="Adminbtn"> Admin    </button> </a>
    <a href="viewitem.php"><button class="adminbtn" name="Itembtn"> Items    </button> </a>
    <button class="adminbtn" name="Workoutsbtn"> Workouts </button>
    <button class="adminbtn" name="Dietsbtn"> Diets    </button>
    <a href="viewinquiry.php"> <button class="adminbtn" name="Inquirybtn"> Inquiry   </button> </a>
    <a href="conc_read.php"><button class="adminbtn" name="messagebtn"> Message  </button>

   </div>
  
  </div>

   <!----------Footer--------> 
 <?php
  include'footer.php';
 
 ?>
 



 </body>
</html>

<?php
 }

 else{
      echo"<script> alert('Please Login'); 
          window.location.href='adminlogin.php' </script>";
 }

?>

