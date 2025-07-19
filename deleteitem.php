<?php
 require"config.php";
?>

<?php
 
  $id = $_GET['ID'];

  $sql = "DELETE FROM item WHERE ItemID = $id";

  if($con->query($sql)){
     header("location:viewitem.php");
  }
  else{
     echo "<script>alert'Error in deletion'+$con->error</script>";
  }

?>