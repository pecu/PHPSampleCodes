<?php

include('linkdb.php');

$getCountSQL = "SELECT COUNT(*) FROM `user`";
$result = mysql_query($getCountSQL);
$getCount = mysql_fetch_assoc($result);
$allDataNo = $getCount["COUNT(*)"];

$getIDSQL = "SELECT * FROM `user` ORDER BY `user`.`no` ASC";
$result = mysql_query($getIDSQL);

$isInDB = array($allDataNo);

while($row = mysql_fetch_assoc($result))
{
	array_push($isInDB, $row["userid"]);
}

print_r($isInDB);

$userbith = "2000-01-01";
$userphone = "0937123456";
$useremail = "test@test.edu.tw";

$allDataID = $isInDB[0];
$preWord = "table";
$spaceNo = strlen($isInDB[$allDataID])-strlen($preWord)+1;
$TheBiggestID = substr($isInDB[$allDataID], strlen($preWord), $spaceNo);

//echo "the last id no: " . $TheBiggestID;

$allNo = 10+$TheBiggestID;
$i = $TheBiggestID+1;
//$sqlCode = "";
while( $i <= $allNo )
{
	$currentID = "table" . $i;
	$username = "testName" . $i;
	$sqlCode = "INSERT INTO `user` (`no`, `userid`, `username`, `userbith`, `userphone`, `useremail`) VALUES (". $i .", '" . $currentID . "','" . $username . "', '" . $userbith . "', '" . $userphone . "', '" . $useremail . "');";
	$i++;
	$result = mysql_query($sqlCode);
}

//echo $sqlCode;
//echo "SQL Query:" . mysql_error();

mysql_close($link);


?>