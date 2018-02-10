<?php
      session_start();
      //connect to database
      $db = mysqli_connect('localhost','root','','demo1');
       
       if (isset($_POST['login_btn'])) {
       	$username = $_POST['username'];
       	$password = $_POST['password'];

       	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
       $result = mysqli_query($db,$sql);
       	
       	if (mysqli_num_rows($result)==1) {
       		$_SESSION['message'] = "You are Logged in";
       		header('Location: home.php');
       	}
       	else{
       		$_SESSION['message'] = "Failed To Login";
       		
       	}
       }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
        <h3>Login Here</h3>
	</div>
	<?php
           if (isset($_SESSION['message'])) {
           		echo "<div id = 'error_msg'>".$_SESSION['message']."</div>";
           	    unset($_SESSION['message']);
           }

	?>
	<form method="post" action="login.php">
		<table>
			<tr>
				<td><i>UserName:</i></td>
				<td><input type="text" name="username" class="textInput"></td>
			</tr>
			<tr>
				<td><i>Password:</i></td>
				<td><input type="password" name="password" class="textInput"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login_btn" value="Login"></td>
			</tr>

		</table>
		<a href="register.php"><i>Not Registered Yet??</i></a>
	</form>

</body>
</html>