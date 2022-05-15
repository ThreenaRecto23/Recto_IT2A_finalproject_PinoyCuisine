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
	<h1>CHICKEN ADOBO</h1>
	<p>Chicken Adobo is a Filipino dish made by braising chicken legs (things and/or drumsticks) in a sauce made up of vinegar, soy sauce, garlic and black pepper.</p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1/2 kilo chicken leg(drumstick choice cuts)</p><br>"; 
			echo "<p> * 3 pcs dried bay leaves</p><br>"; 
			echo "<p> * 4tbsp soy sauce</p><br>";
			echo "<p> * 4 tbsp vinegar</p><br>";
			echo "<p> * 3 cloves garlic, minced</p><br>";
			echo "<p> * 1 medium sized onion, sliced</p><br>";
			echo "<p> * 1 pc Red Chili (Siling Haba) seeded thinly  sliced</p><br>";
			echo "<p> * 1/3 cup water</p><br>";
			echo "<p> * 3 tbsp Canola cooking oil</p><br>";
			echo "<p> * 1 tsp peppercorns</p><br>";
			echo "<p> * salt and pepper</p><br>";
			echo "<p> * Green Onion or Scallions(Dahon sibuyas) for garnish(optional)</p><br>";
			
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> In a large wok, add canola oil then saute onion, garlic, ginger, and chicken for 8 to 10 minutes</p><br>"; 
			echo "<p> <b>Step 2:</b> Add pepper, peppercorns, bayleaf and Siling haba(red chili) then saute for another 2 minutes</p><br>"; 
			echo "<p> <b>Step 3:</b> Now add the vinegar, water, and soy sauce then bring to the boil.</p><br>";
			echo "<p> <b>Step 4:</b> Simmer for 5 minutes, add salt to taste.</p><br>";
			echo "<p> <b>Step 5:</b>Garnish with green onions then Serve hot with rice.</p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/chicken-adobo.png">
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