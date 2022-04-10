<?php

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phoneNum = $_POST['phoneNumber'];
$emailAdd = $_POST['emailAddress'];
$discount = $_POST['discounts'];

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