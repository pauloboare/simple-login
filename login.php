<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="post" action="login.php">
<input type="text" name="user" placeholder="User" required /> <br/>
<input type="password" name="password" placeholder="Password" required /> <br/>
<input type="submit" value="Login" />
</form> 

	<?php 
	include "connect.php";
	if(isset($_POST['user'],$_POST['password'])){
		session_start();
		$user=$_POST['user'];
		$password=md5(md5($_POST['password']."#?*&#"));;
		$check=mysqli_query($connect, "SELECT * FROM tb_users WHERE users ='$user' AND passwords ='$password'");

		if(mysqli_num_rows($check) > 0 ) {
			$_SESSION['user-checked']=$user;
			$_SESSION['password-checked']=$password;
			header('location:index.php');
		}
		else {
			unset ($_SESSION['user-checked']);
			unset ($_SESSION['password-checked']);
			echo "Incorrect username or password";
		}
	}
	mysqli_close($connect);
	?>

	<p> Don't have a registration?<a href="register.php"> Make your registration!</a> </p>

</body>
</html>