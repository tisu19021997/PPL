<?php
/**
 * LOG-IN
 *
 * @package ppl
 */

//Default database config
include_once "database-config.php";
session_start();

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	//id and password from user
	$hosid  = test_input( ( $_POST['hospital-id'] ) );
	$hospwd = test_input( ( $_POST['hospital-pwd'] ) );

}
if ( isset( $_POST["login_hos"] ) ) {

	$sql = "SELECT  password FROM `hospital` WHERE id = '$hosid'AND status='Active'";
	$result = $conn->query( $sql );
	$list = mysqli_fetch_assoc( $result );
//	extract( $list );
	$verify = password_verify( $hospwd, $list['password'] );

}

if ($verify ) {

	$_SESSION['login_hos'] = $hosid;
	?>
	<h1>Logged in!</h1>
	<h4>You will be redirected in 5 seconds</h4>

	<?php
	header( "refresh:5 url=index.php" );

} else {
	echo "<h1>ID or password is invalid</h1>";
	echo "<h4>You will be redirected in 5 seconds</h4>";
	user_error( "Query failed " . $conn->error . "<br>" );
	header( "refresh:5 url=index.php" );
}
