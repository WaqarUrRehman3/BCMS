<?php
session_start();

$redirect_page_success = 'http://tiffinwala.pk/web/i_display.php';
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


$icicNum = $_POST["icNum"];
$iciAccNum = $_POST["iAccNum"];
$iciName = $_POST["iName"];


$sql = "INSERT INTO introducers (dbiCustNum, dbiIntoAccNum, dbiName)
VALUES ('{$icicNum}', '{$iciAccNum}', '{$iciName}')";

if ($conn->query($sql) === TRUE){
	header('Location:'.$redirect_page_success);
	}
	else{
		echo "Error: " . $conn->error;
}
?>
