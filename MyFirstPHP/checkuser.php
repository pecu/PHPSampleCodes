<?php

include('linkdb.php');

$user = $_POST["user"];
$pass = $_POST["pass"];

//echo $user . "<br>";
//echo $pass . "<br>";

$setSQL = "SELECT * FROM `admin` WHERE `user` = '" . $user . "' and `pass` = '" . $pass . "'";

$result = mysql_query($setSQL);
$row = mysql_fetch_assoc($result);
$pri = $row["pri"];

if( $pri != "" )
{
	session_set_cookie_params(600);
	session_start();
	$_SESSION["user"]=$user;
	$_SESSION["pass"]=$pass;
	$_SESSION["pri"]=$pri;
	session_write_close();
	echo "login in ok!!";
}
else
{
	$url = "login.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}

?>