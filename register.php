<?php
/**
 * REGISTRATION
 *
 * @package ppl
 */

//Default database config
include_once "database-config.php";

/**
 * PATIENT REGISTRATION
 */
//Method check and get form data
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	//Patient Name
	$fname = test_input( $_POST["fname"] );
	$lname = test_input( $_POST["lname"] );

	//Patient ID
	$id = test_input( $_POST["id"] );

	//Patient email
	$email = test_input( $_POST["patient_email"] );

	//Patient password
	$pwd = test_input( $_POST["password"] );

	//Patient address
	$address = test_input( ( $_POST["address"] ) );

	//Patient gender
	$gender = test_input( ( $_POST["optradio"] ) );

	//Patient language
	$lang = test_input( ( $_POST["lang"] ) );

}

//Insert into DB
if ( isset( $_POST["register"] ) ) {

	$sql = "INSERT INTO patient(id, fname, lname, gender, email, password, address, lang) 
VALUES ('$id', '$fname', '$lname', '$gender', '$email', '$pwd', '$address','$lang')";

	//Check if id and email unique
	$sql_stmt = "SELECT id, email FROM `patient` WHERE id = '$id' OR email = '$email'";
	echo $sql_stmt;
	$result   = $conn->query($sql_stmt);

}
if ( $result === false) {
	user_error("Query failed " .$conn->error. "<br>");
}
if ( $result->num_rows <= 0 && $conn->query( $sql ) === true ) {

	header("Location: success.php");

} else {

	header("Location: fail.php");
}


$conn->close();

//Input validation
function test_input( $data ) {
	$data = trim( $data );
	$data = stripcslashes( $data );
	$data = htmlspecialchars( $data );

	return $data;
}

