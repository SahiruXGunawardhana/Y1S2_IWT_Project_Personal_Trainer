<?php
    require 'config.php';
	session_start();
?>

<?php
     $msg_Id=$_GET['msgID'];
     $full_name=$_GET['upname'];
     $mobile=$_GET['upmobile'];
     $Email=$_GET['upemail'];
     $subject=$_GET['upsubject'];
     $message=$_GET['upmsg'];   
?>

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/conc_update_table.css">
    <link rel="stylesheet" type="text/css" href="Styles/admin.css">
  <script src="JavaScripts/Home.js"></script>

 </head>
 <body>

 <?php
  include'header.php';
 ?>
    
       <hr id="hr1">
<div id="homebg">
       <div id="contactUpdateHeading">
              <div class="contactTxt">
                  <h1>Contact Us(Update)</h1>   
              </div>
       </div>
       
       <div class="Container">
              <div class="conctacForm">
                     <form action="submitConcUpdate.php" method="POST" id="contactForm">
                            <fieldset>
                                Message ID:<br>
                                <input class="fldstyles" type="text" value="<?php echo "$msg_Id"?>" name="msgID" readonly>

                                Full Name:<br>
                                <input class="fldstyles" type="text" name="upname" value="<?php echo "$full_name"?>" maxlength="60"><br>
                                
                                Mobile Number:<br>
                                <input class="fldstyles" type="tel" name="upmobile" value="<?php echo "0$mobile"?>" maxlength="10"><br>

                                Email:<br>
                                <input class="fldstyles" type="email" name="email" value="<?php echo "$Email"?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" readonly><br><br>

                                Subject:<br>
                                <select class="fldstyles" name="upsubject" value="<?php echo "$subject"?>">
                                   <option>General</option>
                                   <option>Trainer info</option>
                                   <option>Technical support</option>
                                   <option>Other</option>
                                </select><br><br>

                                Message:<br>
                                <textarea class="fldstyles" name="upmsg" rows="8" cols="50" ><?php echo "$message"?></textarea>
                                
                                <br>
                                
                                <input type="submit" value="Update"><!-- onsubmit="handleSubmit()"-->
                                <button class="previousbtn" type="reset">Set to previous</button>
                            </fieldset>              
                     </form>
              </div>
       </div>
       
</div>
<?php
       $con->close();
?>
       
 <?php
  include'footer.php';
 ?>



 </body>
</html>