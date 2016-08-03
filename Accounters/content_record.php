<head>
<script src="sorttable.js"></script>
<script type="text/javascript">

	function toggle(mysource)
	{
		checkboxes = document.getElementsByName("SelectRow[]");
		for(var i=0, n=checkboxes.length;i<n;i++)
		{
			checkboxes[i].checked = mysource.checked;
		}
	}
</script>
</head>

<form id="record_form" action="./page_recModify.php" method="post">
	<br>
	<button type="submit" name="action" value="delete">delete</button> | 
	<button type="submit" name="action" value="add">add</button>
	<br>
		<?php
			include("func_linkdb.php");
			$raw_data = mysql_query("SELECT * FROM `acc_record` 
			WHERE `user_id` = \"".$_SESSION['login_info']['user_id']."\" 
			ORDER BY `acc_recid` ASC;");
			$pageCtr -> showTable($raw_data);
		?>
	<font size="2">*click on the TITLEs to show sorted data</font>
</form>