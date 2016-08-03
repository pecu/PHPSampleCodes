<?php session_start();

unset($_SESSION["login_info"]);

echo "Confirmed a Successful Logout!<br><br>Redirecting ...";
	            
header("Location: ./page_home.php");

?>