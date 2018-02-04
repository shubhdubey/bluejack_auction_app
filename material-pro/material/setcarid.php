<?php
session_start();
include_once('config.php');
$_SESSION["carid"]= $_GET['id'];
if($_SESSION["carid"]>0)
	$json= array('status' => 1 );
echo json_encode($json);
?>