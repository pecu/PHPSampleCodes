<?php
include("link.php");
$id=$_GET['id'];

$sql="update user2 set user_pri=2 where id=".$id;
mysql_query($sql);

$sql="SELECT * FROM user2 where id=".$id;

$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);

session_set_cookie_params(600);
	session_start();
	$_SESSION['id']=$row['id'];
	$_SESSION['user']=$row['user_uid'];
	$_SESSION['pass']=$row['user_pass'];
	$_SESSION['pri']=$row['user_pri'];
session_write_close();
	$url='home.php';

	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
?>