<?php
session_start();

$redirect_page_success = 'http://tiffinwala.pk/web/s_display.php';
$servername = "localhost";
$username = "tiffinwa_root";
$password = "helloworld";
$dbName = "tiffinwa_bankcare";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}


$scCustNum = $_POST["scNum"];
$scid = $_POST["sid"];
$scName = $_POST["sName"];
$scDesc = $_POST["sDesc"];


$sql = "INSERT INTO schemes (dbsCustNum, dbsID, dbsName, dbsDesc)
VALUES ('{$scCustNum}', '{$scid}', '{$scName}', '{$scDesc}')";

if ($conn->query($sql) === TRUE){
	header('Location:'.$redirect_page_success);
	}
	else{
		echo "Error: " . $conn->error;
}
?>
