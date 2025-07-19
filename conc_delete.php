<?php
    require 'config.php';
?>

<?php
    $messgeID=$_GET['msgID'];

    $sql = "DELETE FROM message WHERE MID='$messgeID'";

    if($con->query($sql))
    {
        echo "<script>alert('Delete successful');
        window.location.href='conc_read.php'</script>";
    }
    else
    {
        echo "error on delete";
    }



    $con->close();
?>