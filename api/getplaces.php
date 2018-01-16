<?php

$host = 'https://docs.aws.amazon.com/AmazonRDS/latest/UserGuide/USER_ConnectToInstance.html';
$user = 'shotglas';
$pass = 'Xvr$7&pm';
$db = 'shotglasdb';

$con = mysqli_connect($host,$user,$pass,$db);

if($con) {
	echo "Connection successful"; 
}

$sql = "SELECT * FROM tbl_places";
$query = mysqli_query($con,$sql);
?>