<?php
ini_set('display_errors', 1);
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phoneNum = $_POST['phoneNum'];
$emailAdd = $_POST['emailAdd'];
$discount = $_POST['discount'];

$hostname = "us-cdbr-east-05.cleardb.net";
$username = "b4180e16dfa8b6";
$password = "47f73751";
$db = "heroku_4718b6e92754e42";

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