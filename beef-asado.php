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
	<h1>BEEF ASADO</h1>
	<p>Beef Asado is a popular Filipino beef dish that are usually sold in carinderia or food courts serving Filipino dishes.</p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1/2 kilo beef chucks, cut into large cube</p><br>"; 
			echo "<p> * 1/2 cup soy sauce</p><br>"; 
			echo "<p> * 1tbsp hoisin sauce</p><br>";
			echo "<p> * 1/2 head garlic, chopped </p><br>";
			echo "<p> * 1 thumb size ginger, cut into slivers</p><br>";
			echo "<p> * 1 small bundle spring opion, chopped </p><br>";
			echo "<p> * 1 small size red bell pepper, cut into strips</p><br>";
			echo "<p> * 1-2 pievces star anise</p><br>";
			echo "<p> * 1/2 tsp peppercorn</p><br>";
			echo "<p> * 1/4 cup cornstarch</p><br>";
			echo "<p> * salt</p><br>";
			
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> In a sauce pan put beef, pour water to cover, bring to a boil and simmmer for a minutes.</p><br>"; 
			echo "<p> <b>Step 2:</b> Now drain first boiled water and rinse off all scum.Return beef in the sauce pan por fresh water to cover, add in garlic, ginger, onion, star anise and soy sauce.</p><br>"; 
			echo "<p> <b>Step 3:</b> Bring to a boil and simmer at low to medium heat for45 to 60 minutes, add more water as necessary.</p><br>";
			echo "<p> <b>Step 4:</b> Add sugar and hoisin sause, simmer for another 10 to minutes or until the meat are tender and almost disintegrate and the liquid has reduced to about half.</p><br>";
			echo "<p> <b>Step 5:</b>Thicken sauce with cornstarch diluted in 1/4 cup water. Correct saltines if required. Add in the spring onion and bell pepper, cook for another half minute. Serve hot with a lot of rice.</p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/beef-asado.png">
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