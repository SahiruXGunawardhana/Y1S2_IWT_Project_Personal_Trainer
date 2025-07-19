<?php


session_start();

include 'config.php';






if(isset($_POST['login'])){
    $myemail = $_POST['mail'];
    $mypassword = $_POST['pass'];
    $result = mysqli_query($con,"SELECT * FROM member WHERE `Email` = '$myemail' OR `Password` = '$mypassword'");
    //$row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($mypassword == $row['Password'] &&  $myemail == $row['Email']){
            $_SESSION['login'] = true;
            $_SESSION['Member_ID'] = $row["Member_ID"];
		
            header("location: logindisplay.php");

        }
        else{
            echo "<script>alert('Wrong Email or password!');
            window.location.href ='login.html';
            </script>";
        }
    }
    else{
       echo "<script> alert('User not registered');
       window.location.href ='login.html';
       </script>";
    }
    
}

?>



<!DOCTYPE html>
<html>
 <head>
  <title> Member Pofile</title>
  <link rel="stylesheet" type="text/css" href="Styles/Home.css">
  <link rel="stylesheet" type="text/css" href="Styles/login.css">
  <script src="JavaScripts/login.js"></script>
  <script src="JavaScripts/Home.js"></script>

 </head>
 <body>


 <?php
  include'homeheader.php';
 ?>

    
      <hr id="hr1">

 <?php
  include'homefooter.php';
 ?>
 



 </body>
</html>