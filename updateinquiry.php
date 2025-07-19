<?php
 require"config.php";
?>

<?php
 
 if(isset($_GET['admincrbtn'])){

  $inqid = $_GET['ID'];
  $status = $_GET['status'];


  $sql = "UPDATE inq SET
	  Status = '$status'
	  WHERE InqId = '$inqid'";

  if($con->query($sql)){
     echo"<script> alert('Record Updated Successfully') </script>";
     header("location:viewinquiry.php");
  }
  else{
     echo "<script>alert'Error in deletion'+$con->error</script>";
  }
 }
?>