<?php

include('header.php');

?>

    <div id="main">
        <div class="content wrap clearfix">
        	<div class="column-a left">
            <form action="sendEmail.php" method="post">
				<table>
					<tr>
						<td>
							User Name							
						</td>
						<td>
							<input type="text" name="username"/>
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="text" name="password"/>
						</td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td><input type="text" name="email"/></td>
					</tr>					
				</table>            	
            	<button type="submit">send</button>
            </form>
        	</div>
        </div><!-- // end .wrap -->
    </div><!-- // end #main -->
 
</body>
</html>