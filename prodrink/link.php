<?php

$host="localhost";
$name="testphp";
$pass="powerwer";

$link=mysql_connect($host,$name,$pass);

if(!$link){
	die("����s�u".mysql_errno());
}

$databsae='drink_shop';
$selctdb=mysql_select_db($databsae);

if(!$selctdb){
	die("����s�u���Ʈw!".mysql_errno());
}

?>
