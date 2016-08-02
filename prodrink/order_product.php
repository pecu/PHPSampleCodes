<?php
include('head.php');
include('linkdb.php');
$user=$_SESSION['user'];
?>
<head></head>
<body>
<div id="about">
	<h1>飲料訂購</h1>
<table border="1">
<form action="addorder.php" method="post" name="form">
<tr>
	<td width="100px">選購</td>
	<td width="250px">商品</td>
	<td>價格</td>
	<!--<td>可訂購之數量</td>
	-->
	<td width="150px">訂購數量</td>
</tr>
<tr>
<?php
$sql="SELECT * FROM `product`";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"id[]\" value=\"" . $row["id"] . "\"/></td>";
	echo "<td>".$row['product_name']."</td>";
	echo "<td>".$row['product_price']."</td>";
	/*	echo "<td><font color='red'>".$row['product_sum']."</font></td>";*/
		/*
	echo "<td><input id='s' name='sum[]' value=''/></td>";
	*/
	echo "<td><select name='sum[]'>
　<option value='1'>1杯</option>
　<option value='2'>2杯</option>
　<option value='3'>3杯</option>
　<option value='4'>4杯</option>

</select></td>";
	echo "<input type='hidden' name='user' value='".$user."'>";
	echo "</tr>";
	
		
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
