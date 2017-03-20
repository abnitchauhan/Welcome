<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
</head>
<body>
<div>
	<form action="signin.php" method="POST">
		<table>
			<tr>
			 <td>UserName</td>
			 <td>:</td>
			 <td><input type="username" name="username"></td>
			</tr>
	        <tr>
			 <td>Password</td>
			 <td>:</td>
			 <td><input type="password" name="password"></td>
			<tr>
            	<td colspan="2"></td>
               <td><input type="submit" name="submit"></td> 

            </tr>  
			</tr>
            <tr>
            	<td colspan="2"></td>
               <td>New User ? <a href="index.php"> Sign Up</td> 

            </tr>   
		</table>


	</form>
</div>
</body>
</html>