<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<?php
		require './tools/pageControl.php';
		$pageCtr = new pageControl;
		echo $pageCtr -> changPageTo("page_home.php");
	?>
	</body>
</html>