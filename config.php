<?php
 $server = "localhost";
 $user_name = "root";
 $password = "";
 $data_base = "Personal_Trainer";

 $con = new mysqli($server, $user_name, $password, $data_base, 3307);

 if($con->connect_error){
  die("Connection Error".$con->connect_error);
 }


?>