<?php
include('link.php');
include("header.php");

$reportSQL1 = "SELECT `userdata`.`name` FROM `orderno` LEFT JOIN `product` ON `orderno`.`productid` = `product`.`no` LEFT JOIN `userdata` ON `orderno`.`userid` = `userdata`.`id` GROUP BY `userdata`.`name`";
$actionName = "MyTrip.php";
$selName = "username";
?>

<center><table border=1>
<tr>

<?php
$pageObj -> selectOpt($actionName, $reportSQL1, $selName);
?>

</tr>

<?php
if(isset( $_POST[$selName] ))
{
	$username = $_POST[$selName];
	$reportSQL1 = "SELECT `userdata`.`name`, `product`.`company`, `product`.`date`, `product`.`time`, `orderno`.`orderNum` FROM `orderno` LEFT JOIN `product` ON `orderno`.`productid` = `product`.`no` LEFT JOIN `userdata` ON `orderno`.`userid` = `userdata`.`id` WHERE `userdata`.`name` = '" .$username. "'";
	
	
	$pageObj -> showTable("", $reportSQL1, "", "");
}
?>

<br>
</table></center>