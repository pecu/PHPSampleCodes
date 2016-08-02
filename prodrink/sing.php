<?php
include('head.php');
?>
<div id="about">
<h1>新增會員</h1>
<form action="sentEmail.php" method="post"><br><br>
	姓名:<input type="text" name="user_name"/><br><br>
	帳號:<input type="text" name="user_uid"/><br><br>
	密碼:<input type="password" name="user_pass"/><br><br>
	地址:<input type="text" name="user_adress"/><br><br>
	電話:<input type="text" name="user_phone"/><br><br>
	Email:<input type="text" name="user_email"/><br><br>
	<button type="reset">重新填寫</button>
	<button type="submit">送出</button>
</form>
</div>
<?php
include('footer.php');
?>