<?php
session_start();
include_once('config.php');
$name=$_GET['name'];
$makeid=(int)$_GET['id'];
echo $name;
$sql="INSERT INTO carmodel(carmodel,carmakeid, delid) VALUES ('$name',$makeid,0)";
if(mysqli_query($conn,$sql)){
	$json = array('status' => 1 );
}
else{
	$json = array('status' => 0 );
}

@mysqli_close($conn);

echo json_encode($json);
?>