<?php
session_start();
include_once('config.php');
$name=$_GET['name'];
echo $name;
$sql="INSERT INTO carmake(carmake, delid) VALUES ('$name',0)";
if(mysqli_query($conn,$sql)){
	$json = array('status' => 1 );
}
else{
	$json = array('status' => 0 );
}

@mysqli_close($conn);

echo json_encode($json);
?>