<?php

echo "<font color='red'>TEST PHP ON WEB</font>";

$user = 'testphp';
$pass = 'test12345';
$host = 'localhost';

$link = mysql_connect($host, $user, $pass);

if(!$link)
{
	die('can not connect to MySQL' . mysql_errno());	
}

echo "<br>";
echo "Connect to MySQL!!";

$database = "phpclass";
$db_select = mysql_select_db($database);

if(!$db_select)
{
	die('can not connect to ' . $database . ' ' . mysql_errno());	
}

$SQLcode = 'SELECT `Name`, `PassWord` FROM `users` WHERE 1';

echo "<br>";
echo $SQLcode;

$result = mysql_query($SQLcode);

echo "<br>";
echo mysql_errno();

while($row = mysql_fetch_assoc($result))
{
	echo 'name:'. $row["Name"]. 'pass:' . $row["PassWord"];
	echo "<br>";
}

?>