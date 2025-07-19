<?php 
 session_start();
 ?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/contactUs.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="JavaScripts/Home.js"></script>
  <script src="JavaScripts/contactUs.js"></script>

 </head>
 <body>

 <?php
  include'homeheader.php';
 ?>
    
       <hr id="hr1">
<div id="homebg">
       <div id="contactHeading">
              <div class="contactTxt">
                  <h1>Contact Us</h1>
                  <h3><i>We would love to hear from you...!</i></h3>
              </div>
       </div>
       
       <div class="Container">
              <div class="conctacForm">
                     <form action="./conc_Insert.php" method="POST" id="contactForm" onsubmit="return handleSubmit()">
                            <fieldset>
                                Full Name:<br>
                                <input class="fldstyles" type="text" name="txtName" maxlength="60" placeholder="Hasith Bandaranayaka" required><br>
                                
                                Mobile Number:<br>
                                <input class="fldstyles" type="tel" name="mobile" maxlength="10" placeholder="0712135689" required><br>

                                Email:<br>
                                <input class="fldstyles" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="mwhasimax24@gmail.com" required><br><br>

                                Subject:<br>
                                <select class="fldstyles" name="subject" required>
                                   <option>General</option>
                                   <option>Trainer info</option>
                                   <option>Technical support</option>
                                   <option>Other</option>
                                </select><br><br>

                                Message:<br>
                                <textarea class="fldstyles" name="msg" rows="8" cols="50" required></textarea>
                                
                                <br>
                                <input type="checkbox" id="checkBox" onclick="enableButton()">I agree to the terms and conditions.<br><br>
                                <input type="submit" value="Send" id="submitBtn" disabled><!-- onclick="handleSubmit()"-->
                                <button class="clearbtn" id="clearBtn" type="reset">Clear All</button>
                            </fieldset>              
                     </form>
              </div>
              <div class="stContent">
                     <i class="fa-solid fa-house"></i>
                     <div class="statTxt">
                            <h5>XYZ Road, ABC building</h5>
                            <p>Dicson road, Colombo 7. </p>
                     </div>
                     <br>
                     <i class="fa-solid fa-phone"></i>
                     <div class="statTxt">
                            <h5>+94 11-2222277</h5>
                            <p>Monday to Saturday ; from 9.00 A.M. to 7.00 P.M</p>
                     </div>
                     <br>
                     <i class="fa-solid fa-envelope"></i>
                     <div class="statTxt">
                            <h5>info@fitnesspro.com</h5>
                            <p>Email us for any of your needs!!</p>
                     </div>
              
                     
              </div>
       </div>
       <div class="location">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110695.45982964912!2d80.01396359150625!3d6.901191880856048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257e4b3558547%3A0x907c87e398505846!2sAUSTENITE%20Muscle%20Gang!5e0!3m2!1sen!2slk!4v1726909255792!5m2!1sen!2slk" 
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

       </div>
</div>

 <?php
  include'homefooter.php';
 ?>
 



 </body>
</html>