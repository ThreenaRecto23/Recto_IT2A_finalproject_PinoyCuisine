<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Pinoy Cuisine</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="images/logo-2.png" />
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
	<h1>BEEF STEAK</h1>
	<p>Beef Steak or Bistek in tagalog is made of thinly sliced sirlion braised in a mixture of citrus, soy sauce, onions, and garlic. This Filipino beef steak is hearty, tasty and perfect with steamed rice.</p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1 lb beef sirlion, thinly sliced</p><br>"; 
			echo "<p> * 1/4 cup soy sauce</p><br>"; 
			echo "<p> * 1 piece lemon or 3 pieces calamansi</p><br>";
			echo "<p> * 1/2 tsp ground black pepper </p><br>";
			echo "<p> * 3 cloves garlic, crushed</p><br>";
			echo "<p> * 1 large onion, sliced into rings </p><br>";
			echo "<p> * 3 tbsp cooking oil</p><br>";
			echo "<p> * salt to taste</p><br>";
			
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Marinade beef in soy sauce, lemon (or calamansi), and ground black pepper for at least 1 hour</p><br>"; 
			echo "<p> <b>Step 2:</b> Heat the cooking oil in a pan then stir fry the onion rings until the texture becomes soft. Set aside</p><br>"; 
			echo "<p> <b>Step 3:</b> In the same pan where the onions were fried, fry the marinated beef(without the marinade) until the color turns brown. Set aside</p><br>";
			echo "<p> <b>Step 4:</b> Put-in the garlic then saute for a few minutes</p><br>";
			echo "<p> <b>Step 5:</b> Pour the marinade and bring to a boil</p><br>";
			echo "<p> <b>Step 6:</b> Put in the fried beef and simmer for 15 to 20 minutes or until meat is tender. Add water as need</p><br>";
			echo "<p> <b>Step 7:</b> Add the stir-fried onions and same salt to taste</p><br>";
			echo "<p> <b>Step 8:</b> Serve hot.</p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/beef-steak.png">
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