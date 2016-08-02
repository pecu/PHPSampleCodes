
<script type="text/javascript">

    function do_this(){

        var checkboxes = document.getElementsByName('order_id[]');
    
            for (var i in checkboxes){
            
                checkboxes[i].checked = 'true';

        }
    }
</script>
<?php
include('linkadmdb.php'); 
include('head.php'); 

$id=$_GET['id'];
$sql="SELECT orderlist.orderlist_id,orderlist.order_id,orderno.user_id,product.product_name,product.product_price,orderlist.order_sum FROM `orderlist` LEFT JOIN orderno on orderlist.order_id=orderno.id LEFT JOIN product on orderlist.product_id=product.id

where orderlist.order_id=".$id;
$result=mysql_query($sql);
?>

<div id="about">
<form action="del_order_drink.php" method="post">
<table border="1">

<th>選擇</th><th>訂單編號</th><th>訂購商品</th><th>價格</th><th>訂購數量</th><th>金額</th><th>修改</th>

<?php

echo "訂購人:" . $_GET["user"] . "<br>";

while($row=mysql_fetch_assoc($result)){
	$value = str_pad($row['order_id'],6,'0',STR_PAD_LEFT);
	$sum=$row['product_price']*$row['order_sum'];
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"order_id[]\" value=\"" . $row["orderlist_id"] . "\"/></td>";
	echo"<input type='hidden' name='order' value='".$row['order_id']."'/></td>";
	echo "<td width='150px'>T".$value."</td>";
	echo "<td width='250px'>".$row['product_name']."</td>";
	echo "<td width='250px'>".$row['product_price']."</td>";
	echo "<td width='250px'>".$row['order_sum']."</td>";
	echo "<td width='250px'>".$sum."</td>";
	echo "<td width='250px'><a href='udpate_order_drink.php?id=".$row['orderlist_id']."&user=" . $_GET["user"] . "'>修改數量</a></td>";
	echo "</tr>";
	
}
$sql="SELECT sum(orderlist.order_sum*product_price)as sum2,orderlist.orderlist_id,orderlist.order_id,orderno.user_id,product.product_name,product.product_price,orderlist.order_sum FROM `orderlist` LEFT JOIN orderno on orderlist.order_id=orderno.id LEFT JOIN product on orderlist.product_id=product.id
where orderlist.order_id=".$id;

$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);

echo "<tr><td colspan='7'><font color='red'>總額:".$row['sum2']."</font></tr>"

?>

</table>
<button type="submit" value="0">刪除</button>
	<input type="button" id="del" value="全選" onClick="do_this()" />
	</form>
</div>
<?php

include('footer.php'); 
?>


