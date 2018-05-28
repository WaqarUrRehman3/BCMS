<?php
session_start();

$redirect_page_success = 'http://tiffinwala.pk/web/c_display.php';
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


$id = addslashes($_REQUEST['customer_id']);

$sql = "DELETE from customers WHERE Cid='$id'";

if ($conn->query($sql) === TRUE){
	header('Location:'.$redirect_page_success);
	}
	else{
		echo "Error: " . $conn->error;
}
?>
