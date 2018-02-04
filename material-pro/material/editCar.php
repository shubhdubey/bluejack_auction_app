<?php
session_start();
include_once('config.php');
?>

<?php

$id=$_GET['id']; // id value is passed from the editcar ajax call with id = column id of every entry in the database . Now we can use the id to query reagarding the car details.
//echo $id."<br /><br /><br /><br /><br /><br /><br />";

$sql="SELECT * FROM carmaster WHERE id='$id'"; // gives all the information regarding the selected id.
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
$brandname =$row['brandname']; //1
$modelname=$row['carmake']; //3
$variant=$row['carmodel']; //2

$sql2="SELECT id from carmake where id='$brandname'";  // Now carmodel table is queried regarding all the possible models of cars according to the brand selected(already got it from carmaster query above)  
$query2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($query2);
$id2=$row2['id'];

// value in carmake column from the above query is stored in variable modelname. 
$sql3="SELECT id from carmodel where id='$modelname'";  // Now carmodel table is queried regarding all the possible models of cars according to the brand selected(already got it from carmaster query above)  
//$sql5="SELECT carmakeid fromn carmodel where id='$modelname'";
$query3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_assoc($query3); 
$id3 = $row3['id'];
 //carmodel column value is saved in carmodel which is a list of car model names 
$sql4="SELECT carvariant from carvariant where id = '$variant'"; // carvariant is obtained using carmodel value to query in the carvariant table . This query returns a list of car variants
$query4=mysqli_query($conn,$sql4);
$row4=mysqli_fetch_assoc($query4);

$carnumber1 =  $row['carnumber'];
//$brandname1 = $row2['carmake'];
//$carvariant1 = $row4['carvariant'] 
//$carmodel1 = $row3['carmodel']
$brandname1 = $row['brandname'];
$carmodel1 = $row['carmake'];
$carvariant1 = $row['carmodel'];;
$modelyear1 = $row['modelyear'];
$carnumber1 =  $row['carnumber'];
$regState1 = $row['regstate'];
$demandprice1 = $row['demandprice'];
$bidstartprice1 = $row['bidstartprice'];
$accidental1 = $row['accidental'];
$service1 = $row['service'];
$cng1 = $row['cng'];
$color1 = $row['color'];
$cengine1 = $row['cengine'];
$fuel1 = $row['fuel'];
$insurance1 = $row['insurance'];
$insurancetype1 = $row['insurancetype'];
$kms1= $row['kms'];
$light1 = $row['light'];
$owner1 = $row['owner'];
$paint1=$row['paint'];
$rfc1 = $row['rfc'];
$rusting1 = $row['rusting'];
$suspension1 = $row['suspension'];
$testdriverresult1 = $row['testdriveresult'];
$tyres1 = $row['tyres'];
$windowsshield1 = $row['windowsshield'];
$workdoneoncar1 = $row['workdoneoncar'];
$remarks1 =  $row['remarks'];
$starttime1 = $row['bidstarttime'];
$endtime1 = $row['bidendtime'];
$maxbid1 = $row['maxbid'];
$minbid1 = $row['minbid']; 
//'brandname' => $brandname1,
$json = array('brandname' => $brandname1,
			  'carmodel' => $carmodel1,
			  'carvariant' => $carvariant1,
			  'modelyear' => $modelyear1,
			  'regstate' => $regState1,
			  'carnumber' => $carnumber1,
			  'coloR' => $color1,
			  'fuel' => $fuel1,
			  'cng' => $cng1,
			  'owner' => $owner1,
			  'kms' => $kms1,
			  'demandprice' => $demandprice1,
			  'bidstartprice' => $bidstartprice1,
			  'maxbid' => $maxbid1,
			  'minbid' => $minbid1,
			  'accidental' => $accidental1,
			  'cengine' => $cengine1,
			  'suspension' => $suspension1,
			  'paint' => $paint1,
			  'tyres' => $tyres1,
			  'service' => $service1,  
			  'light' => $light1,
			  'insurance' => $insurance1,
			  'insurancetype' => $insurancetype1,
			  'rusting' => $rusting1,
			  'rfc' => $rfc1,
			  'testdriveresult' => $testdriverresult1,
			  'remarks' => $remarks1,
			  'starttime' => $starttime1,
			  'windowsshield' => $windowsshield1,
			  'workdoneoncar' =>$workdoneoncar1,
			  'endtime' => $endtime1
	);


echo json_encode($json,true);


?>