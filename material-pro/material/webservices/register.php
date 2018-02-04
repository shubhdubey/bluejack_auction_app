<?php

include_once('config.php');
error_reporting(E_ALL);
//Get variable here Start
$username = isset($_GET['username']) ?
mysqli_real_escape_string($conn,$_GET['username']) : "";
$email = isset($_GET['email']) ?
mysqli_real_escape_string($conn,$_GET['email']) : "";
$password = isset($_GET['password']) ?
mysqli_real_escape_string($conn,$_GET['password']) : "";

//Get variable here End
$insertdata = "Insert into usermaster(`username`,`userpass`,`email`) values ('" . $username . "','". $password ."','". $email ."')";

$query = mysqli_query($conn, $insertdata) or trigger_error(mysqli_error($conn). " ". $query);

echo "$query";



?>