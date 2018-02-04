<?php
include_once('webservices\config.php');
function get_tokendetails($token,$key,$username)
{
 $qur = mysqli_query($conn,"CALL get_tokendetails('$username','$token','$key')");
 
	 $row = mysqli_fetch_assoc($qur);
	 $checkrow = mysqli_num_rows($qur);
	 if($checkrow > 0)
	 {
		 return 1;
	 }
	 //return $count;
 
 else
 {
	 echo "Bad Request";
 }
}

?>