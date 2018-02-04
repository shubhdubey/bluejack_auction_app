<?php
session_start();
include_once("config.php");
$id=(int)$_GET['id'];

$sql="DELETE FROM `carmodel` WHERE id=$id";
if( mysqli_query($conn, $sql)){
	$json = array('status' => 1 );
}
else{
	$json = array('status' => 0 );
}

@mysqli_close();

 echo json_encode($json);


?>