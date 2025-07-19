<?php
 require"config.php";
?>

<?php
 
 if(isset($_POST["admincrbtn"])){


  $Fname = $_POST["Fname"];
  $mail = $_POST["Email"];
  $mobile = $_POST["phone"];
  $pass1 = $_POST["pass1"];
  $pass2 = $_POST["pass2"];

 if($pass1 != $pass2){
  echo "<script> alert('Passwords not matching!') </script>";
  header("location:addadmin.html");
 }
 else{

  $sql = "INSERT INTO admin(Fullname,Email,Mobile,Password) VALUES ('$Fname','$mail','$mobile','$pass1')";
 
  if($con->query($sql)){
   echo "<script> alert('Inserted Successfully');</script>";
   header("Location:viewadmin.php");
  }
  else{
   echo "Error".$con->error."<br>";
  }

  }
 }
 
 $con->close();
?>