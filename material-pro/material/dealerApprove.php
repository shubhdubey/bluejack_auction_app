<?php
session_start();
include_once('sconfig.php');
$id=(int)$_GET['id'];
$value=(int)$_GET['value'];
$sql="UPDATE `dealermaster` SET `approved`=$value where `id`=$id ";

if(mysqli_query($conn,$sql)){
	$json = array('status' => 1);

}
else{
	$json='gi';
}
@mysqli_close($conn);

echo json_encode($json);
?>