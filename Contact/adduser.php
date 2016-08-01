<?php

	$login = $_POST["login"];
	
	if( $login == "1" )
	{
		echo "<script type='text/javascript'>";
		echo "window.location.href='loginFront.php'";
		echo "</script>";
	}


	include('link.php');

	$username = $_POST["username"];
	$password = $_POST["password"];

	$sqlCode = "INSERT INTO `user` (`username`, `password`) VALUES ('" . $username . "','" . $password . "')";

	mysql_query($sqlCode);
	mysql_close($link);

?>

		<script type='text/javascript'>
			window.location.href='loginFront.php'
		</script>