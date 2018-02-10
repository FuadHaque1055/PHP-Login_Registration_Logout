<?php
     session_start();

     //database connection

     $db = mysqli_connect('localhost','root','','demo1');
     
     //button action
     if (isset($_POST['register_btn'])) {
     	//session_start();
     	$username = $_POST['username'];
     	$email = $_POST['email'];
     	$password = $_POST['password'];
     	$password2 = $_POST['password2'];

     	if ($password==$password2) {
     		$sql = "INSERT INTO users(username,email,password)VALUES('$username','$email','$password')";
     		
     		mysqli_query($db,$sql);
     		$_SESSION['message'] = "You Are Registered !!";
     		header('Location: login.php');
     		
     	
     	}else{
     		$_SESSION['message'] = "Passwords donot match";
     	}
     }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h3>Registration Form</h3>
	</div>
	<?php
           if (isset($_SESSION['message'])) {
           	echo "<div id = 'error_msg'>".$_SESSION['message']."</div>";
           	unset($_SESSION['message']);
           }

	?>
	<form action="register.php" method="post">
		<table>
	        <tr>
				<td><i>UserName:</i></td>
				<td><input type="text" name="username" class="textInput"></td>
	        </tr>
	       
	        <tr>
	        	<td><i>Email:</i></td>
	        	<td><input type="text" name="email" class="textInput"></td>
	        </tr>
	        <tr>
	        	<td><i>Password:</i></td>
	        	<td><input type="password" name="password" class="textInput"></td>
	        </tr>
	        <tr>
	        	<td><i>Re-enter Password:</i></td>
	        	<td><input type="password" name="password2" class="textInput"></td>
	        </tr>
	        <tr>
	        	<td></td>
	        	<td><input type="submit" name="register_btn" value="Register"></td>
	        </tr>
		</table>
		<a href="login.php">Already Registered?</a>
	</form>

</body>
</html>