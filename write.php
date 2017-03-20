<?php
session_start();
if(!isset($_SESSION['ID']))
{
	echo "UnAuthorized Access";
}
else{

 $title = $_POST['title'];
 $body = $_POST['body'];
 $user = $_SESSION['ID'];
if ($title=="" || $body=="")
 {
   ?>
	<script>
    alert('Fields Cannot be empty');
    history.back();
    </script>

   <?php
  
}
else
{
 $conn =  mysqli_connect("localhost","root","","trial1");


$query = "INSERT INTO posts(title,body,user_id) VALUES ('$title','$body','$user')";

if($result = mysqli_query($conn,$query))
{

header("Location: welcome.php");
}
else
{
	 mysqli_error($conn);
}
}
}
?>