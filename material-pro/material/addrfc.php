<?php
session_start();
include_once('config.php');
?>
<?php
$carid=$_GET['carid'];
$detail=$_GET['detail'];
$price=$_GET['amount'];
$delid=$_SESSION['userid'];


$sql="INSERT INTO `rfcdetails`(`carid`, `rfcdetails`, `price`, `delid`) VALUES ('$carid','$detail','$price','$delid')";

if(mysqli_query($conn,$sql)){
	$json = array('rfcstatus' => 1 );
}
else{
	$json = array('rfcstatus' => 0 );
}


@mysqli_close($conn);

 echo json_encode($json);

?>