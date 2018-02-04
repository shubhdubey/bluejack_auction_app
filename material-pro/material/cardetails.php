<?php
ob_start();
include_once('webservices/config.php');
include_once('webservices/function.php');
date_default_timezone_set('Asia/Kolkata');

if($_SERVER['REQUEST_METHOD'] == "GET") {
    $usertoken = $_GET['usertoken'];
    $userkey = $_GET['userkey'];
    $username = $_GET['username'];
	$carid = $_GET['carid'];

    $sql = "Select Id,username,usertoken,userkey from tbltoken where username='$username' and usertoken='$usertoken' and userkey='$userkey' and delid=0";
    $run_query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($run_query);
    $checkrow = mysqli_num_rows($run_query);
    if ($checkrow > 0) {
        $sql2 = "SELECT id, carid, brandname, carmake, carmodel, modelyear, carnumber, regstate, demandprice,currentbid, accidental, cng, color, cengine, fuel, insurance, insurancetype, kms, light, owner, paint, rfc, rusting, suspension, testdriveresult, tyres, windowsshield, workdoneoncar, remarks, cstatus, bidstarttime, bidendtime, livetimeleft, maxbid, minbid FROM carmaster WHERE cstatus = 1 and carid='$carid'";
		$sql3 = "Select imagepath from carimage where carid='$carid'";
		$sql4 = "Select rfcdetails,price from rfcdetails where carid='$carid'";
        $run_query2 = mysqli_query($conn, $sql2);
        //$row2 = mysqli_fetch_assoc($run_query2);
        $checkrow2 = mysqli_num_rows($run_query2); 
		$run_query3 = mysqli_query($conn, $sql3);
		$run_query4 = mysqli_query($conn, $sql4);
        //$row3 = mysqli_fetch_assoc($run_query3);
		//$rows3 = mysqli_fetch_array($run_query3);
        $checkrow3 = mysqli_num_rows($run_query3);
		$datas = array();
		$img = array();
		$rfc = array();
		$test = array();
        $i = 0;
        if ($checkrow2 > 0) {
			while ($row3 = mysqli_fetch_assoc($run_query3)) {
                $img[] = $row3;
            }
			while ($row4 = mysqli_fetch_assoc($run_query4)) {
                $rfc[] = $row4;
            }
            while ($row2 = mysqli_fetch_array($run_query2)) {
               // $datas[] = $row2;
			   $datas[] = array(
					'id'=> $row2['id'],
					'carid'=> $row2['carid'],
					'brandname'=>$row2['brandname'],
					'carmake'=>$row2['carmake'],
					'carmodel'=>$row2['carmodel'],
					'modelyear'=>$row2['modelyear'],
					'carnumber'=>$row2['carnumber'],
					'regstate'=>$row2['regstate'],
					'demandprice'=> $row2['demandprice'],
					'currentbid'=>$row2['currentbid'],
					'accidental'=>$row2['accidental'],
					'cng'=>$row2['cng'],
					'color'=>$row2['color'],
					'cengine'=>$row2['cengine'],
					'fuel'=>$row2['fuel'],
					'insurance'=>$row2['insurance'],
					'insurancetype'=>$row2['insurancetype'],
					'kms'=>$row2['kms'],
					'light'=>$row2['light'],
					'owner'=>$row2['owner'],
					'paint'=>$row2['paint'],
					'rfc'=>$row2['rfc'],
					'rfcdetails'=>$rfc,
					'rusting'=>$row2['rusting'],
					'suspension'=>$row2['suspension'],
					'testdriveresult'=>$row2['testdriveresult'],
					'tyres'=>$row2['tyres'],
					'windowsshield'=>$row2['windowsshield'],
					'workdoneoncar'=>$row2['workdoneoncar'],
					'remarks'=>$row2['remarks'],
					'cstatus'=>$row2['cstatus'],
					'currentbid'=>$row2['currentbid'],
					'bidstarttime'=>$row2['bidstarttime'],
					'bidendtime'=>$row2['bidendtime'],
					'livetimeleft'=>$row2['livetimeleft'],
					'maxbid'=>$row2['maxbid'],
					'minbid'=>$row2['minbid'],
					'imageid'=>$row2['imageid'],
					'images'=>$img
			   );
            }
			

			//$datas = array_merge($datas,$img);
			
			
            $json = array("status" => 1, "msg" => "Data Fetch Successfully", "data" => $datas);
        } else {
            $json = array("status" => 0, "msg" => "No Data Found",);
        }
    } else {
        $json = array("status" => 0, "msg" => "User Yoken & Key Not Matched");
    }
}
else{
    $json = array("status" => 0, "msg" => "Bad request Method");
}

@mysqli_close($conn);
/*Output Header */
header('Content-type: application/json');
echo json_encode($json,true);
?>