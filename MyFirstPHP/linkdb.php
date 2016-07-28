<?php

session_start();
$adminid = $_SESSION["id"];
$adminpri = $_SESSION["pri"];

if( $adminpri == "" )
{
	$url = "login.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}
else
{
	$user = 'testphp';
	$pass = 'test12345';
	$host = 'localhost';

	$link = mysql_connect($host, $user, $pass);

	if(!$link)
	{
		die('can not connect to MySQL' . mysql_errno());	
	}

	$database = "gettabledb";
	$db_select = mysql_select_db($database);

	if(!$db_select)
	{
		die('can not connect to ' . $database . ' ' . mysql_errno());	
	}
}
?>