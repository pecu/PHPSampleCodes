<?php
include('head.php');
include('linkdb.php');
$user=$_SESSION['user'];
?>
<head></head>
<body>
<div id="about">
	<h1>飲料訂購</h1>
	<form action="addorder.php" method="post" name="form">
	<table border=1>
<?php
$sql="SELECT * FROM `product`";
$result=mysql_query($sql);

$count = 0;
$modNo = 4;
$tempData = array($modNo);
$num_rows = mysql_num_rows($result);
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
			echo "<td>商品:".$Name."<br>價格:".$Price."<br>";
			echo "<input type=\"checkbox\" name=\"id[]\" value=\"" . $id . "\"/>";
			echo "數量:<input type=\"text\" name=sum[]></td>";
		}
		echo "</tr>";
	}
	$count  = $count  + 1;
}
echo "</tr><tr>";
for($i=0; $i<$num_rows%$modNo; $i++)
{
	list($Name, $Price, $id) = split('[,]', $tempData[$i]);
	echo "<td>商品:".$Name."<br>價格:".$Price."<br>";
	echo "<input type=\"checkbox\" name=\"id[]\" value=\"" . $id . "\"/>";
	echo "數量:<input type=\"text\" name=sum[]></td>";
}
?>
</tr>
</table>
<br><button type="submit">送出訂單</button>
</form>

</div>
</body>
<?php
include('FOOTER.php');
?>