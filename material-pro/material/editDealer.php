<?php
session_start();
include_once('sconfig.php');

$id=$_GET['id'];


$sql="SELECT * from dealermaster where id='$id'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
$name=$row['dname'];
$email=$row['demail'];
$password=$row['dpass'];
$mobile=$row['dmobile'];
$gender=$row['gender'];
$address=$row['location'];
// $query2=mysqli_query($conn,$sql2);
// $r$sql2="SELECT id,carmodel from carmodel where carmakeid='$modelname'";
// ow2=mysqli_fetch_assoc($query2);
// $carmodel=$row['carmodel'];
// $slq3="SELECT id,carvariant from carvariant where carmodelid='$carmodel'";
// $query3=mysqli_query($conn,$sql3);
// $row3=mysqli_fetch_assoc($query3);

$json = array('name' => $name,
			  'email' => $email,
			  'password' => $password,
			  'mobile' => $mobile,
			  'gender' => $gender,
			  'location' =>$address
			  /*
			  'carnumber' => $row['carnumber'],
			  'regstate' => $row['regstate'],
			  'demandprice' => $row['demandprice'],
			  'bidstartprice' => $row['bidstartprice'],
			  'accidental' => $row['accidental'],
			  'service' => $row['service'],
			  'cng' => $row['cng'], 
			  'color' => $row['color'],
			  'cengine' => $row['cengine'],
			  'fuel' => $row['fuel'],
			  'insurance' => $row['insurance'],
			  'insurancetype' => $row['insurancetype'],
			  'kms' => $row['kms'],
			  'light' => $row['light'],
			  'owner' => $row['owner'],
			  'paint' => $row['paint'],
			  'rfc' => $row['rfc'],
			  'rusting' => $row['rusting'],
			  'suspension' => $row['suspension'],
			  'testdriveresult' => $row['testdriveresult'],
			  'tyres' => $row['tyres'],
			  'remarks' => $row['remarks'],
			  'starttime' => $row['starttime'],
			  'workdoneoncar' => $row['workdoneoncar'],
			  'endtime' => $row['endtime'],
			  'maxbid' => $row['maxbid'],
			  'minbid' => $row['minbid']*/



	);


echo json_encode($json);


?>