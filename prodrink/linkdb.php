<?php
header("Content-Type:text/html; charset=utf-8");
include('link.php');
session_start();

if(!isset($_SESSION['user'])){
	$url = "index.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}

$id=$_SESSION['id'];

$user=$_SESSION['user'];
$pass=$_SESSION['pass'];
$pri=$_SESSION['pri'];

$sql="select count(*) FROM user2 where id=".$id;
$result=mysql_query($sql);
$countsum=mysql_fetch_assoc($result);
$count=$countsum['count(*)'];
echo $coun;
if($count !=1){
	
	$url = "index.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
	
}
else{
	


$host="localhost";
$name="testphp";
$pass="powerwer";

$link=mysql_connect($host,$name,$pass);
$link=mysql_set_charset("utf8");
if(!$link){
	die("不能連結資料庫!".mysql_errno());
}

$dbname="drink_shop";

$dbselect=mysql_select_db($dbname);

if(!$dbselect){
	die("不能連結資料表!".mysql_errno());
}
}
?>
