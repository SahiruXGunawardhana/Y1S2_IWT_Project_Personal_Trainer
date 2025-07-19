<?php
 require"config.php";
?>

<?php
 
  $admin = $_GET['ID'];

  $sql = "DELETE FROM admin WHERE AdminID = $admin";

  if($con->query($sql)){
     header("location:viewadmin.php");
  }
  else{
     echo "<script>alert'Error in deletion'+$con->error</script>";
  }

?>