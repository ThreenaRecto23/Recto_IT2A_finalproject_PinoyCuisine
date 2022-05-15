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
		<h3>Reminder: Tap the recipe you wish to make to proceed in the following procedure. </h3>

</section>


<!--------Menu------------>

<section class="menu">
	<h1>FILIPINO FAMOUS RECIPES</h1>
	
	<div class="row">
		<div class="menu-col" id="menu-link">
			<h3>PORK</h3>
			<ul>
				<li><a href="sisig.php">Sisig</a></li>
				<li><a href="kare-kare.php">Kare-Kare</a></li>
				<li><a href="humba.php">Humba</a></li>
				<li><a href="crispy-pata.php">Crispy Pata</a></li>
			</ul>
		</div>

		<div class="menu-col" id="menu-link">
			<h3>CHICKEN</h3>
			<ul>
				<li><a href="pinaupong-manok.php">Pinaupong Manok</a></li>
				<li><a href="chicken-curry.php">Chicken Curry</a></li>
				<li><a href="pininyahang-manok.php">Pininyahang Manok</a></li>
				<li><a href="chicken-adobo.php">Chicken Adobo</a></li>
			</ul>
		</div>

		<div class="menu-col" id="menu-link">
			<h3>BEEF</h3>
			<ul>
				<li><a href="beef-asado.php">Beef Asado</a></li>
				<li><a href="beef-tapa.php">Beef Tapa</a></li>
				<li><a href="sizzling-bulalo.php">Sizzling Bulalo</a></li>
				<li><a href="beef-steak.php">Beef Steak</a></li>
			</ul>
		</div>

		<div class="menu-col" id="menu-link">
			<h3>SEAFOOD</h3>
			<ul>
				<li><a href="adobong-tahong.php"> Adobong Tahong</a></li>
				<li><a href="chili-crab.php">Chili Crab</a></li>
				<li><a href="buttered-shrimp.php">Buttered Shrimp</a></li>
				<li><a href="ginataang-suso.php">Ginataang Suso</a></li>
			</ul>
		</div>
		

	</div>

</section>


<!---------Photos-------->
<section class="photos">
	<h1>PHOTOS OF RECIPES</h1>

	<div class="row">
		<div class="photo-col">
			<img src="images/PORK-PIC.png">
			<div class="layer">
				<h3>PORK RECIPES</h3>     <!------layer for image------> 
			</div>
		</div>

		<div class="photo-col">
			<img src="images/CHICKEN-PIC.png">
			<div class="layer">
				<h3>CHICKEN RECIPES</h3>     <!------layer for image------> 
			</div>  
		</div>

		<div class="photo-col">
			<img src="images/BEEF-PIC.png">
			<div class="layer">
				<h3>BEEF RECIPES</h3>     <!------layer for image------> 
			</div>
		</div>

		<div class="photo-col">
			<img src="images/SEAFOOD-PIC.png">
			<div class="layer">
				<h3>SEAFOOD RECIPES</h3>     <!------layer for image------> 
			</div>
		</div>
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