<?php
 require"config.php";
?>

<?php
 
 if(isset($_GET['admincrbtn'])){

  $admin = $_GET['ID'];
  $name = $_GET['name'];
  $mobile = $_GET['mobile'];

  $sql = "UPDATE admin SET
	  Fullname = '$name',
	  Mobile = '$mobile'
	  WHERE AdminID = '$admin'";

  if($con->query($sql)){
     echo"<script> alert('Record Updated Successfully') </script>";
     header("location:viewadmin.php");
  }
  else{
     echo "<script>alert'Error in deletion'+$con->error</script>";
  }
 }
?>