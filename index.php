			<?php
			include_once 'header.php';
			?>

			<section>
			<?php
			if (isset($_SESSION["useruid"])) {
				echo "<p> Hello there " . $_SESSION["useruid"] . " </p>";
			}			
			?>
			<h1>Welcome to Flying Shoes</h1>
		<p>In this web site you can create your carting system after registering</p>
	</section>
	
	<section class="index-categories">
		<h2>All shoes are here</h2>
		<div class="index-categories-list">
			<div>
				<h3>Shoes 1</h3>
			</div>

			<div>
				<h3>Shoes 2</h3>
			</div>
			<div>
				<h3>Shoes 3</h3>
			</div>
			
		</div>

	</section> 
		

		<?php
			include_once 'footer.php';
			?>

	