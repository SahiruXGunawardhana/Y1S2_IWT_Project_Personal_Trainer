<?php
include 'config.php';
/*$_SESSION = [];*/

session_start();

session_unset();
session_destroy();

header("location:login.html");



?>