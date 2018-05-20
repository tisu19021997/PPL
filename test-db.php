<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ppl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO patient(fname, lname, gender, email, password, address, lang) 
VALUES ('John', 'Doe', 'aha','a','a','a','a')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>