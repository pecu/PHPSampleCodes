<html>
<head>
	<title>Update Data</title>
</head>
<body>
<?php

$no = $_GET["no"];

include('link.php');
$getSQL = "SELECT * FROM `product` WHERE `no`='" . $no . "'";
$result = mysql_query($getSQL);
$row = mysql_fetch_assoc($result);
mysql_close($link);
?>	

<form action="updateToSQL.php" method="post">
<table border="1">
	<tr>
		<td>
		Company
		</td>
		<td>
			<input type="text" name="company" value="<?php echo $row["company"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		Date
		</td>
		<td>
			<input type="text" name="date" value="<?php echo $row["date"] ?>" />
		</td>
	</tr>
	<tr>
		<td>
		Time
		</td>
		<td>
			<input type="text" name="time" value="<?php echo $row["time"] ?>" />
		</td>
	</tr>
	</table>
	<input type="hidden" name="no" value="<?php echo $no ?>">
	<button type="submit">send</button>
	</form>
</body>