<?php

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phoneNum = $_POST['phoneNum'];
$emailAdd = $_POST['emailAdd'];

$servername = "us-cdbr-east-05.cleardb.net";
$username = "b59b573e6c6aee";
$password = "4b777f16";
$db = "heroku_4859b9997f503e5";

$conn = new mysqli_connect($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into member(name,age,gender) values('$fName','$lName','$phoneNum','$emailAdd')";

if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$fName.", ".$lName.", ".$phoneNum.", ".$emailAdd;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>