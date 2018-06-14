<?php
/**
 * CHANGE PASSWORD
 *
 * @package ppl
 */

//Default database config
include_once "database-config.php";
include_once "session.php";

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	//Old password
	$oldpwd = test_input( $_POST["oldpwd"] );

	//New password
	$newpwd = test_input( $_POST["newpwd"] );

	//Confirm new password
	$conpwd = test_input( $_POST["conpwd"] );

}

//Insert into DB
if ( isset( $_POST["change_password"] ) ) {
	if ( isset( $_SESSION['login_user'] ) ) {
		$sql_stmt  = "SELECT password FROM patient WHERE id='$login_session'";
		$resultset = $conn->query( $sql_stmt );
		$list      = mysqli_fetch_assoc( $resultset );
		extract( $list );
		$verify    = password_verify( $oldpwd, $list['password'] );
		$duplicate = password_verify( $newpwd, $list['password'] );
		if ( $newpwd === $conpwd && ! $duplicate && $verify ) {
			if ( session_status() == PHP_SESSION_ACTIVE ) {
				$hashed_password = password_hash( $newpwd, PASSWORD_DEFAULT );
				$sql             = "UPDATE patient SET password='$hashed_password' WHERE id='$login_session'";
				$result          = $conn->query( $sql );

			}
			if ( $result === true ) {
				echo "  <h1>Password Successfully Changed</h1>
			<p>You'll be redirected in 5 seconds.</p>";
				header( "refresh:5 url=index.php" );
			}
		} else {
			echo "<h1>Passwords Don't Match</h1>
		    <p>You'll be redirected in 5 seconds.</p>";
			header( "refresh:5 url=index.php" );
		}
	}
	if ( isset( $_SESSION['login_hos'] ) ) {
		$sql_stmt  = "SELECT password FROM hospital WHERE name='$login_session'";
		$resultset = $conn->query( $sql_stmt );
		$list      = mysqli_fetch_assoc( $resultset );
		extract( $list );
		$verify    = password_verify( $oldpwd, $list['password'] );
		$duplicate = password_verify( $newpwd, $list['password'] );
		if ( $newpwd === $conpwd && ! $duplicate && $verify ) {
			if ( session_status() == PHP_SESSION_ACTIVE ) {
				$hashed_password = password_hash( $newpwd, PASSWORD_DEFAULT );
				$sql             = "UPDATE hospital SET password='$hashed_password' WHERE name='$login_session'";
				$result          = $conn->query( $sql );

			}
			if ( $result === true ) {
				echo "  <h1>Password Successfully Changed</h1>
			<p>You'll be redirected in 5 seconds.</p>";
				header( "refresh:5 url=index.php" );
			}
		} else {
			echo "<h1>Passwords Don't Match</h1>
		    <p>You'll be redirected in 5 seconds.</p>";
			header( "refresh:5 url=index.php" );
		}
	}

}

