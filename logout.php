<?php
/**
 * Created by PhpStorm.
 * User: Pham
 * Date: 5/21/2018
 * Time: 11:50 AM
 */

   session_start();
   ?>
	<h1>You are logged out!</h1>
	<h4>You will be redirected in 5 seconds.</h4>
<?php
   if(session_destroy()) {

	   header("refresh:5 url=index.php");

   }
?>