<?php
 session_start();
 
 if(isset($_SESSION['Email'])){
?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/admin.css">
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
 <link rel="stylesheet" type="text/css" href="Styles/Inquiry.css">
 <link rel="stylesheet" type="text/css" href="Styles/adminview.css">


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
  <h2 class="adminhd" > Items </h2>
  <a href="additemsform .php"> <button class="adminopr"> Add Item </button> </a>
  <table border = "1" id="admin_display" width="100%">
   <tr id="inqtablehd">
    <th> ItemId </th>
    <th> Name </th>
    <th> UnitPrice </th>
    <th> Quantity </th>
    <th> Update </th>
    <th>Delete </th>
   </tr>
    <?php
      include("config.php");
    ?>

    <?php
      $sql = "SELECT * FROM item";
      
      $result = $con -> query($sql);

      if($result->num_rows>0){
       while($row = $result->fetch_assoc()){

          $id=$row['ItemID'];
          $name=$row['Name'];
          $price=$row['UnitPrice'];
          $qty=$row['Quantity'];


         echo "<tr><td>". $row['ItemID'] ."</td>  
               <td>".$row['Name']." </td> 
               <td> ".$row['UnitPrice']." </td> 
               <td> ".$row['Quantity'] ."</td>

               <td align='center'> <a href='edititem.php?ID=$id &name=$name &price=$price &qty=$qty'> <button class='adminopr'>Update </button> </a> </td>
               <td align='center'> <a href='deleteitem.php?ID=\"$id\"'> <button class='adminopr'>Delete </button> </a></td></tr>";
        }
       }
     $con->close();
    ?>


  </table>
  
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