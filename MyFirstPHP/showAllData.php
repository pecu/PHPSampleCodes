<?php

include('linkdb.php');

$getIDSQL = "SELECT * FROM `user` ORDER BY `user`.`no` ASC";
$result = mysql_query($getIDSQL);

?>
<form action="deleteData.php" method="post">
<table border="1">
<tr>
	<th>Select</th>
	<th>User Name</th>
	<th>User Birthday</th>
	<th>User Phone</th>
	<th>User E-mail</th>
</tr>

<?php
while( $row = mysql_fetch_assoc($result) )
{
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"userid\" value=\"" . $row["userid"] . "\"/></td>";
	echo "<td>" . $row["username"] . "</td>";
	echo "<td>" . $row["userbith"] . "</td>";
	echo "<td>" . $row["userphone"] . "</td>";
	echo "<td>" . $row["useremail"] . "</td>";
	echo "</tr>";
	
}

?>

</table>
<button type="submit">Delete</button>
</form>