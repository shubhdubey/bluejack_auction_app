<?php
include_once('config.php');
$sql='SELECT showroomname,COUNT(dealtitle) as dealtitle FROM finallead INNER JOIN showroommaster WHERE finallead.orgname=showroommaster.id AND spocname = 23 GROUP BY orgname;';
$query=mysqli_query($conn,$sql);
$labels=array();
$i=0;
$dataset = array();
$color = array();

function rand_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

while($row=mysqli_fetch_array($query)){
	$labels[$i]=$row['showroomname'];
	$data[$i]=$row['dealtitle'];
	$color[$i]=rand_color();
	$i++;

}


$arrDatasets =  array(array('label' => "Showrooms", 'backgroundColor'=> $color, 'data' => $data));


$arrReturn = array('labels' => $labels, 'datasets' => $arrDatasets);

echo json_encode($arrReturn);

?>