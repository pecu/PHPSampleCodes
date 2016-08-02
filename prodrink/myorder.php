<?php
include('linkdb.php'); 
include('head.php'); 
	

$user=$_SESSION['user'];

$sql="SELECT count(*) FROM `orderno` where user_id='".$user."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$count=$row['count(*)'];

if($count==0){
	echo "沒有訂購過喔!!";
}
else{
	

$sql="SELECT * FROM `orderno` where user_id='".$user."' order by order_date";
$result=mysql_query($sql);
?>
<head></head>
<body>
<div id="about">
	<h1>我的訂單</h1>
<table border="1">

<th>訂單編號</th><th>訂購日期</th><th></th>

<?php

while($row=mysql_fetch_assoc($result)){
	$value = str_pad($row['id'],6,'0',STR_PAD_LEFT);
	echo "<tr>";
	echo "<td width='150px'>T".$value."</td>";
	echo "<td width='250px'>".$row['order_date']."</td>";
	
	echo "<td width='150px'><a href='showorder.php?id=".$row['id']."'>查看訂單</td>";
	echo "</tr>";
}

?>

</table>

</div>
<?php
}
include('footer.php'); 
?>

</body>