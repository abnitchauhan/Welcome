<?php

$name = $_POST['name'];

$email = $_POST['email'];

$password = $_POST['password'];

$repassword = $_POST['repassword'];

$address = $_POST['address'];

if($name==""||$email==""||$password==""||$repassword==""||$address=="")
{
	?>

	<script>
    alert('Fields Cannot Be Empty');
    history.back();
    </script>
<?php
}
if($password!=$repassword)
{
  ?>

	<script>
    alert("Password Don't Match");
    history.back();
    </script>
<?php
}
 elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  ?>

	<script>
    alert('Email Is Not Valid');
    history.back();
    </script>
<?php
	}
else{

    
    $conn =  mysqli_connect("localhost","root","","trial1");
  

    $query = "INSERT INTO register(name,email, password, address) VALUES ('$name','$email', '$password', '$address')";

    $result = mysqli_query($conn, $query);

     if(!$result)
     {
     	echo "Error" . mysqli_error($conn);
     }
     else
     {
     	header("Location: login.php");
     }

}
?>