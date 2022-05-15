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
	<h1>ADOBONG TAHONG</h1>
	<p>Adobong Tahong, also known as Green Mussels Adobo, is a dish of mussels cooked in vinegar, soy sauce, garlic, spices, and seasoning. It can cook in the shell or without them.</p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 4 liter cans green mussels</p><br>"; 
			echo "<p> * 1/2 head garlic crushed</p><br>"; 
			echo "<p> * 2-3 silvers ginger</p><br>";
			echo "<p> * 1-2 red chili, sliced </p><br>";
			echo "<p> * 1/4 cup vinegar</p><br>";
			echo "<p> * 1/4 cup cooking oil </p><br>";
			echo "<p> * 2-3 tbsp soy sauce</p><br>";
			echo "<p> * 2-3 pcs bay leaf</p><br>";
			echo "<p> * 1 tsp. peppercorn</p><br>";
			echo "<p> * 1 medium onion, thinly sliced</p><br>";
			echo "<p> * Salt to taste</p><br>";
			
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Wash and clean the mussels, beard removed, boil it in a pan until the shells are open</p><br>"; 
			echo "<p> <b>Step 2:</b> Remove the mussels meat then in another sauce pan heat the cooking oil, saute garlic and ginger until fragrant</p><br>"; 
			echo "<p> <b>Step 3:</b> Add in the mussels, peppercorn and bay leaf, stir cook for 1 to 2 minutes</p><br>";
			echo "<p> <b>Step 4:</b> Add in vinegar, soy sauce and red chili</p><br>";
			echo "<p> <b>Step 5:</b> Let simmer for 5 to 10 minutes or until most of the liquid has evaporated stirring occasionaly</p><br>";
			echo "<p> <b>Step 6:</b> Garnsih with sliced onions for added flavor</p><br>";
			echo "<p> <b>Step 7:</b> Season with salt to taste. Serve hot </p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/adobong-tahong.png">
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