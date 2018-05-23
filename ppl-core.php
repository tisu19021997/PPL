<?php

/**
 * Simple Templating function
 *
 * @param $file - Path to the PHP file that acts as a template.
 * @param $args - Associative array of variables to pass to the template file.
 *
 * @return string - Output of the template file. Likely HTML.
 */
function template( $file, $args ) {
	// ensure the file exists
	if ( ! file_exists( $file ) ) {
		return '';
	}

	// Make values in the associative array easier to access by extracting them
	if ( is_array( $args ) ) {
		extract( $args );
	}

	// buffer the output (including the file is "output")
	ob_start();
	include $file;

	return ob_get_clean();
}

function return_sql($sql){
	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {
		die('Could not connect: ' . mysqli_error($link));
	}
	if (!mysqli_select_db($link ,'ppl')) {
		die('Could not select database: ' . mysqli_error($link));
	}
	$result = mysqli_query($link,$sql);
	if (!$result) {
		die('Could not query:' . mysqli_error($link));
	}
	$data=array();
	$index=0;
	while ($list = mysqli_fetch_assoc($result)) {
		$data[$index]=$list;
		$index++;
	}

	mysqli_close($link);
return $data;
}


function create_table($querry){
	global $table_sql;
	$table_sql=$querry;
	include 'ppl-table.php';
}
