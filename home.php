<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h3>Welcome To Home Page</h3>
	</div>
	<?php
           if (isset($_SESSION['message'])) {
           echo "<div id = 'error_msg'>".$_SESSION['message']."</div>";
           	unset($_SESSION['message']);
           }

	?>
     <h1>Home</h1>
     <div>
     	<a href="logout.php">Logout</a>
     </div>

</body>
</html>