 <?php
	 include_once 'header.php';
	?>   

<section class="signup-form">  
	 <h2>Sign up</h2>
	 <!-- The function action is use to redirect the after the action is taken after the button(submit is pushed) -->
	<form action="includes/signup.inc.php" method="post"> 
		
		<!-- Signup inputs -->
<input type="text" name="name" placeholder="Full name">
<input type="text" name="email" placeholder="Email">
<input type="text" name="uid" placeholder="Username">
<input type="password" name="pwd" placeholder="password">
<input type="password" name="pwdrepeat" placeholder="Repeat password">
<button type="submit" name="submit">Sign Up</button>
		
	</form> 

	<?php
	//To check the form has been submitted correctly
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyinput") {
			echo "<p> Fill in all fields!</p>";
		}
		else if ($_GET["error"] == "invaliduid") {
			echo "<p>Choose a proper username!</p>";
		}
		else if ($_GET["error"] == "invalidemail") {
			echo "<p>Choose a proper email!</p>";
		}
		else if ($_GET["error"] == "passwordsdontmatch") {
			echo "<p>password dont match!</p>";
		}
		else if ($_GET["error"] == "stmtfailed") {
			echo "<p>Something went wrong!</p>";
		}
		else if ($_GET["error"] == "usernametaken") {
			echo "<p>Username already taken!</p>";
		}
		else if ($_GET["error"] == "none") {
			echo "<p>You have signed up!</p>";
		}
	}
	?>
	</section>

	


	<?php
		include_once 'footer.php';
	?> 
