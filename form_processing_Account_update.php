<?php
session_start();

$redirect_page_success = 'http://tiffinwala.pk/web/acc_display.php';
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



$acNum = $_POST["cNum"];
$acAccNum = $_POST["cAccNum"];
$acAccType = $_POST["cAccType"];
$acAccOpDate = $_POST["cAccOpDate"];
$acBal= $_POST["cBal"];



$id = addslashes($_REQUEST['account_id']);

$sql = "UPDATE accounts SET aCustAccID = '{$acNum}' , aAccNum = '{$acAccNum}', aAccType = '{$acAccType}', aAccOpDate = '{$acAccOpDate}', aBalance = '{$acBal}' WHERE AccID='$id'";

if ($conn->query($sql) === TRUE){
	header('Location:'.$redirect_page_success);
	}
	else{
		echo "Error: " . $conn->error;
}
?>
