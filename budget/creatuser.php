<?php

include('header.php');

?>
<head>
	<link rel="stylesheet" href="icon.css">
</head>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
            <form action="sendEmail.php" method="post">
                   <table>
						<tr>
                            <td>
                               <h3>User Name</h3>
                            </td>
                            <td>
                                <input type="text" name="username"/>
                            </td>
						</tr>
					    <tr>
						    <td>
							    <h3>Password</h3>
						    </td>
						    <td>
							    <input type="text" name="userpass"/>
						    </td>
					    </tr>
					    <tr>
						    <td><h3>E-mail</h3></td>
						    <td><input type="text" name="email"/></td>
					    </tr>					
				    </table>
				    
				    <?php 
				    	$pageObj -> checkImage("checknum");
				    ?>

				    <button class="btn" type="submit">send</button>
				</form>
			</div>
		</div>
	</div>

				