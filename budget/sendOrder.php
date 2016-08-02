<?php

include('link2.php');

date_default_timezone_set("Asia/Taipei");

$number = $_POST["numbers"];
$year = date('Y');
$month = date('m');
$day = date('d');

$getAllrowsSQL = "SELECT COUNT(*) FROM userdata";

//echo $getAllrowsSQL."<br>";

$runSQL = mysql_query($getAllrowsSQL);
$Allrows = mysql_fetch_assoc($runSQL);

//echo $Allrows["COUNT(*)"]."<br>";

$nowrow = $Allrows["COUNT(*)"] + 1;
//echo $nowrow."<br>";

foreach( $_POST["no"] as $i )
{
	$setSQL = "INSERT INTO `orderno`(`userid`, `productid`, `orderNum`, `orderYear`, `orderMonth`, `orderDay`) VALUES (" . $nowrow . ",". $i . "," . $number[$i-1] . "," . $year . "," . $month . ", " . $day. ")";
	//echo $setSQL."<br>";
	
	mysql_query($setSQL);
	
	$getProductSQL = "SELECT `quantity` FROM `product` WHERE `no` =" . $i;
		
	$sendToSQL = mysql_query($getProductSQL);
	
	//echo $sendToSQL;
	
	$result = mysql_fetch_array($sendToSQL);
	
	//echo mysql_errno();
	
	//echo $result["quantity"];
	$currentQuantity = $result["quantity"] - $number[$i-1];
	
	$setProductSQL = "UPDATE `product` SET `quantity`=" . $currentQuantity . " WHERE `no` =" . $i;
	echo $setProductSQL;
	
	mysql_query($setProductSQL);	
}

$url = "inputuserdata_front.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
?>