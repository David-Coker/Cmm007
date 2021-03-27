<?php
	session_start();
?>
	<!DOCTYPE html>
<html lang="en">
<head>
	<title>flying shoes</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<nav>
		
		
			<a href="index.php"><img src="#" alt="logo placeholder"></a>
		
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="cart.php">Cart</a></li>
			<?php
			if (isset($_SESSION["useruid"])) {
				echo "<li><a href='profile.php'>Profile page</a></li>";
				echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
			}
			 else {
			 	echo "<li><a href='signup.php'>Sign up</a></li>";
				echo "<li><a href='login.php'>Log in</a></li>";	
			 }		
			?>
		</ul>
	
	</nav>
	

	 
