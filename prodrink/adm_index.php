<?php
include('linkadmdb.php');
include('head.php');
$pri=$_SESSION['adm_pri'];

?>
<head></head>
<body>
<div id="about">
<h1>後台管理</h1>
<?php
if($pri==2){
?>
<a href="add_admin.php">新增管理者</a>　
<a href="all_product.php">所有產品項目</a><br><br>

<?php
}


$sql="SELECT * FROM `orderno`  order by order_date";
$result=mysql_query($sql);
?>
<head></head>
<body>

	<h2>所有訂單</h2>
<table border="1">

<th>訂單編號</th><th>訂購人</th><th>訂購日期</th><th></th>

<?php


while($row=mysql_fetch_assoc($result)){
	$value = str_pad($row['id'],6,'0',STR_PAD_LEFT);
	echo "<tr>";
	echo "<td width='150px'>T".$value."</td>";
	echo "<td width='150px'>".$row['user_id']."</td>";
	echo "<td width='250px'>".$row['order_date']."</td>";
	
	echo "<td width='150px'><a href='showorder2.php?id=".$row['id']."&user=".$row['user_id']."'>查看訂單</td>";
	echo "</tr>";
}

?>
</table>
</div>

<?php
include('footer.php');
?>
</body>