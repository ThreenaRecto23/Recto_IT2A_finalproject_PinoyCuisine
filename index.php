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

	<section class="header">
		<nav>
			<a href="index.php"><img src="images/Pinoy-Cuisine.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>  <!---ICON for closed---->
				<ul>
					<li><a href="index.php" class="active">HOME</a></li>
					<li><a href="menu.php">MENU</a></li>
					<li><a href="about.php">ABOUT</a></li>
				</ul>

			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i> <!---ICON for navigation menu---->
		</nav>

<div class="text-box">
	<h1>DISCOVER FILIPINO STYLE FOOD</h1>
	<p>Believe in yourself, you can make good food and great vibes.</p>
	<a href="menu.php" class="button">You can click here to proceed to Menu</a>
</div>

</section>


<!--------Menu------------>

<section class="menu">
	<h1>FILIPINO FAMOUS RECIPES</h1>
	
	<div class="row">
		<div class="menu-col">
			<h3>PORK</h3>
			<?php  

			echo "<p> Sisig";
			echo "<p> Kare-Kare";
			echo "<p> Humba";
			echo "<p> Crispy Pata";

			?>
		</div>

		<div class="menu-col">
			<h3>CHICKEN</h3>
			<?php  

			echo "<p> Pinaupong Manok";
			echo "<p> Chicken Curry ";
			echo "<p> Pininyahang Manok";
			echo "<p> Chicken Adobo";

			?>
		</div>

		<div class="menu-col">
			<h3>BEEF</h3>
			<?php  

			echo "<p> Beef Asado";
			echo "<p> Beef Tapa";
			echo "<p> Sizzling Bulalo";
			echo "<p> Beef Steak";

			?>
		</div>

		<div class="menu-col">
			<h3>SEAFOOD</h3>
			<?php  

			echo "<p> Adobong Tahong";
			echo "<p> Chili Crab";
			echo "<p> Buttered Shrimp";
			echo "<p> Ginataang Suso";

			?>
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

<!----------Testimonials-------------->

<section class="reviews">
	<h1>USER REVIEWS</h1>

	<div class="row">
		<div class="review-col">
			<img src="images/picture1.jpg">
			<div>
				<p>This is a great website. I've been using this for years. Awesome help easpecially when you are buying the ingredients. This is recommended for those newly-weds who are still new in cooking. I hope they can add new recipes.</p>
				<h3>Tiffany Zoey</h3>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star-o" ></i>
			</div>
		</div>

		<div class="review-col">
			<img src="images/picture2.jpg">
			<div>
				<p>I'll rate this app 5 stars. The recipes are well organized and not just that, it has cooking tips that's worth reading for. I also find this app very informative/beneficial to those aspiring cooks. Keep up the good work and looking forward to new recipes updates or additions.</p>
				<h3>David Yup</h3>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
			</div>
		</div>

		<div class="review-col">
			<img src="images/picture3.jpg">
			<div>
				<p>I have been using this website since 2019 and I love it so much! It is very user-friendly as the recipes are easy to follow and understand. With this, I have tried cooking and tasted so many new delicious recipes from other regions in the Philippines. Thankyou so much for this wonderful website.</h3>
				<h3>Samantha Perez</h3>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star" ></i>
				<i class="fa fa-star-half-o" ></i>
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