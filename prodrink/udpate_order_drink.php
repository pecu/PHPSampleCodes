<?php

session_start();
$login_type=$_SESSION["login_type"];

if( $login_type == "admin" )
{
	include("linkadmdb.php");
}
else
{
	include("linkdb.php");
}

$id=$_GET['id'];
$sql="SELECT orderlist.orderlist_id,orderlist.order_id,orderno.user_id,product.product_name,product.product_price,orderlist.order_sum FROM `orderlist` LEFT JOIN orderno on orderlist.order_id=orderno.id LEFT JOIN product on orderlist.product_id=product.id
where orderlist.orderlist_id=".$id;

include('head.php');

$result=mysql_query($sql);

$row=mysql_fetch_assoc($result);

?>
<div id="about">
<?php 
$getUser = $_GET["user"];
echo "訂購人:" . $getUser . "<br>"; ?>
<form action="updatedodrink.php" method="post">
<table border="1">
	<tr>
		<td>產品</td><td><?php echo $row['product_name'] ?></td>
		</tr>
		<tr>
		<td>價格</td><td><?php echo $row['product_price'] ?></td>
		</tr>
		<tr>
		<td>訂購數量</td><td><input name="order_sum" value="<?php echo $row['order_sum'] ?>"/></td>
		
	<input type="hidden" name="orderlist_id" value="<?php echo $row['orderlist_id']; ?>"/>
	<input type="hidden" name="order_id" value="<?php echo $row['order_id'] ?>"/>
	<input type="hidden" name="order_user" value="<?php echo $getUser ?>"/>
</table>
<button type="submit">送出</button>
</form>
</div>
</body>
<?php
include('footer.php');
?>