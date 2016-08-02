<?php

include('linkadmdb.php');
include('head.php');

// ??
// ????
/*
SELECT `orderno`.`user_id`, `user2`.`user_name`, `user2`.`user_phone`, `user2`.`user_email`, SUM(`product`.`product_price` * `orderlist`.`order_sum`) FROM `orderlist` LEFT JOIN `orderno` on `orderlist`.`order_id` = `orderno`.`id` LEFT JOIN `product` on `orderlist`.`product_id` = `product`.`id` LEFT JOIN `user2` ON `orderno`.`user_id` = `user2`.`user_uid` GROUP BY `orderno`.`user_id`
*/
// 1129, 305

// ??????
/*
SELECT `product`.`product_name`, SUM(`product`.`product_price` * `orderlist`.`order_sum`) FROM `orderlist` LEFT JOIN `orderno` on `orderlist`.`order_id` = `orderno`.`id` LEFT JOIN `product` on `orderlist`.`product_id` = `product`.`id`GROUP BY `product`.`product_name`
*/

// ??
// ????
// ????

$reportSQL1 = "SELECT `orderno`.`user_id`, `user2`.`user_name`, `user2`.`user_phone`, `user2`.`user_email`, SUM(`product`.`product_price` * `orderlist`.`order_sum`) FROM `orderlist` LEFT JOIN `orderno` on `orderlist`.`order_id` = `orderno`.`id` LEFT JOIN `product` on `orderlist`.`product_id` = `product`.`id` LEFT JOIN `user2` ON `orderno`.`user_id` = `user2`.`user_uid` GROUP BY `orderno`.`user_id`";

//echo $reportSQL1."<br>";

$result = mysql_query($reportSQL1);

//echo $result;

echo "<table border=1><tr>";
echo "<th>UserID</th><th>UserName</th><th>UserPhone</th><th>UserEamil</th><th>Amount</th>";
echo "</tr>";

while( $row = mysql_fetch_array($result) )
{
	//print_r($row);
	echo "<tr>";
	for( $i=0; $i<5; $i++ )
	{
		echo "<td>" . $row[$i] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";

$reportSQL2 = "SELECT `product`.`product_name`, `product`.`product_price`, SUM(`orderlist`.`order_sum`), SUM(`product`.`product_price` * `orderlist`.`order_sum`) FROM `orderlist` LEFT JOIN `orderno` on `orderlist`.`order_id` = `orderno`.`id` LEFT JOIN `product` on `orderlist`.`product_id` = `product`.`id`GROUP BY `product`.`product_name`";

//echo $reportSQL1."<br>";

$result = mysql_query($reportSQL2);

//echo $result;

echo "<table border=1><tr>";
echo "<th>ProductName</th><th>Price</th><th>Number</th><th>Amount</th>";
echo "</tr>";

while( $row = mysql_fetch_array($result) )
{
	//print_r($row);
	echo "<tr>";
	for( $i=0; $i<4; $i++ )
	{
		echo "<td>" . $row[$i] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>