<?php
session_start();

$id = $_GET['ID'];

$conn =  mysqli_connect("localhost","root","","trial1");

 $query="DELETE FROM posts WHERE ID='$id'";
            
 $result = mysqli_query($conn, $query);
            
   mysqli_close($conn);

header("Location: welcome.php");
   ?>