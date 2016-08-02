
       
<?php


include('head.php');

include('linkdb.php');
$user=$_SESSION['user'];
?>
<head></head>
<body>
<div id="about">
<table border="1">
<form action="addorder.php" method="post" name="form">
<tr>
	<td>選購</td>
	<td>商品</td>
	<td>價格</td>
	<td>可訂購之數量</td>
	<td>訂購數量</td>
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
		echo "<td><font color='red'>".$row['product_sum']."</font></td>";
	echo "<td><input id='s' name='sum[]' value=''/></td>";
	
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
