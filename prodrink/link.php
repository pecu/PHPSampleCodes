<?php

$host="localhost";
$name="testphp";
$pass="powerwer";

$link=mysql_connect($host,$name,$pass);

if(!$link){
	die("不能連線".mysql_errno());
}

$databsae='drink_shop';
$selctdb=mysql_select_db($databsae);

if(!$selctdb){
	die("不能連線到資料庫!".mysql_errno());
}

?>
