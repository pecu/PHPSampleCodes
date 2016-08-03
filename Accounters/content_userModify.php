<?php if (session_status() == PHP_SESSION_NONE) session_start();

if(!isset($_SESSION['login_info']))
	header("Location: ./page_home.php");

include("func_linkdb.php");

if(isset($_POST["action"]))
{	
	$sql = 	"UPDATE `user` SET `user_idname` = '".$_POST["useridname"].
			"', `user_pass` ='".$_POST["userpass"].
			"', `user_name` ='".$_POST["username"].
			"', `user_birth` ='".$_POST["userbirth"].
			"', `user_phone` ='".$_POST["userphone"].
			"', `user_addr` ='".$_POST["useraddr"].
			"', `user_email` ='".$_POST["useremail"].
			"' WHERE `user`.`user_id` ='".$_SESSION['login_info']['user_id']."'";

	if(!mysql_query($sql))
	{	
		echo "<script type='text/javascript'>alert(\"Unexpected Error! :: ".
		mysql_error()."\"); </script>";
		header("Loaction: ./home.php");
	}
	else
	{
		echo "<script type='text/javascript'>alert(\"Modify Accepted! Redirecting...\"); 
		</script>";
		
		$sql = "SELECT * FROM `user` where `user_id` = \"" . 
		$_SESSION['login_info']['user_id'] . "\";";

		$pageCtr -> setToSession($sql);
		
	    header("Location: ./page_home.php");
	}
}

?>

<form action="./content_userModify.php" method="post" id="register_application">
			
	User ID: <input type="text" name="userid" required="required" 
					value="<?php echo ($_SESSION['login_info']['user_id'])?>" disabled/><br>			
			
	password: <input type="password" name="userpass"
					value="<?php echo ($_SESSION['login_info']['user_pass'])?>"/><br>			
			
	Name: <input type="text" name="username" 
				value="<?php echo ($_SESSION['login_info']['user_name'])?>"/><br>
			
	nickname: <input type="text" name="useridname" 
					value="<?php echo ($_SESSION['login_info']['user_idname'])?>"/><br> 
			
	email: <input type="text" name="useremail" 
				value="<?php echo ($_SESSION['login_info']['user_email'])?>"/><br>
	
	Sex: <select name="usersex" form="register_application" disabled>
  			<option value="M" 
  			<?php if($_SESSION['login_info']['user_sex']=='M') echo "selected=\"selected\"";?>>Male</option>
  			<option value="F" 
  			<?php if($_SESSION['login_info']['user_sex']=='F') echo "selected=\"selected\"";?>>Female</option>
		</select><br>
			
	Birthday: <input type="date" name="userbirth" 
					value="<?php echo ($_SESSION['login_info']['user_birth'])?>"/><br>
			
	Phone number: <input type="text" name="userphone" 
						value="<?php echo ($_SESSION['login_info']['user_phone'])?>"/><br>
			
	Address: <input type="text" name="useraddr" 
					value="<?php echo ($_SESSION['login_info']['user_addr'])?>"/><br>
	<br>
	<input type="submit" name="action" value="SUBMIT"/>

</form>