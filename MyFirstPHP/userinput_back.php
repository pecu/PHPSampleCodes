<?php
include('linkdb.php');

$username = $_POST["username"];
$userbith = $_POST["userbith"];
$userphone = $_POST["userphone"];
$useremail = $_POST["useremail"];

echo $username."<br>";
echo $userbith."<br>";
echo $userphone."<br>";
echo $useremail."<br>";

$getAllrowsSQL = "SELECT COUNT(*) FROM USER";

echo $getAllrowsSQL."<br>";

$runSQL = mysql_query($getAllrowsSQL);
$Allrows = mysql_fetch_assoc($runSQL);

echo $Allrows["COUNT(*)"]."<br>";

$nowRow = $Allrows["COUNT(*)"] + 1;

echo $nowRow."<br>";

$userid = "table" . $nowRow; 

$sqlCode = "INSERT INTO `user` (`no`, `userid`, `username`, `userbith`, `userphone`, `useremail`) VALUES ('". $nowRow ."', '" . $userid . "','" . $username . "', '" . $userbith . "', '" . $userphone . "', '" . $useremail . "')";

echo $sqlCode."<br>";

mysql_query($sqlCode);

mysql_close($link)

?>

<a href="userinput_front.html">back</a>