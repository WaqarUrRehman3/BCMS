<?php
session_start();

$redirect_page_success = 'http://tiffinwala.pk/web/t_display.php';
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



$tctcNum = $_POST["tcNum"];
$tctid = $_POST["tid"];
$tctAccNum = $_POST["tAccNum"];
$tctAmount = $_POST["tAmount"];
$tctDate= $_POST["tDate"];


$id = addslashes($_REQUEST['transaction_id']);

$sql = "UPDATE transactions SET dbtCustNum = '{$tctcNum}' , dbtID = '{$tctid}', dbtAccNum = '{$tctAccNum}', dbtAmount = '{$tctAmount}', dbtDate = '{$tctDate}' WHERE tID='$id'";

if ($conn->query($sql) === TRUE){
	header('Location:'.$redirect_page_success);
	}
	else{
		echo "Error: " . $conn->error;
}
?>
