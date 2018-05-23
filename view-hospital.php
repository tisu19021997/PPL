<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once 'database-config.php';

// Check connection
if($conn === false){
	die("ERROR: Could not connect. " . $conn->connect_error);
}

// Attempt select query execution
$sql = "SELECT * FROM hospital";
if($result = $conn->query($sql)){
	if($result->num_rows > 0){
		echo "<table>";
		echo "<tr>";
		echo "<th>ID </th>";
		echo "<th>Password </th>";
		echo "<th>Name </th>";
		echo "<th>Address </th>";
		echo "<th>Hospital Admin Name </th>";
		echo "<th>Hospital Admin Email </th>";
		echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['password'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			echo "<td>" . $row['hospital_admin_name'] . "</td>";
			echo "<td>" . $row['hospital_admin_email'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		// Free result set
		$result->free();
	} else{
		echo "No records matching your query were found.";
	}
} else{
	echo "ERROR: Could not able to execute $sql. " . $conn->error;
}

// Close connection
$conn->close();
