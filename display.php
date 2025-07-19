<?php
    include 'config.php';
?>
<?php
  session_start();
?>

<?php
 if(isset($_SESSION['login'])){
	$id = $_SESSION['Member_ID']; 
	$sql = "SELECT * FROM member WHERE Member_ID = $id";
	
	if($result = $con->query($sql)){
			$row = $result->fetch_assoc();
	
		$mail = $row['Email'];
	}
	
  }
  else if(isset($_GET['mail'])){
	  
 $mail = $_GET['mail'];
   }
  else{
	  header('location:login.html');
  }
  
?>




<!DOCTYPE html>
<html>
 <head>
  <title>Member details</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/display.css">

  <script src="JavaScripts/Home.js"></script>

 </head>
 <body>

 <?php
  include'homeheader.php';
 ?>

    
      <hr id="hr1">
      <div class="table-container">
      
      
      <table border="1"  style="background-color:#fff; border:none; ">
	   <caption class="captionmyprofile">My Profile </caption>
        <tr >
            <th class="display-table-head">Member ID</th>
            <th class="display-table-head">First Name</th>
            <th class="display-table-head">Last Name</th>
            <th class="display-table-head">Email</th>
            <th class="display-table-head">Address</th>
            <th class="display-table-head">Contact Number</th>
            <th class="display-table-head">Password</th>
            <th class="display-table-head">Operation</th>
            
        </tr>
      
            <?php
                $sql = "Select * from `member`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['Member_ID'];
                        $firstName = $row['First Name'];
                        $lastName = $row['Last Name'];
                        $email = $row['Email'];
                        $address = $row['Address'];
                        $contactNum = $row['Contact Number'];
                        $password = $row['Password'];
					if($email == $mail){
                       echo "<tr>";
                       echo "<td class='display-table-data'>".$id."</td>";
                       echo "<td class='display-table-data'>".$firstName."</td>";
                       echo "<td class='display-table-data'>".$lastName."</td>";
                       echo "<td class='display-table-data'>".$email."</td>";
                       echo "<td class='display-table-data'>".$address."</td>";
                       echo "<td class='display-table-data'>".$contactNum ."</td>";
                       echo "<td class='display-table-data'>". $password."</td>";
                       echo "<td class='display-table-data'>";
                     
                       echo "<a href='edit.php?editid=".$id."' style='text-decoration:none; color:white;'>";
                       echo "<button  name='edit' style='padding:10px; width:100px; background-color:green; margin:10px;'>";
                       echo "Edit";
                       echo  "</a>";
                       echo "</button>";
                       
                       echo "<a href='delete.php?deleteid=".$id."' onclick=\"return confirm('Are you sure you want to delete this record?');\" style='text-decoration:none; color:white;'>";
                       echo "<button  name='delete' style='padding:10px; width:100px; background-color:red; margin:10px;'>";
                       
                       echo "Delete";
                       echo  "</a>";
                       echo "</button>";
                       echo "</td>";
                       echo "</tr>";
                       
                    }
                        
                
                

                    }
                    
                }
            ?>

            
            
      </table>
      </div>
      
      

 <?php
  include'homefooter.php';
 ?>
 

 </body>
</html>

