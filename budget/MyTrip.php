<?php
include('link.php');
include("header.php");

$reportSQL1 = "SELECT `userdata`.`name`, `product`.`company`, `product`.`date`, `product`.`time`, `orderno`.`orderNum` FROM `orderno` LEFT JOIN `product` ON `orderno`.`productid` = `product`.`no` LEFT JOIN `userdata` ON `orderno`.`userid` = `userdata`.`id`";

//echo $reportSQL1."<br>";

$result = mysql_query($reportSQL1);

//echo $result;

echo "<center><table border=1><tr>";
echo "<th>UserName</th><th>Company</th><th>Date</th><th>Time</th><th>Tickets</th>";
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
echo "</table></center>";

?>

<br>