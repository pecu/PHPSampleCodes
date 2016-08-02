<?php

?>
<html>
<head>
	<title>About - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.html">Zero Type</a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">index</a>
				</li>
					<?php 
						session_start();
						$login_type = $_SESSION["login_type"];
						if( $login_type	== "admin" )
						{
							echo "<li>";
							echo "<a href=\"adm_index.php\">管理訂單</a>";
							echo "</li>";
							echo "<li>";
							echo "<a href=\"report.php\">會計報表</a>";
							echo "</li>";
							echo "<li>";
							echo "<a href=\"logout.php\">管理員 ". $_SESSION["adm_user"] . " 登出</a>";
							echo "</li>";
						}
						else
						{
							echo "<li>";
							echo "<a href=\"myorder.php\">我的訂單</a>";
							echo "</li>";
							echo "<li>";
							echo "<a href=\"order_product.php\">訂購飲料</a>";
							echo "</li>";
							echo "<li>";
							echo "<a href=\"admin_login.php\">登入後台</a>";
							echo "</li>";
						}
					?>				
				<!--
				<li class="active">
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				-->
			</ul>
		</div>
	</div>
	<div id="contents">