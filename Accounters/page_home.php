<?php session_start();

if(isset($_SESSION['login_info']))
{
	echo "<h2>Welcome, " . ($_SESSION['login_info']['user_sex'] == 'M' ? 'Mr. ' : 'Ms. ') . 
	$_SESSION["login_info"]["user_id"] . "! | <a href='./func_logout.php'>LOGOUT</a><h2>";
	
	if(isset($_GET['view']))
		$view = $_GET['view'];
	else
		$view = "record";
	
	include("content_activityBar.php");
	
	switch($view)
	{
		case "record":
			include("content_record.php");
			break;
		
		case "user_modify":
			include("content_userModify.php");
			break;
			
		case "plan_modify":
			include("content_planModify.php");
			break;
		
		case "type_modify":
			include("content_typeModify.php");
			break;
	}
	
}
else
{
	echo "<h2><a href='./page_login.php'>LOGIN</a> | <a href='./page_register.php'>register</a><h2><br>";
	echo "<h3> Please LOGIN to activate the service! </h3>";
}

?>
