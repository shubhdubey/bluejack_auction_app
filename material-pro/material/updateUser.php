<?php
session_start();
include_once('sconfig.php');

		$name=$_GET['name'];
		$email=$_GET['email'];
		$password=$_GET['password'];
		$contact=$_GET['contact'];
		$type=$_GET['type'];
		$address=$_GET['address'];
		
		$sql="UPDATE `usermaster` SET `username`='".$name."' ,`useremail`='".$email."',`userpwd`='".$password."',`contact`='".$contact."', `roleid`='".$type."',`address`='".$address."' where `userpwd`='".$password."' and `useremail`='".$email."'";

if(mysqli_query($conn,$sql)){
	$json = array('status' => 1);

}
else{
	$json='gi';
}
@mysqli_close($conn);

 echo json_encode($json);

?>