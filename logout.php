<?php
	error_reporting(E_ALL);	
	ini_set('display_errors',1);
	ini_set('display_startup_errors',0);
	ini_set('log_errors',1);	
	include ("client.php")
	session_destroy();
	setcookie(session_name(),'',time() - 7000 , '/');

	function redirect($message,$url)
	{
		 echo $message;
		 header( "refresh:2; url=$url");
	}
	redirect("Logging Out!","login.html");
?>


