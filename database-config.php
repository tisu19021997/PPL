<?php
/**
 * DATABASE DEFAULT CONFIG
 * @package ppl
 */
// Define database config
define("SEVERNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","ppl");
// Create connection
$conn = new mysqli(SEVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//Input validation
function test_input( $data ) {
	$data = trim( $data );
	$data = stripcslashes( $data );
	$data = htmlspecialchars( $data );
	$data = strip_tags($data);

	return $data;
}

?>