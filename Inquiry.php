
<?php
 include'config.php';
 session_start();
?>

<?php

 if(isset($_SESSION['login'])){
 $id = $_SESSION['Member_ID'];
 $sql = "SELECT * FROM member WHERE Member_ID = $id";
 
 $result = $con->query($sql);
 
 if($result->num_rows>0){
	 $row = $result->fetch_assoc();
	 
	 $ID = $row['Member_ID'];
	 $fname = $row['First Name'];
	 $lname = $row['Last Name'];
	 $mail = $row['Email'];
	 $mobile = $row['Contact Number'];
 }
?> 

<!DOCTYPE html>
<html>
 <head>
  <title> Fitness Flame</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/Inquiry.css">
  <script src="JavaScripts/Home.js"></script>
  <script src="JavaScripts/Inquiry.js"></script>

 </head>
 <body>

 <?php
  include'homeheader.php';
 ?>

    
  <hr id="hr1">

   <!----------Begining of the body content--------> 
  <div id="homebg">

   <!----------Header of inquiry page--------> 
   <center><h2 id="inqhead"> Inquiry</h2></center>
  
  <div class="bodyinq">

   <!----------Image in the Inquiry form--------> 
   <img src="Images/Inquiry/inquiry.webp" id="inqimg">

   <!----------Begining of the inquiry form--------> 
   <form method="get" action="addInquiry.php">
    <label class="inqformehd">Make an Inquiry </label><br>
     <p>Make an Inquiry using this form and we will be in touch</p><br>
   
   <table class="inqtbl">
   <tr>
     <label>UserID</label><br>
     <input type="text" id="ID" name="ID" value="<?php echo $ID; ?>" readonly><br><br>  
   </tr>
    <tr>
     <td class="inqtd">
      <label>First Name</label><br>
      <input type="text" id="Fname" name="fname" placeholder="<?php echo $fname; ?>" readonly><br><br>
      <label>Email</label><br>
      <input type="email" id="Email" name="mail" placeholder="<?php echo $mail; ?>" readonly><br><br>    
     </td>
     <td class="inqtd">
      <label>Last Name</label><br>
      <input type="text" id="Lname" name="lname" placeholder="<?php echo $lname; ?>" readonly><br><br>
      <label>Mobile</label><br>
      <input type="tel" id="phone" name="mobile" placeholder="<?php echo $mobile; ?>" readonly><br><br> 
     </td>
   </tr>
  </table>
  
   <label class="inqformehd">My Inquiry </label><br>
   <p>Let us know your inquiry details below and include which service you are interested in.</p><br>

  <table class="inqtbl">
   <tr>
    <td class="inqtd">
     <label>What is your inquiry about?</label><br>
     <select name="inqabout" required>
      <option value="none" selected disabled hidden>Select </option>
      <option value="Cardiovascular Workouts (Cardio)">       Cardiovascular Workouts (Cardio)</option>
      <option value="Flexibility and Balance Workouts">        Flexibility and Balance Workouts</option>  
      <option value="High-Intensity Interval Training (HIIT)"> High-Intensity Interval Training (HIIT)</option>  
     </select><br><br>
  
     <label>Write your inqiury here</label><br>
     <textarea id="inqtextarea" cols="50" rows="10" name="inqtextarea" required>
     </textarea> 

    </td>
    <td class="inqtd">


    
     <label>Do you have an injury?</label><br>
     
      <input type="radio" name="injury" value="Yes" onclick="injury_yes(1)">Yes 
      <input type="radio" name="injury" value="No" >No 
      <input type="radio" name="injury" value="I had" onclick="injury_yes(1)">I had
      <br>
     <div id="inqinjury">
     </div>

     <input type="submit" value="Send Inquiry" name="inqbtn"> 

    </td>
   </tr>
  </table>
   
  </form> 
 </div>
 </div>

   <!----------Footer--------> 
 <?php
  include'homefooter.php';
 ?>
    
 



 </body>
</html>

<?php

 }else
 {
	 header("location:login.html");
 }
 
 ?>