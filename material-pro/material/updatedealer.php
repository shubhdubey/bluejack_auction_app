<?php
session_start();
include_once('sconfig.php');

		$name=$_GET['name'];
		$email=$_GET['email'];
		$password=$_GET['password'];
		$contact_no=$_GET['contact_no'];
		$gender=$_GET['gender'];
		$address=$_GET['address'];
		
		$sql="UPDATE `dealermaster` SET `dname`='".$name."' ,`demail`='".$email."',`dpass`='".$password."',`dmobile`='".$contact_no."', `gender`='".$gender."',`location`='".$address."' where `dpass`='".$password."' and `demail`='".$email."'";

if(mysqli_query($conn,$sql)){
	$json = array('status' => 1);

}
else{
	$json='gi';
}
@mysqli_close($conn);

 echo json_encode($json);

?>