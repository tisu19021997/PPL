<?php
/**
 * Created by PhpStorm.
 * User: Pham
 * Date: 5/21/2018
 * Time: 12:40 AM
 */


//Default database config
include_once "database-config.php";

//Database for new connection
/**
 * PATIENT REGISTRATION
 */
//Method check and get form data
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	/**
	 * HOSPITAL REGISTRATION
	 */

//Hospital Name
	$hosname = test_input( $_POST["hosname"] );

//Hospital ID
	$hosid = test_input( $_POST["hosid"] );

//Hospital password
	$hospwd = test_input( $_POST["hospwd"] );

//Hospital address
	$hosadd = test_input( ( $_POST["hosadd"] ) );

//Hospital Admin Name
	$hosadmin = test_input( ( $_POST["hosadmin"] ) );

//Hospital Admin Email
	$hosemail = test_input( ( $_POST["hosemail"] ) );
}
if ( isset( $_POST["hosregister"] ) ) {

	$sql_hos = "INSERT INTO hospital(id, password, name, address, hospital_admin_name, hospital_admin_email) 
VALUES ('$hosid', '$hospwd', '$hosname', '$hosadd', '$hosadmin', '$hosemail')";
	echo $sql_hos;
	//Check if id and hospital name unique
	$sql_stmt_hos = "SELECT id, name FROM `hospital` WHERE id = '$hosid' OR name = '$hosname'";
	$result_hos   = $conn->query( $sql_stmt_hos );

}
if ( $result_hos === false ) {
	user_error( "Query failed " . $conn->error . "<br>" );
}
if ( $result_hos->num_rows <= 0 && $conn->query( $sql_hos ) === true ) {

	header( "Location: success.php" );

} else {

	header( "Location: fail.php" );

}
$conn->close();


