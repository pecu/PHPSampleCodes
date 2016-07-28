<?php

include('linkdb.php');

$username = $_POST["username"];
$userbith = $_POST["userbith"];
$userphone = $_POST["userphone"];
$useremail = $_POST["useremail"];
$userid = $_POST["userid"];

//echo $username;
//echo $userbith;
//echo $userphone;
//echo $useremail;

$setSQL = "UPDATE `user` SET `username` ='" . $username . "', `userbith` ='" . $userbith . "', `userphone` = '" . $userphone . "', `useremail` ='" . $useremail . "' WHERE `userid` = '" . $userid . "'";

echo $setSQL;

mysql_query($setSQL);

mysql_close($link);

$url = "showAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>