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
  <h2 class="adminhd" > Admin </h2>
  <a href="addadminform.php"> <button class="adminopr"> Add Admin </button> </a>
  <table border = "1" id="admin_display" width="100%">
   <tr id="inqtablehd">
    <th> AdminId </th>
    <th> Fullname </th>
    <th> Email </th>
    <th> Mobile </th>
    <th> Update </th>
    <th>Delete </th>
   </tr>
    <?php
      include("config.php");
    ?>

    <?php
      $sql = "SELECT * FROM admin";
      
      $result = $con -> query($sql);

      if($result->num_rows>0){
       while($row = $result->fetch_assoc()){

          $id=$row['AdminID'];
          $name=$row['Fullname'];
          $mail=$row['Email'];
          $mobile=$row['Mobile'];


         echo "<tr><td>". $row['AdminID'] ."</td>  
               <td>".$row['Fullname']." </td> 
               <td> ".$row['Email']." </td> 
               <td> ".$row['Mobile'] ."</td>

               <td align='center'> <a href='editadmin.php?ID=$id &name=$name &mail=$mail &mobile=$mobile'> <button class='adminopr'>Update </button> </a> </td>
               <td align='center'> <a href='deleteadmin.php?ID=\"$id\"'> <button class='adminopr'>Delete </button> </a></td></tr>";
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