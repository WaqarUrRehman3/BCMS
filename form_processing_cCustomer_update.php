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


$caccID = $_POST["accID"];
$cname = $_POST["name"];
$cfatherName = $_POST["fatherName"];
$cgender = $_POST["gender"];
$ccnic = $_POST["cnic"];
$cintroducer = $_POST["introducer"];
$cnoOfOwners = $_POST["noOfOwners"];
$cfileToUpload = $_FILES['fileToUpload']['tmp_name'];
$caddress = $_POST["address"];

$id = addslashes($_REQUEST['customer_id']);
$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
$sql = "UPDATE customers SET CdbBankID = '{$caccID}' , CdbName = '{$cname}', CdbFather = '{$cfatherName}', CdbGender = '{$cgender}', CdbCNIC = '{$ccnic}', CdbIntroducer = '{$cintroducer}', CdbOwners = '{$cnoOfOwners}', CdbImage = '{$image}', CdbAddress = '{$caddress}' WHERE Cid='$id'";

if ($conn->query($sql) === TRUE){
	header('Location:'.$redirect_page_success);
	}
	else{
		echo "Error: " . $conn->error;
}
?>
