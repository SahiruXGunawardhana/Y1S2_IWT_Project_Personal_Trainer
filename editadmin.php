 <?php
  session_start();
 ?>

<?php
 include"config.php";
?>
<?php
 $id = $_GET['ID'];
 $name = $_GET['name'];
 $email = $_GET['mail'];
 $tel = $_GET['mobile'];

 
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
  
  <div id="bodyeditforms">

   <!----------Begining of the inquiry form--------> 
   <form method="get" action="updateadmin.php">

      <h2 class="adminformh2">Update your Admin Account</h2>

      <label>Admin ID</label><br>
      <input type="text" id="pass2" name="ID" value="<?php echo $id; ?>" readonly><br><br> 

      <label>Full Name</label><br>
      <input type="text" id="Fname" name="name" value="<?php echo $name; ?>" ><br><br>

      <label>Email</label><br>
      <input type="email" id="Email" name="mail" value="<?php echo $email; ?>" readonly><br><br> <br>  

      <label>Mobile</label><br>
      <input type="tel" id="phone" name="mobile" value="<?php echo $tel; ?>"><br><br> 


      <input type="submit" value="Update" name="admincrbtn" > 
 
   
  </form> 
 </div>
  
  </div>

   <!----------Footer--------> 
 <?php
  include'footer.php';
 
 ?>
 



 </body>
</html>