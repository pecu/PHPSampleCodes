
<?php
include('link.php');
$user=$_POST['user'];
$pass=$_POST['pass'];

$sql="select count(*) from user2 where user_uid='".$user. "' and user_pass='".$pass."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$count=$row['count(*)'];

if($count==0){
	$url='index.php';
	echo "<script type='text/javascript'>";
	echo "alert('password error!');";
	echo "window.location.href='$url'";
	echo "</script>";
}
else{
	

$sql="select * from user2 where user_uid='".$user. "' and user_pass='".$pass."'";

$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$pri=$row['user_pri'];
/*
echo $pri;
*/
if($pri==2){	
	session_set_cookie_params(600);
	session_start();
	$_SESSION['id']=$row['id'];
	$_SESSION['user']=$row['user_uid'];
	$_SESSION['pass']=$row['user_pass'];
	$_SESSION['pri']=$row['user_pri'];
	session_write_close();
	$url='myorder.php';

	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	
}


else{

	$url='index.php';
	echo "<script type='text/javascript'>";
	echo "alert('open your account!');";
	echo "window.location.href='$url'";
	echo "</script>";
}
}
?>