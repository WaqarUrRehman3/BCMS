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




$id = addslashes($_REQUEST['introducer_id']);

$sql = "UPDATE introducers SET dbiCustNum = '{$icicNum}' , dbiIntoAccNum = '{$iciAccNum}', dbiName = '{$iciName}' WHERE iID='$id'";

if ($conn->query($sql) === TRUE){
	header('Location:'.$redirect_page_success);
	}
	else{
		echo "Error: " . $conn->error;
}
?>
