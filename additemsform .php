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
  <center><h2 id="inqhead"> Items</h2></center>
  
  <div id="bodyadminforms">

   <!----------Begining of the Item form--------> 
   <form method="post" action="additem.php">

      <h2 class="adminformh2">Add a New Item</h2>
      <label>Item Name</label><br>
      <input type="text" id="Fname" name="name"  required><br><br>

      <label>Unit Price</label><br>
      <input type="text" id="price" name="price"  required><br><br> <br>  

      <label>Quantity</label><br>
      <input type="text" id="qty" name="qty" required><br><br> 


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