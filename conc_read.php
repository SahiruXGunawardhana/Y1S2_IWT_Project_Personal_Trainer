<?php
       require 'config.php';
	   session_start();
?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/Inquiry.css">
  <link rel="stylesheet" type="text/css" href="Styles/admin.css">
  <link rel="stylesheet" type="text/css" href="Styles/conc_read_table.css">
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
       <div class="table_container">
              <?php
                     $sql = "SELECT * FROM message";

                     $result = $con->query($sql);

                     if($result->num_rows>0)
                     {      
                            echo "<table class='concMsgTble' border='1'style='font-size:20px;font-weight:normal;color:black;'>";
                                   

                            echo "<tr>";
                            echo "<th>MID</th>";
                            echo "<th>Full name</th>";
                            echo "<th>Mobile No</th>";
                            echo "<th>Email</th>";
                            echo "<th>Subject</th>";
                            echo "<th>Content</th>";
                            echo "<th>Update & Delete</th>";
                            echo "<tr>";

                            while($row=$result->fetch_assoc())
                            {      
                                   echo "<tr>";
                                   echo "<td>".$row["MID"]."</td><td>".$row["fullName"]."</td><td>".$row["mobileNo"]."</td><td>".$row["email"]."</td><td>".$row["subject"]."</td><td>".$row["content"]."</td>";
                                   echo "<td><a href='conc_update.php ? msgID=$row[MID] &upname=$row[fullName] &upmobile=$row[mobileNo] &upemail=$row[email] &upsubject=$row[subject] &upmsg=$row[content]'><input class='editbtn' type ='submit' value = 'Edit'></a>";
                                   echo "<a href='conc_delete.php ? msgID=$row[MID]'><input class='deletebtn' type = 'submit' value='Delete'></a></td>";
                                   echo "</tr>";
                            }
                            echo "</table>";
                     }
                     else
                     {
                            echo "No Result";
                     }
                     

                     $con->close();
              ?>
       </div>
   </div>
  
  </div>

   <!----------Footer--------> 
 <?php
  include'footer.php';
 ?>
 



 </body>
</html>