<?php
		
if(isset($_GET['view']))
{
	if($_GET['view']=="plan_modify") 
	{		
		if($_SESSION["login_info"]['user_level']<10)
  		{

				include("func_linkdb.php");
			
				echo '		
					<div>
						<h1> === plan Modify === <h2>
					</div>					
				    <form action="plan_modify.php" method="post" id="register_application">
						<input type="submit" name="action" value="Add"/>
					</form> ';
				echo '=================================';
				echo '	
				    <form action="plan_modify.php" method="post" id="register_application">
						<input type="submit" name="action" value="Delet"/>
						<input type="submit" name="action" value="Selet_all"/>
					</form> ';
					
		}
		else
		{
		
				echo "<div>
						<h1> === User Only === <h2>
					</div>
					<br>";
		}		
  	}
}
?>