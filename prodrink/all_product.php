<script type="text/javascript">
    function do_this_all()
    {
    	var checkboxes = document.getElementsByName('id[]');
        var button = document.getElementById('delall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = 'TRUE';
		}
    }
    
    function undo_this_all()
    {
    	var checkboxes = document.getElementsByName('id[]');
        var button = document.getElementById('undelall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = '';
		}
    }
</script>
<?php
include('head.php');
include('linkadmdb.php');
if($_SESSION['adm_pri']!='2'){
	$url = "adm_index.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}
?>
<head></head>
<body>
<div id="about">
	<h1>所有產品</h1>
<table border="1">
<form action="do_product.php" method="post" name="form">
<tr>
	<td width="100px">選擇</td>
	<td width="250px">商品</td>
	<td width="100px">價格</td>
	
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
	
	echo "</tr>";
	
		
}
?>
</tr>
</table>
<br>
<button type="submit" name="DelData" value="0">Delete</button>
<button type="button" id="delall" value="Select All" onClick="do_this_all()" />Select All</button>
<button type="button" id="undelall" value="Unselect" onClick="undo_this_all()" />Unselect</button>
<button type="submit" name="addToList" value="1">Add to My List</button>
</form>

</div>
</body>
<?php
include('FOOTER.php');
?>
