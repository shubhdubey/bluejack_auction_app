<?php
session_start();
include_once('config.php');


 // Get data
 $demail = $_GET['email'];
 $dpass = $_GET['pass'];

// $json = $demail." and ".$dpass;



	 $sql2 = "SELECT id,useremail,username,departid,roleid,lastlogintime,lastlogouttime FROM usermaster WHERE useremail='$demail' and userpwd='$dpass' and delid=0 ";
	 if(empty($demail) || empty($dpass))
	 {
		// $json = "Empty stuff";
	 }
	 else{
		 
		 $run_query2 = mysqli_query($conn, $sql2);
		 $row2=mysqli_fetch_assoc($run_query2);
		 $checkrow2 = mysqli_num_rows($run_query2);
		 if($checkrow2 > 0)
		 {
		 	$_SESSION['userid']=$row2["id"];
			$json =  array('id' => (int)$row2["id"] );
		 }
		 else{
				$json = array('id' => -1 );

		 }
		 
	 }
	 
	 


@mysqli_close($conn);
 
/* Output header */
 echo json_encode($json);

?>