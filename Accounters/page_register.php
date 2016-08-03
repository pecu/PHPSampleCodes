<?php session_start();
	
	include("func_linkdb.php");

	$checkValue = isset($_POST["checknum"]);
	if($checkValue)
	{
		if( $pageCtr -> verifyImage($_POST["checknum"]) )
		{
			$fill = isset($_POST["action"]);
			if($fill)
			{
				$action = $_POST["action"];
				$userData = array(
				'userid' => $_POST['userid'],
				'userpass' => $_POST['userpass'],
				'usersex' => $_POST['usersex'],
				'useremail' => $_POST['useremail'],
				'userphone' => $_POST['userphone'],
				'useraddr' => $_POST['useraddr'],
				'useridname' => $_POST['useridname'],
				'username' => $_POST['username'], 
				'userbirth' => $_POST['userbirth']);
				
				$pageCtr -> registerUser($action, $userData);
			}			
		}
	}
	
?>

<div>
	<h1> New User Registration <h2>
</div>
<br>
<form action="page_register.php" method="post" id="register_application">
	<font color="#ff0000">*</font>
	User ID: <input type="text" name="userid" required="required" value="<?php echo ($fill ? $_POST['userid'] : "")?>"/>
	<input type="submit" name="action" value="VERIFY"/><br>
	<font color="#ff0000">*</font>
	password: <input type="password" name="userpass"/><br>
	<font color="#ff0000">*</font>
	Name: <input type="text" name="username" value="<?php echo ($fill ? $_POST['username'] : "")?>"/><br>
	nickname: <input type="text" name="useridname" value="<?php echo ($fill ? $_POST['useridname'] : "")?>"/><br> 
	<font color="#ff0000">*</font>
	email: <input type="text" name="useremail" value="<?php echo ($fill ? $_POST['useremail'] : "")?>"/><br>
	Sex: <select name="usersex" form="register_application">
  			<option value="M">Male</option>
  			<option value="F">Female</option>
		</select><br>
	<font color="#ff0000">*</font>
	Birthday: <input type="date" name="userbirth" value="<?php echo ($fill ? $_POST['userbirth'] : "")?>"/><br>
	Phone number: <input type="text" name="userphone" value="<?php echo ($fill ? $_POST['userphone'] : "")?>"/><br>
	Address: <input type="text" name="useraddr" value="<?php echo ($fill ? $_POST['useraddr'] : "")?>"/><br>
	<br>
	
	<?php
		
		$pageCtr -> checkImage();
		
	?>
	
	<input type="submit" name="action" value="SUBMIT"/>
</form>
<br><a href="./page_home.php">HOME</a> | <a href="./page_login.php">LOGIN</a>