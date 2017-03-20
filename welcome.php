<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Welcome</title>

<style>
table{

border-collapse: collapse;

}
</style>
</head>
<body>
<?php

if(isset($_SESSION['ID']))


{
	$user = $_SESSION['ID'];
	?>
	<h3>Hello : <span style="color: green"><?php echo $_SESSION['name']; ?></span></h3>
</body>
<form action="write.php" method="POST">
<table>
	<tr>
		<td>Title</td>
<td> : </td>
		<td><input type="text" name="title" placeholder="Title"></td>
	</tr>
		<tr>
		<td>Post</td>
<td> : </td>
		<td><textarea rows="7" cols="50" name="body"></textarea></td>
	</tr>
<tr>
<td colspan="2"></td>
	<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>

<!-- THis IS for Showing the POSTS By the Log In Customer -->
<?php


 $conn =  mysqli_connect("localhost","root","","trial1");

$query = "SELECT * FROM posts WHERE user_id = '$user' ORDER BY ID DESC ";



$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0)
{
?>
<h2> Your Posts </h2>

<?php  
while($row = mysqli_fetch_assoc($result))
{
$id=$row['ID'];
?><br/>
<div style="background: #ddd; ">
	<header><h3><?php echo $row['title'] ; ?></h3></header>
	<br/>
	<article><?php echo $row['body'] ; ?></article>
   <p><a href="postdelete.php?ID= <?php echo $id ; ?>">delete </a></p>

</div>



<?php
}
}

else
{
 ?>

 <h2>Not Posted Yet</h2>
<?php
}

?>
<br/><br/>
<form action="destroy.php" method="post">
	<input type="submit" name="submit" value="LogOut">
</form>


	<?php
}
else
{
 echo "Error";
}



?>


</body>
</html>