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
	<h1>CHICKEN CURRY</h1>
	<p>Chicken curry is a dish originating from the Indian subcontinent but it is famous dish in the Philippines called Ginataan. </p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1 kl Chicken</p><br>"; 
			echo "<p> * 2 mideum size potato, chopped</p><br>"; 
			echo "<p> * 1 big carrot, sliced</p><br>";
			echo "<p> * 1 tbsp garlic, minced</p><br>";
			echo "<p> * 3 stalks ciliry, cut into 2 inches length</p><br>";
			echo "<p> * 1 mideum onion, chopped</p><br>";
			echo "<p> * 1 small red bell pepper, cut into cubes</p><br>";
			echo "<p> * 2 tbsp fish sauce</p><br>";
			echo "<p> * 1 cup coconut milk</p><br>";
			echo "<p> * 2 tbsp curry powder</p><br>";
			echo "<p> * 1 thumb ginger, cut stripes</p><br>";
			echo "<p> * 1 cup water</p><br>";
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Cut the chichen into pieces. Leave the chicken bone in. If you prepare bone chicken meat,then de-bone the chicken</p><br>"; 
			echo "<p> <b>Step 2:</b> Heat up the a deep pot and add the oil</p><br>"; 
			echo "<p> <b>Step 3:</b>  Fried the potato and carrot for 2 mins and set aside</p><br>";
			echo "<p> <b>Step 4:</b> Saute chicken together with garlic, onion and ginger</p><br>";
			echo "<p> <b>Step 5:</b> When garlic is lighjt brown in color add fish sause and curry power</p><br>";
			echo "<p> <b>Step 6:</b> Stire well then add water then cover the pot and lower the heat to mideum and simmer until the chicken is tender.</p><br>";
			echo "<p> <b>Step 7:</b> Once the chicken is cooked, add the red bell pepper, ciliry, carrot and potato then simmer for 5 minutes.</p><br>";
			echo "<p> <b>Step 8:</b> Add the coconut milk and mix well.Simmer for another 5 minutes</p><br>";
			echo "<p> <b>Step 9:</b> Serve hot with rice.</p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/chicken-curry.png">
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