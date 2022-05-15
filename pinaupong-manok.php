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
	<h1>PINAUPONG MANOK</h1>
	<p> Pinaupong Manok is a Filipino dish wherein a whole chicken is seated upright. It is steam cooked until tender and flavorful.</p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1 whole chicken</p><br>"; 
			echo "<p> * 2 whole onions, quartered</p><br>"; 
			echo "<p> * 1 whole garlic, pounded with skin</p><br>";
			echo "<p> * 1/2 thumb size ginger, minced</p><br>";
			echo "<p> * 3 stalks lemon grass</p><br>";
			echo "<p> * Fresly ground black pepper</p><br>";
			echo "<p> * 3 cups rock salt</p><br>";
			echo "<p> * Banana leaves</p><br>";
			echo "<p> * 3 tbsp melted butter</p><br>";
			echo "<p> * 3 tbsp chicken drippings (you get this when you rest the chicken, don't use the one from the bottom of the pot)</p><br>";
			echo "<p> * 1 tsp ginger paste</p><br>";
			echo "<p> * 3 cloves garlic, minced</p><br>";
			echo "<p> * Banana leaves</p><br>";
			echo "<p> * Salt</p><br>";
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Generously rub chicken with salt, garlic and fresly ground black pepper inside the cavity and outside</p><br>"; 
			echo "<p> <b>Step 2:</b> Stuff the cavity with onions, lemon grass, garlic and ginger</p><br>"; 
			echo "<p> <b>Step 3:</b> Place 3 cups of rock salt in the bottom of an earthenware pot then line the top with banana leaves. Place chicken in a sitting position then place in an open flame over stove or fire burner, make sure the rest of the chicken would not touch the sides of the pot. Cook for 2 to 2 1/2 hours or until chicken is tender</p><br>";
			echo "<p> <b>Step 4:</b> Once cooked, place chicken in a wire rock to cool, let the juice run in a container</p><br>";
			echo "<p> <b>Step 5:</b> Place all sauce ingredients together in a sauce pan and simmer in low heat for 5 minutes</p><br>";
			echo "<p> <b>Step 6:</b> Place chicken in a serving plate then serve with dipping sauce.</p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/pinaupong-manok.png">
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