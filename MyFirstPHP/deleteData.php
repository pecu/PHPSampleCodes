<?php

include('linkdb.php');

foreach( $_POST["userid"] as $item )
{
	$delSQL = "DELETE FROM `user` WHERE `userid`='" . $item . "'";
  	mysql_query($delSQL);
}

mysql_close($link);

?>