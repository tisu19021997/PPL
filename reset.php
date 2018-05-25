<?php
/**
 * RESET PASSWORD
 *
 * @package ppl
 */

//Default database config
include_once "database-config.php";
include_once "session.php";

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	//ID
	$yourid = test_input( $_POST["yourid"] );

	//Email
	$youremail = test_input( $_POST["youremail"] );


}

//Insert into DB
if ( isset( $_POST["reset_password"] ) ) {

	$sql_stmt  = "SELECT id, email FROM patient WHERE id='$yourid' AND email='$youremail'";
	$resultset = $conn->query( $sql_stmt );

//	print_r( $pwd );


	if ( $resultset->num_rows == 1 ) {

		$sql    = "UPDATE patient SET password='pplwebsite123' WHERE id='$yourid'";
		$result = $conn->query( $sql );

		if ( $result === true ) {
			echo "<h1>Password Successfully Reset</h1>";
			echo "<p>Click <a href='index.php'>HERE </a>to back to the log-in page</p>";
			include 'sendMail/smtp.php';
		}
	} else {
		echo "<h1>Email or ID doesn't exist</h1>
		    <p>You'll be redirected in 5 seconds.</p>";
		header( "refresh:5 url=index.php" );
	}

}

