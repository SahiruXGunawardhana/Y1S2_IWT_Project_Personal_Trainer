<?php
 require"config.php";
?>

<?php
 
  $inqid = $_GET['ID'];

  $sql = "DELETE FROM inq WHERE InqId = $inqid";

  if($con->query($sql)){
     header("location:viewinquiry.php");
  }
  else{
     echo "<script>alert'Error in deletion'+$con->error</script>";
  }

?>