<?php
ini_set('display_errors', 1);
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phoneNum = $_POST['phoneNum'];
$emailAdd = $_POST['emailAdd'];
$discount = $_POST['discount'];

$hostname = "us-cdbr-east-05.cleardb.net";
$username = "b59b573e6c6aee";
$password = "4b777f16";
$db = "heroku_4859b9997f503e5";

$conn = new mysqli($hostname, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into customer(fName,lName,phoneNumber,emailAddress,discounts) values('$fName','$lName','$phoneNum','$emailAdd','$discount')";

if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$fName.", ".$lName.", ".$phoneNum.", ".$emailAdd.", ".$discount;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>