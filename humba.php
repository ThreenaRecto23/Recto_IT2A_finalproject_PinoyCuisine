<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Pinoy Cuisine</title>
	<link rel="icon" type="image/x-icon" href="images/logo-2.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400&family=Ubuntu:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    <!---CDN Link---->
</head>
<body>

	<section class="sub-header">
		<nav>
			<a href="index.php"><img src="images/Pinoy-Cuisine.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>  <!---ICON for closed---->
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="menu.php" class="active">MENU</a></li>
					<li><a href="about.php">ABOUT</a></li>
				</ul>

			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i> <!---ICON for navigation menu---->
		</nav>

		<h1>MENUS</h1>
		<p>Believe in yourself, you can make good food and great vibes.</p>

</section>


<!--------Menu------------>

<section class="menu">
	<h1>HUMBA</h1>
	<p>Humba is a sweet pork dish that resembles the famous pork adobo in terms of apperance. It is a Filipino braised pork dish originating from the Visayas Island of the Philiipines.</p>
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 2 lbs pork belly</p><br>"; 
			echo "<p> * 1 cup pineapple juice</p><br>"; 
			echo "<p> * 1 large onion, diced</p><br>";
			echo "<p> * 5 cloves garlic, minced</p><br>";
			echo "<p> * 2 tablespoons salted black beans</p><br>";
			echo "<p> * 2 tablespoons soy sauce</p><br>";
			echo "<p> * 2 tablespoons vinegar</p><br>";
			echo "<p> * 2 1/2 tablespoons brown sugar</p><br>";
			echo "<p> * 1/2 cup dried banana blossoms</p><br>";
			echo "<p> * 2 pieces dried bay leaves</p><br>";
			echo "<p> * 1 teaspoon whole peppercorn</p><br>";

			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Heat the cooking potthen brown the pork belly</p><br>"; 
			echo "<p> <b>Step 2:</b> Add the onions and garlic and cook until the onions are soft</p><br>"; 
			echo "<p> <b>Step 3:</b> Put-in the soy sauce, peppercorn, bay leaves</p><br>";
			echo "<p> <b>Step 4:</b> Pour-in the pineapple juice and let boil. Simmer until the pork is tender (add water as needed)</p><br>";
			echo "<p> <b>Step 5:</b> Add the vinegar and wait for the mixture to re-boil. Simmer for 3 minutes.</p><br>";
			echo "<p> <b>Step 6:</b> Spoon-in the salted black beans and brown sugar then simmer for 5 minutes</p><br>";
			echo "<p> <b>Step 7:</b> Add the dried banana blossoms and simmer for 5 to 8 minutes.</p><br>";

			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/humba.png">
	</div>
</section>





<!--------Footer------------>
<section class="footer">
	<h4> ABOUT US</h4>
	<p>This website is best for those people who loves to cook and learn how to cook. <br> It was created to better represent the Philippines most popular dishes. This website also provides culinary recipes and ingredients.  </p><br>
	<h4>For Video Tutorials</h4>
	<div class="icons">
		<i class="fa fa-facebook" ></i>
		<i class="fa fa-youtube-play" ></i>
	</div>
</section>



<!------JavaScript for Toggle menu------>
<script>
	var navLinks = document.getElementById("navLinks")

	function showMenu(){
		navLinks.style.right ="0";
	}

	function hideMenu(){
		navLinks.style.right ="-200px";
	}

</script>




</body>
</html>