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
	<h1>KARE-KARE</h1>
	<p>Kare-kare is a Philippine stew (kare derives from "curry") that features a thick savory peanut sauce. </p>
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1 kilo Ox tail</p><br>"; 
			echo "<p> * 1 banana heart (puso ng saging)</p><br>"; 
			echo "<p> * 1 bunch of string beans</p><br>";
			echo "<p> * 1 bunch petchay</p><br>";
			echo "<p> * 2 pcs. eggplant (talong)</p><br>";
			echo "<p> * 1 onion, cut into tiny cubes</p><br>";
			echo "<p> * 5 cloves of garlic, crushed</p><br>";
			echo "<p> * Rice (about 1/2 to 1 cup - roasted until slightly golden brown)</p><br>";
			echo "<p> * Peanuts (1/2 to 1 cup - roasted, preferably without the skin)</p><br>";
			echo "<p> * Atsuwete seeds (1 tablespoon, soaked in lukewarm water)</p><br>";
			echo "<p> * Salt</p><br>";
			echo "<p> * Pepper</p><br>";
			echo "<p> * MSG (optional)</p>";
			echo "<p> * Bagoong alamang</p><br>";
			echo "<p> * 1 kilo Pork, slice small</p><br>";
			echo "<p> * 4 cloves of garlic</p><br>";
			echo "<p> * 1 onion</p><br>";

			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Prepare the Ox Tail </p><br>"; 
			echo "<p> --- Clean and cut the oxtail into serving pieces/slices</p><br>"; 
			echo "<p> --- Place in a kettle</p><br>";
			echo "<p> --- Put enough water to cover</p><br>";
			echo "<p> --- Bring to a boil and then simmer</p><br>";
			echo "<p> <b>Step 2:</b> Vegetables</p><br>";
			echo "<p> --- Prepare all the vegetables (string beans should be cut in half; eggplant into three; for the petchay, just cut the part near the roots; the banana bud into serving slices)</p><br>";
			echo "<p> --- Blanch the string beans, eggplant and petchay</p><br>";
			echo "<p> --- Set aside</p><br>";
			echo "<p> <b>Step 3:</b> Rice and Peanut Paste</p><br>";
			echo "<p> --- Place in a liquefier or blender the roasted peanuts and rice</p><br>";
			echo "<p> --- Strain the Atsuwete seeds and pour the liquid into the liquefier/blender</p><br>";
			echo "<p> --- Pour additional water to cover the rice and peanuts</p><br>";
			echo "<p> --- Liquefy into paste</p><br>";
			echo "<p> --- Set aside</p><br>";
			echo "<p> <b>Step 4:</b> Bagoong Alamang</p><br>";
			echo "<p> --- Saute garlic, onion, pork, and alamang</p><br>";
			echo "<p> --- Season to taste</p><br>";
			echo "<p> --- Set aside</p><br>";
			echo "<p> <b>Step 4:</b> to continue</p><br>";
			echo "<p> --- When the meat is ready tender (but not very tender), put into the kettle the rice-peanut-atsuwete paste</p><br>";
			echo "<p> --- Gently stir to mix the paste with the meat mixture</p><br>";
			echo "<p> --- Continue to simmer, stirring occasionally to prevent the rice and peanut paste from sticking at the bottom of the kettle</p><br>";
			echo "<p> --- Add the banana Bud/heart (puno ng saging)</p><br>";
			echo "<p> --- Season to taste (but be sure its not very salty since we have the ginisang bagoong Alamang to complement the dish</p><br>";
			echo "<p> --- Cover to cook.</p><br>";


			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/kare-kare.png">
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