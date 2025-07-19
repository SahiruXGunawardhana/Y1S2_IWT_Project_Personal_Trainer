
<?php

include 'config.php';

if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['mobile'];
    $password = $_POST['password'];
    $duplicate = mysqli_query($con,"SELECT * FROM member WHERE `Email` = '$email' OR `Password` = '$password'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Email or password is already taken');
        window.location.href ='signupform.php';
        </script>";

        exit();

    }
    else{
        $sql = "insert into `member` (`First Name`,`Last Name`,`Email`,`Address`,`Contact Number`,`Password`)
        values('$fname','$lname','$email','$address','$contact','$password')";
    
        $result=mysqli_query($con,$sql);
    
        if($result){
            echo
           
            header("location: display.php?mail=$email");
        }
        else{
            die(mysqli_error($con));
        }
    }


   
}

?>














