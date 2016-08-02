<?php
  	session_set_cookie_params(600);
	session_start();
	$_SESSION["id"] = "";
	$_SESSION["user"] = "";
	$_SESSION["pass"] = "";
	$_SESSION["pri"] = "";
	$_SESSION["adm_user"] = "";
	$_SESSION["adm_pass"] = "";
	$_SESSION["adm_pri"] = "";
	$_SESSION["adm_id"] = "";
	session_write_close();
   $url = "index.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
?>