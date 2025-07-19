<?php
 session_start();
 include"config.php";
 
?>

<?php
 
 if(isset($_POST['admincrbtn'])){
  $username = $_POST['mail'];
  $password = $_POST['pass'];

  if($username == NULL){
     echo "<script> alert('Email Required'); </script>";


  }
  else if($password == NULL){
   echo "No Password";

  }
  else{
   $sql = "SELECT * FROM admin WHERE Email = '$username' AND Password = '$password'";
 
   $result = $con->query($sql);
 
   if($result->num_rows === 1){
     echo"<script> alert('LogIn Successful'); </script>";
  
   $row = $result->fetch_assoc();

   $_SESSION['Email']=$row['Email'];
   $_SESSION['ID']=$row['AdminID'];
   $_SESSION['Name']=$row['Fullname'];

   header("location:adminportal.php");
    }

   else{
     echo"<script> alert('Incorrect Login Credentials'); 
          window.location.href='adminlogin.php' </script>";

   }
  }
    
 }

 $con->close();
?>