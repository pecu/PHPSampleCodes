<?php session_start();

include("func_linkdb.php");

if(isset($_SESSION['login_info'])||isset($_POST['action']))
	header("Location: ./page_home.php");

if($_POST["action"]=="SUBMIT NEW RECORD")
{
	$sql = "INSERT INTO `acc_record` (`acc_date`, `user_id`, `acc_typeid`, `money`, `acc_planid`, `note`, `acc_recid`) 
			VALUES ('".$_POST['acc_date']."', '".$_SESSION['login_info']['user_id']."', '".$_POST['acc_typeid']."', 
					'".$_POST['money']."', '".($_POST['acc_planid']==""?"0":$_POST['acc_planid'])."', 
					'".$_POST['note']."', '".$_POST['acc_recid']."');";
	
	if(!mysql_query($sql))
		die("Update data failure ->".mysql_error());
		
	echo '<script type="text/javascript">alert("Record Updated ! Redirecting..."); </script>';
	header("Location: ./page_home.php");
}
else if($_POST["action"]=="UPDATE RECORD")
{
	$sql = 	"UPDATE `acc_record` SET `acc_date` = '".$_POST["acc_date"].
				"', `acc_typeid` ='".$_POST["acc_typeid"].
				"', `money` ='".$_POST["money"].
				"', `note` ='".$_POST["note"].
				"' WHERE `acc_recid` = '".$_POST['acc_recid']."'";
				
	if(!mysql_query($sql))
		die("Mission failure ->".mysql_error());
		
	echo '<script type="text/javascript">alert("Record Added ! Redirecting..."); </script>';
	header("Location: ./page_home.php");
}
?>