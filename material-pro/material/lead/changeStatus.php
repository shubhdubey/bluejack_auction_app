<?php
session_start();

include_once("../config.php");
$carid=$_GET['id'];
$sql1="SELECT leadstatus,dealtitle FROM finallead WHERE carid='$carid'";
$run_sql1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($run_sql1);
$status=$row1['leadstatus'];
$dealtitle=$row1['dealtitle'];
$t=time();
if($status==1){
	$status=2;
	$json = array('status' => 2, 'dealtitle' => $dealtitle);

	$sql2="INSERT INTO `notification`( `type`, `carid`, `dealtitle`, `time`) VALUES (2,'$carid','$dealtitle',$t) ";
	$query2=mysqli_query($conn,$sql2);
}
else if ($status==2){
	$status=1;
	$json = array('status' => 1, 'dealtitle' => $dealtitle );

	$sql2="INSERT INTO `notification`( `type`, `carid`, `dealtitle`, `time`) VALUES (1,'$carid','$dealtitle',$t) ";
	$query2=mysqli_query($conn,$sql2);
	
}
else{

	$json = array('status' => 3 );
	echo json_encode($json);
}

$sql="UPDATE finallead SET leadstatus='$status' WHERE carid='$carid'";
$run=mysqli_query($conn,$sql);
echo json_encode($json,true);

?>