<?php
$link_ind='showorder.php?id='.$_POST['order'];

include('linkdb.php');

foreach($_POST['order_id'] as $id2){
	
	
	$sql= "delete from `orderlist` where orderlist_id='".$id2."'";
mysql_query($sql);
}


?>

<script type="text/javascript">
location.href= ('<?php echo $link_ind; ?>'); 

   
</script>
