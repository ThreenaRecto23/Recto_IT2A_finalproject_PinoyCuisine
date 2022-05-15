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
	<h1>PININYAHANG MANOK</h1>
	<p>Pininyahang manok, commonly anglicized as pineapple chicken, is a Philippine dish consisting of chicken braised in a milk with pineapples, carrots, potatoes and bell peppers. </p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1 whole Chicken</p><br>"; 
			echo "<p> * 1 whole onion, chopped</p><br>"; 
			echo "<p> * 1 whole garlic, minced/p><br>";
			echo "<p> * 2 tbsp olive oil</p><br>";
			echo "<p> * 2 medium size potatoes, peeled and quartered(can be smaller)</p><br>";
			echo "<p> * 2 medium size carrot, peeled cut into one size</p><br>";
			echo "<p> *1 red bell pepper, cut into approx 1 square inch</p><br>";
			echo "<p> * 2 tbsp fish sauce or patis</p><br>";
			echo "<p> * Dash of pepper</p><br>";
			echo "<p> * 2 tbsp tickles</p><br>";
			echo "<p> * 1 can (500g) pineapple chuncks in syrup</p><br>";
			echo "<p> * 3/4 cup evaporated milk(or fresh milk, but better result with evap)</p><br>";
			echo "<p> * 1/2 cup grated cheese</p><br>";

			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Chop the chicken into samll pieces</p><br>"; 
			echo "<p> <b>Step 2:</b> Heat a medium dutch oven (or any pan you prapare). When its hot, put olive oil and heat it up, saute garlic until golden brown, add the onion until it become transparent</p><br>"; 
			echo "<p> <b>Step 3:</b> Add the chicken and saute for about a minutes, then add patis(add depending on your taste). Mix then add pepper and pickles. Simmer then cover. Juices will start to come out</p><br>";
			echo "<p> <b>Step 4:</b> Wait until chicken is half cooked then add the pineapple chunks including the syrup.</p><br>";
			echo "<p> <b>Step 5:</b>When the chicken is cooked, add carrots and potatoes.Simmer until the vegetables are cooked</p><br>";
			echo "<p> <b>Step 6:</b> Add bell pepper, then stir and bring back to boil.</p><br>";
			echo "<p> <b>Step 7:</b> Add the milk then cheese until melted.</p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/pininyahang-manok.png">
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