<?php session_start();

	if(isset($_SESSION["login_info"]))
	{
		echo "You have already Logged in!<br><br>Redirecting ...";
	            
		header("Location: ./page_home.php");
	}
	else if(isset($_POST['action']))
	{
		include("func_linkdb.php");
	
		$sql = "SELECT * FROM `user` where `user_id` = \"" . $_POST['userid'] . "\";";
		$result = mysql_query($sql) or die("Error requesting data from Database! - " . mysql_errno());
		$info = mysql_fetch_assoc($result, MYSQL_ASSOC);
		
		if($info['user_id'] == $_POST['userid'] && $info['user_pass'] == $_POST['userpass'])
		{
			session_set_cookie_params(600);
			$_SESSION["login_info"] = array(
											'user_id' => $info['user_id'],
   											'user_pass' => $info['user_pass'],
											'user_sex' => $info['user_sex'],
											'user_email' => $info['user_email'],
											'user_level' => $info['user_level'],
											'user_phone' => $info['user_phone'],
											'user_addr' => $info['user_addr'],
											'user_idname' => $info['user_idname'],
											'user_name' => $info['user_name'], 
											'user_birth' => $info['user_birth']
											);
	        
	        echo "Confirmed a Successful Login!<br><br>Redirecting ...";
	            
	        header("Location: ./page_home.php"); exit;
		}
		else
			echo '<script type="text/javascript">alert("Wrong Username/Password!"); </script>';
	}
	
?>

<form method="post" action="./page_login.php">
	User ID: <input type="text" name="userid"/><br>
	Password: <input type="password" name="userpass"/><br>
	<input type="submit" name="action" value="Login"/>
</form>
<br><a href="./page_home.php">HOME</a> | <a href="./page_register.php">don't have a account?</a>
