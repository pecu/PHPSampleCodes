<?php

include('link2.php');

$username = $_POST["username"];
$englishname = $_POST["englishname"];
$birthday = $_POST["birthday"];
$passport = $_POST["passport"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];

echo $username."<br>";
echo $englishname."<br>";
echo $birthday."<br>";
echo $passport."<br>";
echo $address."<br>";
echo $phone."<br>";
echo $email."<br>";

$getAllrowsSQL = "SELECT COUNT(*) FROM userdata";

echo $getAllrowsSQL."<br>";

$runSQL = mysql_query($getAllrowsSQL);
$Allrows = mysql_fetch_assoc($runSQL);

echo $Allrows["COUNT(*)"]."<br>";

$nowrow = $Allrows["COUNT(*)"] + 1;
echo $nowrow."<br>";

$userid = "table" . $nowrow;


$sqlCode = "INSERT INTO `userdata` (`id`, `name`, `english_name`, `birthday`, `passportnum`, `phone`, `address`, `email`)VALUES ('". $nowrow ."', '" . $username . "','" . $englishname . "', '" . $birthday . "', '" . $passport . "', '" . $phone . "', '" . $address . "', '" . $email . "')";

	
echo $sqlCode."<br>";

mysql_query($sqlCode);

mysql_close($link);

$url = "inputuserconfirm.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 

?>

<a href="inputuserdata_front.php">back</a>