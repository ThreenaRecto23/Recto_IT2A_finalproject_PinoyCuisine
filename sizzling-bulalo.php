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
	<h1>SIZZLING BULALO</h1>
	<p>Sizzling Bulalo may sound like a new dish, but it has been in existence for a quite sometimes now. Instead of making a delicious soup out of beef shank, this marrowy part of the beef is tenderized and placd on a sizzling metal plate then generously topped with gravy.</p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1 1/2 lbs beef shank</p><br>"; 
			echo "<p> * 1 piece cooked sweet corn, cooked</p><br>"; 
			echo "<p> * 10 onces condensed cream of mushroom soup</p><br>";
			echo "<p> * 2 teaspoons garlic powder </p><br>";
			echo "<p> * 1 1/2 cups fresh white mushrooms, sliced</p><br>";
			echo "<p> * 4 tablespoons butter </p><br>";
			echo "<p> * 2 tablespoons salt</p><br>";
			echo "<p> * 1 teaspoon ground black pepper</p><br>";
			echo "<p> * 3 3/4 cup of water</p><br>";
			
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Make the mushroom gravy</p><br>"; 
			echo "<p> <b>Step 1.1:</b> Heat a cooking pot or sauce pan then add the 1 tablespoon butter and melt</p><br>"; 
			echo "<p> <b>Step 1.2:</b> Put-in the mushroom and saute for 3 minutes </p><br>";
			echo "<p> <b>Step 1.3:</b> Add the condensed cream of mushroom soup then stir</p><br>";
			echo "<p> <b>Step 1.4:</b> Pour 3/4 cup water; add 1/2 teaspoon salt and 1/2 teaspoon groundblack pepper then stir. Simmer for 5 minutes or until the sauce thickens</p><br>";
			echo "<p> <b>Step 1.5:</b> PSet aside</p><br><br>";

			echo "<p> <b>Step 2:</b> Arrange the beef shank in cooking pot then sprinkles 1 teaspoon salt</p><br>";
			echo "<p> <b>Step 3:</b> Pour 3 cups of water and apply heat. Let boil and simmer until the beef is tender. Remove from the cooking pot and place in a clean plate. Note: Add water as needed.</p><br>";
			echo "<p> <b>Step 4:</b> Season both side of beef with 1/2 teaspoon salt, 1/2 teaspoon ground black pepper, and garlic powder. Set aside.</p><br>";
			echo "<p> <b>Step 5:</b> Heat a pan then add 2 tablespoons butter. Let the butter melt</p><br>";
			echo "<p> <b>Step 6:</b> Pan-fry both sides of the beef for at least 2 minutes per side.</p><br>";
			echo "<p> <b>Step 7:</b> Heat the sizzling plate (metal plate) then put-i 1 tablespoon butter and let melt it.</p><br>";
			echo "<p> <b>Step 8:</b> Arrange the pan fried beef on the sizzling plate, top with mushroom gravy and place the corn on the side.</p><br>";


			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/sizzling-bulalo.png">
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