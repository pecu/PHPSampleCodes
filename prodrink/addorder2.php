<?php
include('linkdb.php'); 
$user= $_SESSION['user'];
$sql="INSERT INTO `orderno` (`id`, `user_id`) VALUES ('".$user."')";
mysql_query($sql);

$sql="SELECT * FROM `orderno` where user_id='".$user."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$orderid=$row['id'];
echo $orderid;

$id=$_POST['id'];
$sum=$_POST['sum'];
$n=count($id);
$m = 0;
foreach($id as $id2)
{
	echo $id2."<br>";
	$sum2 = $sum[$m];
	
$sql= "INSERT INTO `orderlist` (`order_id`, `product_id`, `order_sum`) VALUES ('".$orderid."','".$id2."', '".$sum2."')";
//mysql_query($sql);
echo $sql;
echo "<br>";
	$m = $m+1;
}
?>