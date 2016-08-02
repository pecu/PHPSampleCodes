<?php
session_start();
$login_type=$_SESSION["login_type"];

echo $login_type;

if( $login_type == "admin" )
{
	include("linkadmdb.php");
}
else
{
	include("linkdb.php");
}

$order_sum=$_POST['order_sum'];
$orderlist_id=$_POST['orderlist_id'];
$order_id=$_POST['order_id'];

$sql="UPDATE `orderlist` SET `order_sum` ='".$order_sum."' where `orderlist_id` ='".$orderlist_id."'";



mysql_query($sql);


$link_ind="showorder2.php?id=".$order_id."&user=". $_POST["order_user"];
?>

<script type="text/javascript">
location.href= ('<?php echo $link_ind; ?>'); 


</script>
