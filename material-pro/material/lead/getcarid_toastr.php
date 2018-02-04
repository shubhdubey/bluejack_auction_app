<?php
session_start();

include_once("../config.php");
$carid=$_GET['id'];
$sql1="SELECT carid,dealtitle FROM finallead WHERE carid='$carid'";
$run_sql1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($run_sql1);
$car_id=$row1['carid'];
$deal_title=$row1['dealtitle'];

$json = array('status' => 1,'carid'=>$car_id, 'dealtitle'=>$deal_title );

echo json_encode($json,true);


?>