<?php
	if(!isset($_SESSION["login_info"]))
		header("Location: ./page_home.php");
	
	echo "<table border='1'>";
 	echo "<tr>";
 	if($view == "record")
   	{
   		echo "<th>All Records</th>";
   	}
   	else
   		echo '<th><a href="./page_home.php?view=record">All Records</a></th>';
   	if($view == "plan_modify")
   	{
   		echo "<th>Modify Plans</th>";
   	}
   	else
   		echo '<th><a href="./page_home.php?view=plan_modify">Modify Plans</a></th>';
   	if($view == "user_modify")
   	{
   		echo "<th>Modify UserInfo</th>";
   	}
   	else
   		echo '<th><a href="./page_home.php?view=user_modify">Modify UserInfo</a></th>';
   	if($view == "type_modify")
   	{
   		echo "<th>Modify Types</th>";
   	}
   	else
   		echo '<th><a href="./page_home.php?view=type_modify">Modify Types</a></th>';
 	echo "</tr>";
	echo "</table>";
	
?>