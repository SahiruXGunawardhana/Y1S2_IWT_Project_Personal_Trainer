 <?php
  session_start();
 ?>

<?php
 include"config.php";
?>
<?php
 $id = $_GET['ID'];
 $subject = $_GET['Subject'];
 $injury = $_GET['Injury'];
 $content = $_GET['Content'];
 $userid = $_GET['UserID'];
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
  
  <div id="bodyeditforms" height="650px">

   <!----------Begining of the inquiry form--------> 
   <form method="get" action="updateinquiry.php">

      <h2 class="adminformh2">Update Inquiry</h2>

      <label>Admin ID</label><br>
      <input type="text" id="pass2" name="ID" value="<?php echo $id; ?>" readonly><br><br> 

      <label>User ID</label><br>
      <input type="text" id="pass2" name="UserID" value="<?php echo $userid; ?>" readonly><br><br> 

      <label>Program Subject</label><br>
      <input type="text" id="subject" name="Subject" value="<?php echo $subject; ?>" readonly><br><br>

      <label>Email</label><br>
      <input type="text" id="injury" name="Injury" value="<?php echo $injury; ?>" readonly><br><br>  

      <label>Content</label><br>
      <input type="text" id="content" name="Content" value="<?php echo $content; ?>" readonly><br><br>

      <label style="font-size:20px;">Status</label><br>
      Checked <input type="radio" name="status" value="Checked"> 
      Not Checked <input type="radio" name="status" value="Not Checked Yet"> <br> 


      <input type="submit" value="Update" name="admincrbtn" > 
 
   
  </form> 
 </div>
  
  </div>

   <!----------Footer--------> 
 <?php
  include'footer.php';
 
 ?>
 </footer>
 



 </body>
</html>