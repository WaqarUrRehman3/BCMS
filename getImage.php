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

$image = "SELECT * from customers WHERE Cid='$id'";
$result = mysqli_query($conn,$image);
	$image = mysqli_fetch_assoc($result);
	$image = $image['CdbImage'];

	header("Content-type:image/jpeg");

	echo $image;
	
?>
