<?php
 require"config.php";
?>

<?php
 
 if(isset($_POST["admincrbtn"])){


  $name = $_POST["name"];
  $price = $_POST["price"];
  $qty = $_POST["qty"];


  $sql = "INSERT INTO item(Name,UnitPrice,Quantity) VALUES ('$name','$price','$qty')";
 
  if($con->query($sql)){
   echo "<script> alert('Inserted Successfully');</script>";
   header("Location:viewitem.php");
  }
  else{
   echo "Error".$con->error."<br>";
  }

  
 }
 
 $con->close();
?>