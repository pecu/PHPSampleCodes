<html>
<head>
	<title></title>
</head>
<body>
<?php

$userid = $_GET["userid"];
//echo $userid;
include('linkdb.php');
$getSQL = "SELECT * FROM `user` WHERE `userid`='" . $userid . "'";
//echo $getSQL;
$result = mysql_query($getSQL);
$row = mysql_fetch_assoc($result);
//print_r($row);
mysql_close($link);
?>
<form action="updataToSQL.php" method="post">
<table border="1">
	<tr>
		<td>
		Name:	
		</td>
		<td>
		<input type="text" name="username" value="<?php echo $row["username"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		Birthday:	
		</td>
		<td>
		<input type="text" name="userbith" value="<?php echo $row["userbith"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		Phone:	
		</td>
		<td>
		<input type="text" name="userphone" value="<?php echo $row["userphone"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		E-mail:	
		</td>
		<td>
		<input type="text" name="useremail" value="<?php echo $row["useremail"] ?>"/>
		</td>
	</tr>
</table>
<input type="hidden" name="userid" value="<?php echo $userid ?>"/>
<button type="submit">sned</button>
</form>
</body>
