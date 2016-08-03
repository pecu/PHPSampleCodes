<?php
include('head.php');
?>

<form action="search.php" method="post">
<input type="text" name="search"></input>
<button type="submit" value="1" name="runsearch">Search</button>
</form>

<?php

include('linkdb.php'); 

if( $_POST["runsearch"] )
{
	$search = $_POST["search"];
	$setSQL = "SELECT * FROM `product` WHERE `product_name` LIKE '%". $search . "%'";

	$result = mysql_query($setSQL);

	$count = 0;
	$modNo = 4;
	$tempData = array($modNo);
	$num_rows = mysql_num_rows($result);

	echo "<table border=1>";
	while ($row = mysql_fetch_assoc($result))
	{
		if( $count%$modNo == 0 )
		{
			echo "<tr>";
		}
		echo "<td><img src=\"./photo/" . $row["id"] . ".jpg\" width=80\"></td>";
		$tempData[$count%$modNo] = $row["product_name"].",".$row["product_price"].",".$row["id"];
		if( $count%$modNo == $modNo-1 )
		{
			echo "</tr><tr>";
			for($i=0; $i<$modNo; $i++)
			{
				list($Name, $Price, $id) = split('[,]', $tempData[$i]);
				echo "<td>??:".$Name."<br>??:".$Price."<br>";
				echo "<input type=\"checkbox\" name=\"id[]\" value=\"" . $id . "\"/>";
				echo "??:<input type=\"text\" name=sum[]></td>";
			}
			echo "</tr>";
		}
		$count  = $count  + 1;
	}
	echo "</tr><tr>";
	for($i=0; $i<$num_rows%$modNo; $i++)
	{
		list($Name, $Price, $id) = split('[,]', $tempData[$i]);
		echo "<td>??:".$Name."<br>??:".$Price."<br>";
		echo "<input type=\"checkbox\" name=\"id[]\" value=\"" . $id . "\"/>";
		echo "??:<input type=\"text\" name=sum[]></td>";
	}
	echo "</tr>";
	echo "</table>";
}
?>