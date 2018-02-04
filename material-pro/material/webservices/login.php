<?php

include_once('config.php');
include_once('function.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
 // Get data
 $usertoken = isset($_POST['usertoken']) ? mysql_real_escape_string($_POST['usertoken']) : "";
 $username = isset($_POST['username']) ? mysql_real_escape_string($_POST['username']) : "";
 $userkey = isset($_POST['userkey']) ? mysql_real_escape_string($_POST['userkey']) : "";

$token = get_tokendetails($usertoken,$userkey,$username,$conn);

 if($token == 0)
 {
	 $json = array("status" => 0, "msg" => "Bad Request!");
 }
 else{
 $name = isset($_POST['rname']) ? mysql_real_escape_string($_POST['rname']) : "";
 $password = isset($_POST['rpass']) ? mysql_real_escape_string($_POST['rpass']) : "";
 
 // Insert data into data base
 //$sql = "INSERT INTO `usermaster` (`username`, `userpass`, `email`, `delid`) VALUES ('$name', '$password', '$email');";
 $qur = mysqli_query($conn,"CALL sp_driverlogin('$name','$password')");
 if($qur){
 $json = array("status" => 1, "msg" => "Done User added!");
 }else{
 $json = array("status" => 0, "msg" => "Error adding user!");
 }
 }
}


else{
 $json = array("status" => 0, "msg" => "Request method not accepted");
}
 
@mysql_close($conn);
 
/* Output header */
 header('Content-type: application/json');
 echo json_encode($json);

?>


?>