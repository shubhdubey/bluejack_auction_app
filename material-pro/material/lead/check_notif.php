<?php
session_start();
include_once("../config.php");
$t=time();
$sql= "SELECT * from notification";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query)){
	$carid=$row['carid'];
	$dealtitle=$row['dealtitle'];
	$type=$row['type'];
	if($t-$row['time']<1){
		$json = array('status' => 1,'carid'=>$carid,'dealtitle'=>$dealtitle,'type'=>$type );
	}
	else{
		$json = array('status' => 0 );
	}
}

echo json_encode($json);
?>