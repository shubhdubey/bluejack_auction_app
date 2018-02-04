<?php
session_start();
include_once('sconfig.php');

		$name=$_GET['name'];
		$email=$_GET['email'];
		$password=$_GET['password'];
		$contact_no=$_GET['contact_no'];
		$dealership=$_GET['dealership'];
		$gender=$_GET['gender'];
		$address=$_GET['address'];
		$time=time();
		$dob=$_GET['dob'];
		/*$bidstartprice=$_GET['bidstartprice'];
		$accidental=$_GET['accidental'];
		$service = $_GET['service'];
		$cng=$_GET['cng'];
		$color=$_GET['color'];
		$cengine=$_GET['cengine'];
		$fuel=$_GET['fuel'];
		$insurance=$_GET['insurance'];
		$insurancetype=$_GET['insurancetype'];
		$kms=$_GET['kms'];
		$light=$_GET['light'];
		$owner=$_GET['owner'];
		$paint=$_GET['paint'];
		$rfc=$_GET['rfc'];
		$rusting=$_GET['rusting'];
		$suspension=$_GET['suspension'];
		$testdriveresult=$_GET['testdriveresult'];
		$tyres=$_GET['tyres'];
		$windowsshield=$_GET['windowsshield'];
		$workdoneoncar=$_GET['workdoneoncar'];
		$remarks=$_GET['remarks'];
		$bidstartdate=$_GET['bidstartdate'];
		$bidstarttime=$_GET['bidstarttime'];
		$bidenddate=$_GET['bidenddate'];	
		$bidendtime=$_GET['bidendtime'];
		$maxbid=$_GET['maxbid'];
		$minbid=$_GET['minbid'];

$owner = (int)$owner;

//Bid Start time to millisecond

$starttime="bidstartdate"." "."bidstarttime".":00";
$starttime=1000*strtotime($starttime);




// Bid End time to millisecond

$endtime="bidenddate"." "."bidendtime".":00";
$endtime=1000*strtotime($endtime);
*/


$sql="INSERT INTO `dealermaster`( `dname`, `demail`, `dpass`, `dmobile`, `dealership`, `gender`, `location`,`createdon`,`dob`) VALUES ('$name','$email','$password','$contact_no','$dealership','$gender','$address','$time','$dob')";

if(mysqli_query($conn,$sql)){
	$json = array('status' => 1);

}
@mysqli_close($conn);

 echo json_encode($json);

?>