 <?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
 <head>
  <title> Sign-up</title>
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
        <form action="signup.php" method="post" onsubmit="return checkPassword();">
            <div class="personal-details">
                
                
                    <label>First Name:</label>
                    <input type="text" placeholder="First name" name="fname"  class="input-field" required>
                    <label>Last Name:</label>
                    <input type="text" placeholder="Last name" name="lname"  class="input-field" required><br><br>
                
    
                <label>Enter your email:</label>
                    <input type="email" name="email" placeholder="Abc123@gmail.com" class="input-field" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
                
                
                <label>Address:</label><br>
                <textarea name="address" rows="8" cols="70" style="background-color: rgb(248, 233, 202);" required></textarea><br><br>

                
                Contact Number:<br>
                    <input type="phone" name="mobile" placeholder="077-xxxxxxx" class="input-field" pattern="[0-9]{10}" required><br><br>
                
	            
                
                Password:<br>
                
                    <input type="password" id="pwd" name="password" class="input-field" required><br>
            

	            Re-enter Password:<br>
                
                    <input type="password" id="pwd1" name="password" class="input-field"  required><br><br>
                
	            
                <input type="checkbox" id="checkbox1" >I Accept terms and conditions<br>
                <input type="checkbox" id="checkbox2">I Accept privacy policy<br><br>
                <center><input type="submit" value="Signup" id="btn-signup" name="signup" class="sign"  disabled></center>

	
	

            </div>
                

            
        </form>
    
    </div>
  


 <?php
  include'homefooter.php';
 ?>
 


 <script src="JavaScripts/signup.js"></script>
 </body>
</html>