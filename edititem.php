 <?php
  session_start();
 ?>

<?php
 include"config.php";
?>
<?php
 $id = $_GET['ID'];
 $name = $_GET['name'];
 $price = $_GET['price'];
 $qty = $_GET['qty'];

 
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
  <center><h2 id="inqhead"> Items</h2></center>
  
  <div id="bodyeditforms">

   <!----------Begining of the inquiry form--------> 
   <form method="get" action="updateitem.php">

      <h2 class="adminformh2">Update Item</h2>

      <label>Admin ID</label><br>
      <input type="text" id="pass2" name="ID" value="<?php echo $id; ?>" readonly><br><br> 

      <label>Full Name</label><br>
      <input type="text" id="name" name="name" value="<?php echo $name; ?>" readonly><br><br>

      <label>UnitPrice</label><br>
      <input type="text" id="Email" name="price" value="<?php echo $price; ?>" ><br><br> <br>  

      <label>Quantity</label><br>
      <input type="text" id="phone" name="qty" value="<?php echo $qty; ?>"><br><br> 


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