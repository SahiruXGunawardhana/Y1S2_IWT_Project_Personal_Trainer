 <?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/admin.css">
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
 <link rel="stylesheet" type="text/css" href="Styles/Inquiry.css">
 <link rel="stylesheet" type="text/css" href="Styles/adminforms.css">


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
  <center><h2 id="inqhead"> Admin</h2></center>
  
  <div id="loginadmin">

   <!----------Begining of the inquiry form--------> 
   <form method="post" action="loginaction.php">

      <h2 class="adminformh2">LogIn as an Admin</h2>

      <label>Email</label><br>
      <input type="text" id="user" name="mail" value="" ><br><br> 

      <label>Password</label><br>
      <input type="Password" id="Fname" name="pass" value="" ><br><br>

     


      <input type="submit" value="LogIn" name="admincrbtn" > 
 
   
  </form> 
 </div>
  
  </div>

   <!----------Footer--------> 
 <?php
  include'footer.php';
 
 ?>


 </body>
</html>