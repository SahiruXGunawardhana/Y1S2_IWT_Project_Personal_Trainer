<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE From member WHERE Member_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<script> alert('Record Deleted');
              window.location.href=('login.html'); </script>";
    }
    else{
        die(mysqli_error($con));
    }
}

?>