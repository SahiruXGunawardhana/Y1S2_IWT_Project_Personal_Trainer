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
  
  <div id="bodyadminforms">

   <!----------Begining of the inquiry form--------> 
   <form method="post" action="addadmin.php">

      <h2 class="adminformh2">Create an Admin Account</h2>
      <label>Full Name</label><br>
      <input type="text" id="Fname" name="Fname"  required><br><br>

      <label>Email</label><br>
      <input type="email" id="Email" name="Email"  required><br><br> <br>  

      <label>Mobile</label><br>
      <input type="tel" id="phone" name="phone" required><br><br> 

      <label>Password</label><br>
      <input type="password" id="pass1" name="pass1" required><br><br> 

      <label>Re-enter Password</label><br>
      <input type="password" id="pass2" name="pass2" required><br><br> 

      <input type="submit" value="Create" name="admincrbtn" > 
 
   
  </form> 
 </div>
  
  </div>

   <!----------Footer--------> 
 <?php
  include'footer.php';
 
 ?>
 

 </body>
</html>