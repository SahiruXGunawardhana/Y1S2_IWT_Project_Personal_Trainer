<?php

require 'config.php';

$fullname = $_POST["txtName"];
$mbNumber = $_POST["mobile"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$msg = $_POST["msg"];

$sql="INSERT INTO message(MID,fullName,mobileNo,email,subject,content)VALUES('','$fullname','$mbNumber','$email','$subject','$msg')";

if($con->query($sql))
{
    echo "<script>alert('Insert succesfull');
    window.location.href='contactUs.php'</script>";
} 
else
{
    echo "Error".$con->error;
}

$con->close();

?>