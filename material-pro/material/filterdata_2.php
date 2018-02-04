<?php
include("../database_config.php");
$datefrom = $_POST['id'];   // department id
$dateto = $_POST['id2'];
$showroom = $_POST['id3'];
$inspection = $_POST['id4'];

$sql="";
if($datefrom != "" && $dateto != "")
{
	$sql = "SELECT `id`,`orgname`, `dealtitle`, `showroomdemand`, `location`, `contact`, date(leaddate) as leaddate, `carid`, `carnumber`, `carmake`, `carmodel`, `carvariant`, `mfgyear`, `regyear`, `os`, `color`, `km`, `fuel`, `inspected`, `leadstatus` FROM `finallead` WHERE spocname=19 and date(leaddate) BETWEEN '$datefrom' AND '$dateto'";
}

if($showroom != "0")
{
	$sql .=" And orgname='". $showroom ."'";
}

if($inspection != "0")
{
	$sql .=" And leadstatus='". $inspection ."'";
}

$sql .="";
//echo $sql;
//echo $carmake;
//echo $region;

//$sql = "SELECT id,dealerid,dealername,dealermobile,region,make,model,variant,year,odometer,fueltype,owner,registration,color,rfestimate,price,COUNT(dealername) AS dcount from cartransact where region='NCR' group by dealername";

$result = mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($result);
$checksql = mysqli_num_rows($result);
//echo $checksql;
 ?>
                                    
                                        <?php
										if($checksql != 0)
										{
											while($row=mysqli_fetch_array($result))
											 {
												 
												 $datas[] = array(
													'orgname'=> $row['orgname'],
													'dealtitle'=> $row['dealtitle'],
													'showroomdemand'=> $row['showroomdemand'],
													'location'=> $row['location'],
													'contact'=> $row['contact'],
													'leaddate'=> $row['leaddate'],
													'carid'=> $row['carid'],
													'carnumber'=> $row['carnumber'],
													'carmake'=> $row['carmake'],
													'carmodel'=> $row['carmodel'],
													'carvariant'=> $row['carvariant'],
													'mfgyear'=> $row['mfgyear'],
													'regyear'=> $row['regyear'],
													'os'=> $row['os'],
													'color'=> $row['color'],
													'km'=> $row['km'],
													'fuel'=> $row['fuel'],
													'inspected'=> $row['inspected'],
													'leadstatus'=> $row['leadstatus']
											   );
											 }
											 
											 $json = array("data" => $datas);
										}
										else{
											$json = array("data" => "");
										}
										
										@mysqli_close($conn);
/*Output Header */
header('Content-type: application/json');
$jsondata = json_encode($json,true);
file_put_contents("objects.txt",$jsondata);
echo json_encode($json,true);


										
										?>
                                    
									