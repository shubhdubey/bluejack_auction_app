<?php
include_once("config.php");
session_start();

$modelid=(int)$_GET['id'];
$name=$_GET['name'];

$sql="DELETE FROM `carvariant` WHERE carvariant='$name' and carmodelid=$modelid";
if(mysqli_query($conn,$sql)){
	$json = array('status' => 1 );
}
else{
	$json= array('status' => 0 );
}


@mysqli_close($conn);

echo json_encode($json);

?>