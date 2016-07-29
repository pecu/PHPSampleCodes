<?php

include('link.php');

session_start();
$adminuser = $_SESSION["user"];
$adminpass = $_SESSION["pass"];
$adminid = $_SESSION["id"];
$adminpri = $_SESSION["pri"];

$setSQL = "SELECT COUNT(*) FROM `admin` WHERE `id` = " . $adminid;
$result = mysql_query($setSQL);
$countresult = mysql_fetch_assoc($result);
$count = $countresult["COUNT(*)"];

if( $count != 1 )
{
	$url = "index.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}
else	// $count == 1, we get one admin user data
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