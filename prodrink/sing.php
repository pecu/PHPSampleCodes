<?php
include('head.php');
?>
<div id="about">
<h1>�s�W�|��</h1>
<form action="sentEmail.php" method="post"><br><br>
	�m�W:<input type="text" name="user_name"/><br><br>
	�b��:<input type="text" name="user_uid"/><br><br>
	�K�X:<input type="password" name="user_pass"/><br><br>
	�a�}:<input type="text" name="user_adress"/><br><br>
	�q��:<input type="text" name="user_phone"/><br><br>
	Email:<input type="text" name="user_email"/><br><br>
	<button type="reset">���s��g</button>
	<button type="submit">�e�X</button>
</form>
</div>
<?php
include('footer.php');
?>