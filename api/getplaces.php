<?php

$host = 'shotglasdb.cbletsq5kiwj.ap-southeast-1.rds.amazonaws.com:3306';
$user = 'shotglas';
$pass = 'Xvr$7&pm';
$db = 'shotglasdb';

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];

$con = mysqli_connect($host,$user,$pass,$db);

if($con) {
	echo "Connection successful"; 
}

$sql = "INSERT INTO tbl_places (id, name) VALUES ('$id', '$name')";
$query = mysqli_query($con,$sql);
?>