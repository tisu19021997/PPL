<?php
/**
 * Created by PhpStorm.
 * User: Pham
 * Date: 5/23/2018
 * Time: 8:47 PM
 */
include_once 'database-config.php';

if ( isset( $_POST['edit_row'] ) ) {
	$row      = $_POST['row_id'];
	$id       = $_POST['id_val'];
	$fname    = $_POST['fname_val'];
	$lname    = $_POST['lname_val'];
	$gender   = $_POST['gender_val'];
	$email    = $_POST['email_val'];
	$password = $_POST['password_val'];
	$address  = $_POST['address_val'];
	$lang     = $_POST['lang_val'];
	$edit_sql = "update patient set id='$id', fname='$fname',lname='$lname', gender='$gender',email='$email',password='$password',address='$address', lang='$lang' where id='$row'";
	echo $edit_sql;
	mysqli_query( $conn, $edit_sql );
	echo "success";
	exit();
}

if ( isset( $_POST['delete_row'] ) ) {
	$row_no = $_POST['row_id'];
	mysqli_query( $conn, "delete from patient where id='$row_no'" );
	echo "<script type='text/javascript'>
	alert('Deleted');
	</script>";
	exit();
}

if ( isset( $_POST['insert_row'] ) ) {
	$id       = $_POST['id_val'];
	$fname    = $_POST['fname_val'];
	$lname    = $_POST['lname_val'];
	$gender   = $_POST['gender_val'];
	$email    = $_POST['email_val'];
	$password = $_POST['password_val'];
	$address  = $_POST['address_val'];
	$lang     = $_POST['lang_val'];
	mysqli_query( $conn, "insert into patient values('$id','$fname','$lname','$gender','$email','$password','$address','$lang')" );
	echo mysqli_insert_id( $conn );
	exit();
}

if ( isset( $_POST['active_row'] ) ) {
	$row_no = $_POST['row_id'];
	$status = $_POST['status_val'];

	$active_sql = "update patient set status='Active' where id='$row_no'";
	mysqli_query( $conn, $active_sql );

	exit();
}

if ( isset( $_POST['deactive_row'] ) ) {
	$row_no       = $_POST['row_id'];
	$status       = $_POST['status_val'];
	$deactive_sql = "UPDATE patient SET status='Deactive' WHERE id='$row_no'";
	mysqli_query( $conn, $deactive_sql );

	exit();
}