<?php
 require"config.php";
?>

<?php
 
 if(isset($_GET["inqbtn"])){
  $id = $_GET['ID'];
  $subject = $_GET["inqabout"];
  $injury = $_GET["injury"];
  $content = $_GET["inqtextarea"];
  $status = "Not Checked Yet";

  $sql = "INSERT INTO inq(UserID,Subject,Injury,Content,Status) VALUES ('$id','$subject','$injury','$content','$status')";
 
  if($con->query($sql)){
   echo "<script> alert('Inquiry Submitted'); 
         window.location.href='Home.php'; </script>";

  }
  else{
   echo "Error".$con->error."<br>";
  }
 }

 $con->close();
?>