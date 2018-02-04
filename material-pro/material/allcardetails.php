<?php
ob_start();
include_once('webservices/config.php');
include_once('webservices/function.php');
date_default_timezone_set('Asia/Kolkata');

if($_SERVER['REQUEST_METHOD'] == "GET") {
    $usertoken = $_GET['usertoken'];
    $userkey = $_GET['userkey'];
    $username = $_GET['username'];

    $sql = "Select Id,username,usertoken,userkey from tbltoken where username='$username' and usertoken='$usertoken' and userkey='$userkey' and delid=0";
    $run_query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($run_query);
    $checkrow = mysqli_num_rows($run_query);
    if ($checkrow > 0) {
        $sql2 = "SELECT id, carid, brandname, carmake, carmodel, modelyear, carnumber, regstate, demandprice,currentbid, accidental, cng, color, cengine, fuel, insurance, insurancetype, kms, light, owner, paint, rfc, rusting, suspension, testdriveresult, tyres, windowsshield, workdoneoncar, remarks, cstatus, bidstarttime, bidendtime, livetimeleft, maxbid, minbid FROM carmaster WHERE cstatus = 1";
		
        $run_query2 = mysqli_query($conn, $sql2);
        //$row2 = mysqli_fetch_assoc($run_query2);
        $checkrow2 = mysqli_num_rows($run_query2); 
		
        //$row3 = mysqli_fetch_assoc($run_query3);
		//$rows3 = mysqli_fetch_array($run_query3);
        $checkrow3 = mysqli_num_rows($run_query3);
		$datas = array();
		$img = array();
		$test = array();
        $i = 1;
        if ($checkrow2 > 0) {
				
            while ($row2 = mysqli_fetch_array($run_query2)) {
				unset($img);
                $id = $row2['id'];
				$sql3 = "Select imagepath from carimage where imageid=$id";
				$run_query3 = mysqli_query($conn, $sql3);
				while ($row3 = mysqli_fetch_assoc($run_query3)) {
					$img[] = $row3;
				}
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
					'fuel'=>$row2['fuel'];
					'rfc'=>$row2['rfc'],
					'owner'=>$row2['owner'],
					'kms'=>$row2['kms'],
					'currentbid'=>$row2['currentbid'],
					'livetimeleft'=>$row2['livetimeleft'],
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