
<html>

	<head>
		<meta charset="utf-8">
		<title>UserAdmin</title>
		
		<link rel="stylesheet" href="css/reset.css">    
        <link rel="stylesheet" href="css/style.css">
	</head>

	<body>
	
		<h1>Add new contacts</h1>
		
	    <form action="adduser.php" method="POST">
	    	<table border= 0 color='black' size=100 width="500">
	    		<tr>
			      	<td>User Name</td>
			      	<td><input name='username'></td>
			    </tr>
			    <tr>
			      	<td>Password</td>
			      	<td><input name='password'></td>
			    </tr>
		    </table>
		    	<p></p>
		    	<button type="submit" >Add User</button>		    	
		    	<button type="submit" name="login" value="1">Login</button>
	    </form>
	</body>

</html>




