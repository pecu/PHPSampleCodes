<?php
include('link.php');
include("header.php");

$reportSQL1 = "SELECT `userdata`.`name` FROM `orderno` LEFT JOIN `product` ON `orderno`.`productid` = `product`.`no` LEFT JOIN `userdata` ON `orderno`.`userid` = `userdata`.`id` GROUP BY `userdata`.`name`";

//echo $reportSQL1."<br>";

$result = mysql_query($reportSQL1);

?>
<center><table border=1><tr>
<form action="MyTrip.php" method="post">
	<select name="username">
<?php
	while( $row = mysql_fetch_array($result) )
	{
		echo "<option value=\"". $row[0] ."\">" . $row[0] . "</option>";
	}
?>
	</select>
	<button type="submit">Search</button>
</form>
</tr>

<?php

$username = $_POST["username"];
//echo $username;

//echo $result;

$reportSQL1 = "SELECT `userdata`.`name`, `product`.`company`, `product`.`date`, `product`.`time`, `orderno`.`orderNum` FROM `orderno` LEFT JOIN `product` ON `orderno`.`productid` = `product`.`no` LEFT JOIN `userdata` ON `orderno`.`userid` = `userdata`.`id` WHERE `userdata`.`name` = '" .$username. "'";

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