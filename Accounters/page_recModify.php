<?php session_start();

if(!isset($_SESSION['login_info']))
	header("Location: ./home.php");

include("func_linkdb.php");
$recordInfo = array();
$user_id = $_SESSION['login_info']['user_id'];

if(!isset($_POST['action']) && $_POST["modify_target"]!="")
{
	$editType_text = "UPDATE RECORD";
	
	$sql = "SELECT * FROM `acc_record` WHERE `acc_recid` = \"".$_POST["modify_target"]."\";";
	$result = mysql_query($sql);
	$recordInfo = mysql_fetch_assoc($result, MYSQL_ASSOC);
	$modify_target = $_POST['modify_target'];
}
else if($_POST['action']=="add")
{
	$editType_text = "SUBMIT NEW RECORD";
}
else if($_POST['action']=="delete")
{
	if(isset($_POST['SelectRow']))
	{
		$recordInfo = $_POST['SelectRow'];
		$sql = "DELETE FROM `acc_record` WHERE `acc_recid` IN (\"" . $recordInfo[0] . "\"";
		
		for($i = 1; $i < count($recordInfo); $i++)
		{
			$sql .= (", \"" . $recordInfo[$i] . "\"");
		}
		$sql .= ");";
		
		mysql_query($sql) or die("Record Delete Failure -> ".mysql_error());
		
	}
	header("Location: ./page_home.php");
}

?>

<form id="modify_form" action="./func_recModify.php" method="post">
<font color="#db0000">Record ID: </font>
<input type="text" name="acc_recid" value="<?php $pageCtr -> modifyValue($editType_text, $user_id, $modify_target); ?>" /><br>
Data: <input type="date" name="acc_date" value="<?php echo (isset($recordInfo["acc_date"])?$recordInfo["acc_date"]:"")?>"/><br>
Type: <input type="text" name="acc_typeid" value="<?php echo (isset($recordInfo["acc_typeid"])?$recordInfo["acc_typeid"]:"")?>"/><br>
CASH-IN/OUT: <input type="text" name="money" value="<?php echo (isset($recordInfo["money"])?$recordInfo["money"]:"")?>"/><br>
<font color="#db0000">Plan ID: </font>
<input type="text" name="acc_planid" value="<?php echo (isset($recordInfo["acc_planid"])?($recordInfo["acc_planid"]!=0?$recordInfo["acc_planid"]:""):"")?>"/><br>
note: <input type="text" name="note" value="<?php echo (isset($recordInfo["note"])?$recordInfo["note"]:"")?>"/><br>
<input type="submit" name="action" value="<?php echo $editType_text ?>"/><br><br>
<a href="./page_home.php">HOME</a> | <a href="./func_logout.php">logout</a>
</form>