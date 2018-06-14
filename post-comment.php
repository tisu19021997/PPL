<?php
/**
 * Created by PhpStorm.
 * User: Pham
 * Date: 5/28/2018
 * Time: 4:24 PM
 */
include_once 'database-config.php';


if ( isset( $_POST['add_comment'] ) ) {
	$comment = htmlspecialchars($_POST['comm']);
	$doctor  = $_POST['doctor'];
	$hos     = $_POST['hos'];
	$rate = $_POST['rate'];

	$sql = "INSERT INTO comment values('','$comment',CURRENT_TIMESTAMP,'$hos','$doctor','Active','$rate')";
	mysqli_query( $conn, $sql );
}
//
//	if ( $row = mysqli_fetch_array( $select ) ) {
//
//	}
