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
	<h1>CRISPY PATA</h1>
	<p>Crispy pata is a Filipino dish consisting of deep fried pig trotters or knuckles served with a soy-vinegar dip.The dish is quite similar to the German Schweinshaxe.</p>
	
	
	<div class="row">
		<div class="menu-col-1" align="justify">
			<h3>INGREDIENTS:</h3>
			<?php  

			echo "<p> * 1 wholw pig's leg (pata; about 3 to 4 lbs), cleaned</p><br>"; 
			echo "<p> * 6 pieces dried bay leaves</p><br>"; 
			echo "<p> * 2 tablespoons whole peppercorn</p><br>";
			echo "<p> * 4 to 6 pieces star anise (optional)</p><br>";
			echo "<p> * 6 tablespoons salt</p><br>";
			echo "<p> * 2 teaspoons ground black pepper</p><br>";
			echo "<p> * 2 to 3 teaspoons garlic powder</p><br>";
			echo "<p> * 12 to 15 cups water</p><br>";
			echo "<p> * 8 to 12 cups cooking oil</p><br>";
			?>
		</div>

		<div class="menu-col-1" align="justify">
			<h3>PROCEDURE:</h3>
			<?php  

			echo "<p> <b>Step 1:</b> Pour water in a cooking pot then let boil</p><br>"; 
			echo "<p> <b>Step 2:</b> Put-in dried bay leaves, whole peppercorn, star anise, and 4 teaspoons of salt</p><br>"; 
			echo "<p> <b>Step 3:</b> Add the whole pig's leg in the cooking pot then simmer until the leg becomes tender (about 45 to 60 minutes)</p><br>";
			echo "<p> <b>Step 4:</b> Remove the tender leg from the cooking pot and set aside until the temperature goes down</p><br>";
			echo "<p> <b>Step 5:</b> Rub the leg with garlic powder, ground black pepper, and remaining salt. Let stand for 15 minutes to absorb the rub</p><br>";
			echo "<p> <b>Step 6:</b> Heat a clean large cooking pot (preferably with cover) and pour-n the cooking oil</p><br>";
			echo "<p> <b>Step 7:</b> When the oil becomes hot, deep fry the rubbed pork leg. Continue cooking in medium heat until one side becomes crispy, and then cautiously flip the leg to crisp the other side. Note: Be extra careful in doing this procedure.</p><br>";
			echo "<p> <b>Step 8:</b> Turn-off the heat; remove the crispy pork leg; and transfer it to a wide serving plate.</p><br>";
			?>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>FOOD IMAGE</h1>

	<div class="pic">
		<img src="images/crispy-pata.png">
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