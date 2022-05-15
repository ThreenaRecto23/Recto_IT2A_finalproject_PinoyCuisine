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
	<h1>SISIG</h1>
	<p>Sisig is a Filipino dish made from parts of a pig's ears and belly and chicken liver which is usually seasoned with calamansi, onions and chili peppers. it originates from Pampanga region in Luzon.</p>
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 2 lbs pig ears</p><br>"; 
			echo "<p> * 1/4 lb pork belly</p><br>"; 
			echo "<p> * 1 cup onion, minced</p><br>";
			echo "<p> * 3 tbsp soy sauce</p><br>";
			echo "<p> * 1 tsp ground black pepper</p><br>";
			echo "<p> * 1 knob ginger, minced</p><br>";
			echo "<p> * 3 tbsp chili</p><br>";
			echo "<p> * 1 piece lemon (or 3 to 5 pieces calamansi)</p><br>";
			echo "<p> * 1/2 cup butter (or margarine)</p><br>";
			echo "<p> * 1/4 lb chicken liver</p><br>";
			echo "<p> * 34 ounce water</p><br>";
			echo "<p> * 3 tbsp mayonnaise</p><br>";
			echo "<p> * 1 tbsp salt</p>";

			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Pour the water in a pan and bring to a boil</p><br>"; 
			echo "<p> <b>Step 2:</b> Add salt and pepper</p><br>"; 
			echo "<p> <b>Step 3:</b> Put-in the pig's ears and belly then simmer for 40 minutes to 1 hour (or until tender)</p><br>";
			echo "<p> <b>Step 4:</b> Remove the boiled ingredients from the pot then drain excess water</p><br>";
			echo "<p> <b>Step 5:</b> Grill the boiled pig ears and pork belly until doner</p><br>";
			echo "<p> <b>Step 6:</b> Chop the pig ears and belly into fine pieces</p><br>";
			echo "<p> <b>Step 7:</b> In a pan, melt the butter then add the onions. Cook until the onions are soft</p><br>";
			echo "<p> <b>Step 8:</b> Put-in the ginger and cook for a few minutes</p><br>";
			echo "<p> <b>Step 9:</b> Add the chicken liver and cook until well done</p><br>";
			echo "<p> <b>Step 10:</b> Crush the chickenliver while being cooked in the pan</p><br>";
			echo "<p> <b>Step 11:</b> Add the chopped pig ears and pork belly then cook for 10 minutes</p><br>";
			echo "<p> <b>Step 12:</b> Put-in the soy sauce and chili then mix well</p><br>";
			echo "<p> <b>Step 13:</b> Add pepper and salt to taste</p><br>";
			echo "<p> <b>Step 14:</b> Put-in the mayonnaise and mix with other ingredients</p><br><br>";
			echo "<p> You can now serve it.</p>";


			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/sisig.png">
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