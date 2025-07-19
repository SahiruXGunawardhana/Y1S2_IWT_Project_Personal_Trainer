 <?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/forgotPwd.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="JavaScripts/Home.js"></script>
  <script src="JavaScripts/forgotPwd.js"></script>

 </head>
 <body>

 <?php
  include'homeheader.php';
 ?>
    
      <hr id="hr1">
     
    <div id="homebg">
        <div>
            <h1 class="headtxt"><i>Reset your password with a few easy steps...</i></h1>
            <a href="#help"><button class="helpButton">Help ?</button></a>
        </div>
        <div id="form_container_1">
            <div class="Form_container_2">
                <div>
                    <h2><b style="color:#6a0c59">Forgot  password</b></h2>
                </div>
                <div>
                    <form action="#" method="post">
                        Enter your email:<br>
                        <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="mwshanumax34@gmail.com" oninput="enableButton()"><br><br>
                        <input type="submit" id="submitBtn" name="submit" value="Send" disabled>
                    
                    </form>
                    <div class="links">
                        <a href="login.html"><button class="log_sign">back to log in</button></a>
                        <a href="signupform.php"><button class="log_sign">back to sign up</button></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="helpInstruct" id="help">
            <h3>Need a help ?</h3>
            <i class="fa-solid fa-square"></i>
            <p class="helpTxt">Please enter the email address associated with your account. We will send you a link to reset your password. Make sure to check your spam or junk folder if you don't see the email in your inbox.</p><br><br>
            <i class="fa-solid fa-square"></i>
            <p class="helpTxt">If you no longer have access to this email, please contact our support team for further assistance.</p><br><br>
            <i class="fa-solid fa-square"></i>
            <p class="helpTxt">Remember to check your email and follow the instructions provided in the reset link to create a new password.</p><br><br>
        </div>
    
    </div>


 <?php
  include'homefooter.php';
 ?>
 
 </body>
</html>