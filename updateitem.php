<?php
 require"config.php";
?>

<?php
 
 if(isset($_GET['admincrbtn'])){

  $id = $_GET['ID'];
  $price = $_GET['price'];
  $qty = $_GET['qty'];

  $sql = "UPDATE item SET
	  UnitPrice = '$price',
	  Quantity = '$qty'
	  WHERE ItemID = '$id'";

  if($con->query($sql)){
     echo"<script> alert('Record Updated Successfully') </script>";
     header("location:viewitem.php");
  }
  else{
     echo "<script>alert'Error in deletion'+$con->error</script>";
  }
 }
?>