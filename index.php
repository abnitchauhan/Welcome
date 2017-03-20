<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Trial 1</title>
	<link type="text/css" href="style.css" rel="StyleSheet"/>
</head>
<body>
<form action="signup.php" method="POST">
<table class="tablebox" align="center">
	<tr>
	<td> Name </td>
 	<td> : </td>
 		<td>
           <input type="text" name="name" />			
		</td>
	</tr>

<tr>
<td> Email </td>
 	<td> : </td>

		<td>
		  <input type="text" name="email" />
		</td>
	</tr>

<tr>
<td> Password </td>
 	<td> : </td>

		<td>
			<input type="password" name="password" />
		</td>
	</tr>
	<tr>
<td> ReEnter Password </td>
 	<td> : </td>

		<td>
			<input type="password" name="repassword" />
		</td>
	</tr>

<tr>
<td> Address </td>
 	<td> : </td>

		<td>
			 <input type="text" name="address" />
		</td>
	</tr>
	<tr>
		<td></td>
	</tr>		
	<tr>
	<td colspan="2"></td>
		<td>
			<input type="submit" name="submit" value="Submit">
		</td>
	</tr>
	<tr>
		<td colspan="2"></td>
	<td>
	<br>
	Already Registered ?<a href="login.php"> Log In</a> 
	</td>
	</tr>

</table>
</form>
</body>
</html>