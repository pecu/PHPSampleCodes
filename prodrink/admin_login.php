<?php
include('head.php');
?>
<head></head>
<body>
<div id="about">
<h1>後台登入</h1>
<form action="check_admin.php" method="post">
	帳號:<input type="text" name="user"/><br><br>
	密碼:<input type="password" name="pass"/><br><br>
	<button type="submit">送出</button>
</form>

</div>
</body>
<?php
include('footer.php');
?>
