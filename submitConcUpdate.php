<?php
    require 'config.php';
?>

<?php
    $msg_Id=$_POST['msgID'];
    $full_name=$_POST['upname'];
    $mobile=$_POST['upmobile'];
    $Email=$_POST['email'];
    $subject=$_POST['upsubject'];
    $message=$_POST['upmsg']; 

    $sql = "UPDATE message SET 
        fullName = '$full_name',
        mobileNo = '$mobile',
        email = '$Email',
        subject = '$subject',
        content = '$message'
        WHERE MID = '$msg_Id'";

    if($con->query($sql))
    {
        echo "<script>alert('Update successful')
        window.location.href='conc_read.php'</script>";
    }
    else
    {
        echo "Error".$con->error;
    }

    $con->close();

?>