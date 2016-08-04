<?php
include('link.php');
include("header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-1.5 col-md-10 col-md-offset-2">
<html>
<title>All Data</title>
<head>
<script type="text/javascript">

	function do_this_all()
    {
    	var checkboxes = document.getElementsByName('no[]');
        var button = document.getElementById('delall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = 'TRUE';
		}
    }
    function undo_this_all()
    {
    	var checkboxes = document.getElementsByName('no[]');
        var button = document.getElementById('undelall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = '';
		}
    }
</script>
</head>
<body>

<center><table>

<?php

echo $_SESSION["user"] . "您好<br>";
$actionName = "sendOrder.php";
$reportSQL1 = "SELECT * FROM `product` ORDER BY `product`.`no` ASC";
$buttonName = array("delall", "undelall");
$pageObj -> showTable($actionName, $reportSQL1, "Show All Data", $buttonName, "T");

?>

</table></center>
</body>
</html>

<?php
include("footer.php");
?>