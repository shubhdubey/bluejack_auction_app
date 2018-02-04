
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbluejack";

//$db_host = "localhost";

//$db_username = "JaaduAdmin"

//$db_pass = "Admin@123";

//$db_name = "test12"

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//mysqli_connect("$db_host","$db_username","$db_pass") or die("Could not connect to mysql");

//mysqli_select_db("$db_name") or die("no database");

?>