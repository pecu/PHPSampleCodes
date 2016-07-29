<?php

include('link.php');

$id = $_GET["id"];

$getSQL = "SELECT * FROM `admin` WHERE `id`=" . $id;

$result = mysql_query($getSQL);
$row = mysql_fetch_assoc($result);

//print_r($row);

$pri = $row["pri"];
$user = $row["user"];
$pass = $row["pass"];

$setSQL = "UPDATE `admin` SET `pri`=2 WHERE `id`=" . $id;

mysql_query($setSQL);

session_set_cookie_params(600);
session_start();
$_SESSION["id"] = $id;
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
$_SESSION["pri"] = $pri;
session_write_close();
$url = "home.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
echo "login in ok!!";
?>