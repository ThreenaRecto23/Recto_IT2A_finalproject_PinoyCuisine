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
					<li><a href="menu.php">MENU</a></li>
					<li><a href="about.php" class="active">ABOUT</a></li>
				</ul>

			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i> <!---ICON for navigation menu---->
		</nav>

		<h1>PINOY CUISINE</h1>
		

</section>


<!--------Menu------------>

<section class="menu">
	<h1>ABOUT WEBSITE</h1>
	
	
	
	<div class="row">
		<div class="about-col" align="justify">
			<p>Pinoy Cuisine is a website that contains recipes of famous Filipino dishes. This will help people who don't know how to cook or people who also loves to cook. This will serve as a guide for them in cooking. This website consists of Home, Menu and About page. <br><br> In Home page, it contains the contents of the website, and if you notice there are three navigations at the top and all of them are functional. The Home page also contains lists and pictures of dishes that are popularly cooked here in the Philippines. <br><br> In the Menu page, there are list of popular pork, chicken, beef and seafood dishes. All of the dishes in the box are functional and you will be directed to another webpage wherein you will discover its ingredients and cook procedure for that selected dish, as well the food image. </p>	
		</div>
	</div>
</section>


<!---------Photos-------->
<section class="photos">
	<h1>CREATORS</h1>

	<div class="row">
		<div class="photo-col-2">
			<img src="images/threena.png">
			<div class="layer">
				<h3>THREENA R. RECTO</h3>     <!------layer for image------> 
			</div>
		</div>

		

		<div class="photo-col-2">
			<img src="images/shela.png">
			<div class="layer">
				<h3>SHELA MAY R. ROGELIO</h3>     <!------layer for image------> 
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