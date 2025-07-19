<?php
  session_start();
?>

<?php

include 'config.php';

$id = $_GET['editid'];
$sql = "SELECT * FROM `member` WHERE `Member_ID`=$id";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
    $fname = $row['First Name'];
    $lname = $row['Last Name'];
    $email = $row['Email'];
    $address = $row['Address'];
    $contact = $row['Contact Number'];
    $password = $row['Password'];


if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['mobile'];
    $password = $_POST['password'];

   
 







$row = mysqli_fetch_assoc($result);




    $sql = "update `member` set  `Member_ID`=$id,`First Name`='$fname',`Last Name`='$lname',`Email`='$email',`Address`='$address',`Contact Number`='$contact',`Password`='$password' WHERE `Member_ID`=$id";

    $result=mysqli_query($con,$sql);

    if($result){
        
        header("location:display.php?mail=$email");
    }
    else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html>
 <head>
  <title> Update</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/signup.css">
  <script src="JavaScripts/Home.js"></script>
  

 </head>
 <body>

 <?php
  include'homeheader.php';
 ?>

    
      <hr id="hr1">

<div class="signup-container">

        <center><h2>Become a member today!</h2>
        <h3>It's quick and easy</h3></center>
        <form  method="post">
            <div class="personal-details">
                
                
                    <label>First Name:</label>
                    <input type="text" placeholder="First name" name="fname"  class="input-field" value=<?php echo $fname?> required>
                    <label>Last Name:</label>
                    <input type="text" placeholder="Last name" name="lname"  class="input-field" value=<?php echo $lname?> required><br><br>
                
    
                <label>Enter your email:</label>
                    <input type="email" name="email" placeholder="Abc123@gmail.com" class="input-field" value=<?php echo $email?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
                
                
                <label>Address:</label><br>
                <textarea name="address" rows="8" cols="70" style="background-color: rgb(248, 233, 202);"  required><?php echo $address?></textarea><br><br>

                
                Contact Number:<br>
                    <input type="phone" name="mobile" placeholder="077-xxxxxxx" class="input-field" pattern="[0-9]{10}" value=<?php echo $contact?> required><br><br>
                
	            
                
                Password:<br>
                
                    <input type="password" id="pwd" name="password" class="input-field" value=<?php echo $password?> required><br>
            

	            
                
	            
                <input type="checkbox" id="checkbox1" >I Accept terms and conditions<br>
                <input type="checkbox" id="checkbox2">I Accept privacy policy<br><br>
                <center><input type="submit" value="Update" id="btn-signup" name="signup" class="sign"  disabled></center>

	
	

            </div>
                

            
        </form>
    
    </div>
  

 <?php
  include'homefooter.php';
 ?>

 </footer>
 


 <script src="JavaScripts/signup.js"></script>
 </body>
</html>


