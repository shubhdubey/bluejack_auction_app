<?php

include_once('webservices/config.php');
include_once('webservices/function.php');

if($_SERVER['REQUEST_METHOD'] == "GET"){
 // Get data
 $usertoken=$_GET['usertoken'];
 $userkey=$_GET['userkey'];
 $username=$_GET['username'];
 $demail = $_GET['demail'];
 $dpass = $_GET['dpass'];

 $sql = "Select Id,username,usertoken,userkey from tbltoken where username='$username' and usertoken='$usertoken' and userkey='$userkey' and delid=0";
 
 $run_query = mysqli_query($conn, $sql);
 $row=mysqli_fetch_assoc($run_query);
 $checkrow = mysqli_num_rows($run_query);
 if($checkrow > 0)
 {

	 $sql2 = "SELECT id, dname, dpass, dmobile, demail, dealership, dob, gender, location, approved, delid, createdon, gcmid FROM dealermaster WHERE demail='$demail' and dpass='$dpass' and delid=0";
	 if(empty($demail) || empty($dpass))
	 {
		 $json = array("status" => 0, "msg" => "delaername or password is empty");
	 }
	 else{
		 
		 $run_query2 = mysqli_query($conn, $sql2);
		 $row2=mysqli_fetch_assoc($run_query2);
		 $checkrow2 = mysqli_num_rows($run_query2);
		 if($checkrow2 > 0)
		 {
			$json = array("status" => 1, "msg" => "successfully login","data"=>$row2);
		 }
		 else{
				$json = array("status" => 0, "msg" => "user not found in records");
		 }
		 
	 }
	 
	 
 }
 else{
		$json = array("status" => 0, "msg" => "User Token & Key Does Not Matched");
}
}

else{
 $json = array("status" => 0, "msg" => "Request method not accepted");
}
 
@mysqli_close($conn);
 
/* Output header */
 header('Content-type: application/json');
 echo json_encode($json);

?>