<?php


$username = $_POST['username'];

$password = $_POST['password'];

if($username==""||$password=="")
	{
	?>

	<script>
    alert('Fields Cannot Be Empty');
    history.back();
    </script>
<?php 
}

else
{
  
    $conn =  mysqli_connect("localhost","root","","trial1");

    $query = "SELECT * FROM register WHERE email = '$username' AND password = '$password'";

    $result = mysqli_query($conn,$query);
      
       $row= mysqli_num_rows($result);
      
       if($row = mysqli_fetch_assoc($result))
      
       {
      
       	session_start();

         $_SESSION['ID'] = $row['ID'];
      
         $_SESSION['name'] = $row['name'];
      
         $_SESSION['email'] = $row['email'];
      
         $_SESSION['address'] = $row['address'];
	
	header("Location: welcome.php");
       	}
 
else

  {
  	 ?>
       <script>
          alert('Incorrect Login');
       history.back();
            </script>
     <?php
}


}
?>