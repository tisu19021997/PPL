<?php

//File to template
$file   = 'view-template.php';
$output = '';
$data =return_sql($GLOBALS['table_sql']);

?>


<?php
//Template $file with sql array

foreach ( $data as $row ) {
	$output .= template( $file, $row );
}
print $output; ?>



