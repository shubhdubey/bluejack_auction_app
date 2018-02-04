<?php
 
$data_to_be_pass=$_GET['email'];
$second_data=$_GET['pass'];
 
$res="Data Passed Successfully: ".$data_to_be_pass." and ".$second_data;
echo json_encode($res);
 
 ?>