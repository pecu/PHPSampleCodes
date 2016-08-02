<?php
include('link.php');

$company = $_POST["company"];
$date = $_POST["date"];
$time = $_POST["time"];
$no = $_POST["no"];

$updateSQL = "UPDATE `product` SET `company` ='" . $company . "', `date` ='" . $date . "', `time` ='" . $time . "' WHERE `no` = '" . $no . "'";

mysql_query($updateSQL);

mysql_close($link);

$url = "ShowAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";
?>