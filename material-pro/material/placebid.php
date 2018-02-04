<?php
/**
 * Created by PhpStorm.
 * User: Technology
 * Date: 11/29/2016
 * Time: 10:57 AM
 */
include_once('webservices/config.php');
include_once('webservices/function.php');
date_default_timezone_set('Asia/Calcutta');


if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Get data
    $usertoken=$_POST['usertoken'];
    $userkey=$_POST['userkey'];
    $username=$_POST['username'];
    $carid = $_POST['carid'];
	$dealerid = $_POST['dealerid'];
	$bidamount = $_POST['bidamount'];
    $date = date('d-m-Y h:i:s');

    $sql = "Select Id,username,usertoken,userkey from tbltoken where username='$username' and usertoken='$usertoken' and userkey='$userkey' and delid=0";

    $run_query = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($run_query);
    $checkrow = mysqli_num_rows($run_query);
    if($checkrow > 0)
    {
		$sql1 = "Select currentbid,bidstarttime,bidendtime,maxbid,minbid from carmaster where carid = '$carid'";
		$run_query1 = mysqli_query($conn, $sql1);
		$row1= mysqli_fetch_assoc($run_query1);
        $sql2 = "INSERT INTO `bidmaster`(`carid`, `bidamount`, `dealerid`, `datetime`) VALUES ('$carid','$bidamount','$dealerid','$date')";
        $sql3 = "update carmaster set currentbid = '$bidamount',currentbidby ='$dealerid' where carid = '$carid'";
		$maxbid = $row1['maxbid'];
		$minbid = $row1['minbid'];
		$currentbid = $row1['currentbid'];
		$maxbids = ($currentbid + $maxbid);
		$minbids = $currentbid + $minbid;
		if(empty($bidamount))
		{
			$json = array("status" => 0, "msg" => "bid amount cannot be empty.");
		}
		else{
			if($bidamount > $maxbids)
			{
				$json = array("status" => 0, "msg" => "bid amount is higgher than maximum bid");
			}
			else{
				if($bidamount < $minbids)
				{
					$json = array("status" => 0, "msg" => "bid amount is lower than minimum bid");
				}
				else{
					if(empty($carid))
					{
						$json = array("status" => 0, "msg" => "empty carid try again!!!");
					}
					else{

						$qur = mysqli_query($conn, $sql2);

						if($qur)
						{
							mysqli_query($conn, $sql3);
							$json = array("status" => 1, "msg" => "Bids Placed Successfully.");
						}
						else{
							$json = array("status" => 0, "msg" => "Driver Not Punched In");
						}

					}
				}
			}
		}


    }
    else{
        $json = array("status" => 0, "msg" => "User Token & Key Does Not Matched");
    }
}

else{
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysqli_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);

?>