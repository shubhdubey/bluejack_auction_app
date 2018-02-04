<?php
session_start();
include_once('sconfig.php');

$id=$_GET['id'];


$sql="SELECT * from usermaster where id='$id'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
$name=$row['username'];
$email=$row['useremail'];
$contact=$row['contact'];
$address=$row['address'];
$type=$row['roleid'];
$sql2="SELECT role from rolemaster where roleid='$type'";
$query2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($query2);
$typename=$row2['role'];

$json = array('name' => $name,
			  'email' => $email,
			  'contact' => $contact,
			  'type' => $typename,
			  'address' =>$address

	);


echo json_encode($json);


?>