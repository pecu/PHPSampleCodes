<?php

include('link.php');
$user=$_POST['user'];
$pass=$_POST['pass'];

$sql="select count(*) from admin where user='".$user. "' and pass='".$pass."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$count=$row['count(*)'];

if($count==0){
	$url='admin_login.php';
	echo "<script type='text/javascript'>";
	echo "alert('password error!');";
	echo "window.location.href='$url'";
	echo "</script>";
}
else{
$sql="select * from admin where user='".$user. "' and pass='".$pass."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
session_set_cookie_params(600);
	session_start();
	$_SESSION['login_type']="admin";
	$_SESSION['adm_id']=$row['id'];
	$_SESSION['adm_user']=$row['user'];
	$_SESSION['adm_pass']=$row['pass'];
	$_SESSION['adm_pri']=$row['pri'];
	session_write_close();
	$url='adm_index.php';
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}


?>