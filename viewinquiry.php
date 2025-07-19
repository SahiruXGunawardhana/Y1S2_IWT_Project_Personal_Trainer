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
  <h2 class="adminhd" > Inquiry </h2>

  <table border = "1" id="admin_display" width="100%">
   <tr id="inqtablehd">
    <th> InqId </th>
    <th> UserId </th>
    <th> Subject </th>
    <th> Injury </th>
    <th> Content </th>
    <th> Status </th>
    <th> Update </th>
    <th>Delete </th>
   </tr>
    <?php
      include("config.php");
    ?>

    <?php
      $sql = "SELECT * FROM inq";
      
      $result = $con -> query($sql);

      if($result->num_rows>0){
       while($row = $result->fetch_assoc()){
		
		$id = $row['InqId'];
                $userid = $row['UserID'];
		$subject = $row['Subject'];
		$injury = $row['Injury'];
		$content = $row['Content'];
		
         echo "<tr><td>". $id ."</td> 
               <td>".$row['UserID']." </td>  
               <td>".$row['Subject']." </td> 
               <td> ".$row['Injury']." </td> 
               <td> ".$row['Content'] ."</td>
               <td> ".$row['Status'] ."</td>
               <td align='center'><a href='editinquiry.php?ID=$id &UserID=$userid &Subject=$subject &Injury=$injury &Content=$content'> <button class='adminopr'>Update </button> </a> </td>
               <td align='center'> <a href='deleteinquiry.php?ID=\"$id\"'> <button class='adminopr' name='deleteinq'>Delete  </button> </a> </td>  </tr>";
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