<?php require_once("config.php"); ?>
<?php
$departid = $_GET['id'];   // department id

$sql = "SELECT id,carvariant FROM carvariant WHERE carmodelid=".$departid;

$result = mysqli_query($conn,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $userid = $row['id'];
    $name = $row['carvariant'];

    $users_arr[] = array("id" => $userid, "name" => $name);
}

// encoding array to json format
echo json_encode($users_arr);
?>