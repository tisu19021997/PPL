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
	$myid  = test_input( ( $_POST['myid'] ) );
	$mypwd = test_input( ( $_POST['mypwd'] ) );

}
if ( isset( $_POST["patient_login"] ) ) {
	$sql_stmt  = "SELECT  password FROM patient WHERE id='$myid' AND status='Active' ";
	$resultset = $conn->query( $sql_stmt );
	$list      = mysqli_fetch_assoc( $resultset );
//	extract( $list );
	$verify  = password_verify( $mypwd, $list['password'] );
	$isadmin = false;
	if ( $myid === 'admin' && $mypwd === 'admin' ) {
		$isadmin = true;
	}
	if ( $isadmin ) {
		$_SESSION['login_admin'] = 'admin';
		?>
        <h1>Logged in as admin</h1>
        <h4>Redirected in 5 seconds</h4>
		<?php
		header( "refresh:5 url=index.php" );
	}
	elseif ( $verify ) {
		//        $sql    = "SELECT id, password, status FROM `patient` WHERE id = '$myid' AND password = '$mypwd' AND status='Active'";
		//        $result = $conn->query( $sql );
		//        echo $sql;
		$_SESSION['login_user'] = $myid;
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
}


