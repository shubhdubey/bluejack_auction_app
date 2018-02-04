<?php
session_start();
include_once("config.php");
echo "Working just fine"
?>

<?php
		$brandname=(int) $_POST['brandname'];
		$carmake=(int) $_POST['carmake'];
		$carmodel=(int) $_POST['carmodel'];
		$modelyear=$_POST['modelyear'];
		$carnumber=$_POST['carnumber'];
		$regstate=$_PSOT['regstate'];
		$demandprice=$_POST['demandprice'];
		$bidstartprice=$_POST['bidstartprice'];
		$accidental=$_POST['accidental'];
		$service = $_GET['service'];
		$cng=$_GET['cng'];
		$color=$_GET['color'];
		$cengine=$_GET['cengine'];
		$fuel=$_GET['fuel'];
		$insurance=$_GET['insurance'];
		$insurancetype=$_GET['insurancetype'];
		$kms=$_GET['kms'];
		$light=$_GET['light'];
		$owner=$_GET['owner'];
		$paint=$_GET['paint'];
		$rfc=$_GET['rfc'];
		$rusting=$_GET['rusting'];
		$suspension=$_GET['suspension'];
		$testdriveresult=$_GET['testdriveresult'];
		$tyres=$_GET['tyres'];
		$windowsshield=$_GET['windowsshield'];
		$workdoneoncar=$_GET['workdoneoncar'];
		$remarks=$_GET['remarks'];
		$bidstartdate=$_GET['bidstartdate'];
		$bidstarttime=$_GET['bidstarttime'];
		$bidenddate=$_GET['bidenddate'];
		$bidendtime=$_GET['bidendtime'];
		$maxbid=$_GET['maxbid'];
		$minbid=$_GET['minbid'];
		$owner =(int) $_GET["owner"];
//Bid Start time to millisecond
//$starttime="bidstartdate"." "."bidstarttime".":00";
$starttime=12345678890;

// Bid End time to millisecond

//$endtime="bidenddate"." "."bidendtime".":00";
$endtime=87213781333;

$sql="INSERT INTO `carmaster`(`carid`,`brandname`, `carmake`, `carmodel`, `modelyear`, `carnumber`, `regstate`, `demandprice`, `bidstartprice`, `accidental`, `service`, `cng`, `color`, `cengine`, `fuel`, `insurance`, `insurancetype`, `kms`, `light`, `owner`, `paint`, `rfc`, `rusting`, `suspension`, `testdriveresult`, `windowsshield`, `workdoneoncar`, `remarks`, `cstatus`, `bidstarttime`, `bidendtime`, `bidendsec`, `livetimeleft`, `maxbid`, `minbid`) VALUES(123654,$brandname,$carmake,$carmodel,'$modelyear','$carnumber','$regstate','$demandprice','$bidstartprice','$accidental','$service','$cng','$color','$cengine','$fuel','$insurance','$insurancetype','$kms','$light',$owner,'$paint','$rfc','$rusting','$suspension','$testdriveresult','$windowsshield','$workdoneoncar','$remarks',1,'$starttime','$endtime','$endtime','$endtime','$maxbid','$minbid')";
/*mysqli_query($conn,$sql);
if(!mysqli->commit()) {
	echo "Transaction Failed";
} else {
	echo "Transaction Commited!";
}*/

json = array('status' => 1,'carid'=>$sql );
// if(mysqli_query($conn,$sql)) {

// 	$json = array('status' => 1,'carid'=>000 );
// }
// else{
// 	$json = array('status' => 0 );
// }


@mysqli_close($conn);

echo json_encode($json);

?>
