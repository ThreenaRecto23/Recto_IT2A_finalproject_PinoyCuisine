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
	<h1>GINATAANG SUSO</h1>
	<p>Ginataang Suso o Ginataang Kuhol is a Filipino snail stew made from snails in coconut milk with leafy vegetables, onion, garlic, ginger, bagoong alamang and salt and pepper.</p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1 kilo of snail (suso)</p><br>"; 
			echo "<p> * 1 kilo of shredded coconut</p><br>"; 
			echo "<p> * 1/2 clove of garlic</p><br>";
			echo "<p> * 1 big onion, sliced </p><br>";
			echo "<p> * 2 tbsp. of ginger strips</p><br>";
			echo "<p> * 2 tbsp. of shrimp paste </p><br>";
			echo "<p> * 1 medium sized green papaya</p><br>";
			echo "<p> * Moringa or malunggay leaves</p><br>";
			echo "<p> * 2 tbsp. of fish sauce or according to your taste</p><br>";
			echo "<p> * Hot chili</p><br>";
			
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> To extract the coconut milk, pour about 2 cups of water on a 1 kilo of shredded coconut</p><br>"; 
			echo "<p> <b>Step 2:</b> On a caserolr, put coconut milk with the other ingredients such as garlic, ginger, onion, shrimp paste. fish sauce or salt and bring to a boil until the coconut milk become thick</p><br>"; 
			echo "<p> <b>Step 3:</b> When boiling, pour the snail (suso) and boil again</p><br>";
			echo "<p> <b>Step 4:</b> Next  step is to add the papaya and moringa/malunggay leaves</p><br>";
			echo "<p> <b>Step 5:</b> If you like it hot, put few chopped hot chilli. Don't overcooked the papaya.</p><br>";
			echo "<p> <b>Step 6:</b> Serve hot. Share and Enjoy! </p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/ginataang-suso.png">
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