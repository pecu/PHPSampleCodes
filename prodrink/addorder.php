<?php
include('linkdb.php'); 
$datetime = date ("Y-m-d H:i:s");

$user= $_SESSION['user'];
$sql="INSERT INTO `orderno` (`user_id`, `order_date`) VALUES ('".$user."','".$datetime."')";

mysql_query($sql);

$sql="SELECT * FROM `orderno` where user_id='".$user."' and `order_date`='".$datetime."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$orderid=$row['id'];

$id=$_POST['id'];
$sum=$_POST['sum'];
/*
print_r($sum);
*/


foreach($id as $id2)
{
	$m=$id2-1;
	$sum2 = $sum[$m];
	
$sql= "INSERT INTO `orderlist` (`order_id`, `product_id`, `order_sum`) VALUES ('".$orderid."','".$id2."', '".$sum2."')";
/*
echo $sql;
*/
mysql_query($sql);

echo "<br>";
	
}
$url='myorder.php';

	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
?>