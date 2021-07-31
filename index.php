<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
	<title>Plasma Bestow</title>
	<!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>-->

    <link rel="stylesheet" href="./assests/css/style.css">
</head>
<body>
	<!-- ffefa0 - light color
	ac4b1c - dark color -->
    <div class="nav container">
		<div class="logo"><a href="index.php"> <h1>Logo</h1></a></div>
		<ul class="nav-links">
			
			<li> <a href="views/about.php">About Us</a></li>
			<?php
            if(isset($_SESSION['email'])){
              echo '<li><a href="views/appointments.php">Appointments</a></li>';
                echo '<li> <a href="views/home.php">Home</a></li>';
                echo '<li> <a href="includes/logout.inc.php">Logout</a></li>';

            }
            else{
              echo '<li> <a href="views/contact.php">Contact Us</a></li>';
                echo '<li> <a href="views/login.php">Login</a></li>';
                echo '<li> <a href="views/registration.php">Register</a></li>'; 
            }
      ?>
			
		</ul>
	</div>
	<section class="cover">
		<div class="parallax"></div>
		<!--<img src="./assests/images/plasma.jpg" alt="">-->
		<div class="overlay">
			<h1>Plasma <span>Bestow</span> </h1>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, nostrum.</p>
			<a href="views/registration.php">Get Started</a>
		</div>
		
	</section>
	<section class="about container">
		<h2 class="section-header">Topic</h2>
		<div class="about-main">
			<div class="about-content">
				<h3>subtopic</h3>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione odit tenetur porro rerum placeat perspiciatis voluptates eum alias laboriosam.</p>		
			</div>
			<div class="about-image"><img src="./assests/images/hero.jpg" alt=""></div>	
		</div>
	</section>
	
	<section class="process">
		<div class="parallax1"></div>
		<h2 class="section-header">Types of Donations</h2>
		<div class="process-main  container">
			<div class="process-1">
				<p>	The human body contains five liters of blood, which is made of several useful components i.e. Whole blood, Platelet, and Plasma. 
					Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.
					For plasma and platelet donation you must have donated whole blood in past two years.
				</p>
			</div>
			<div class="process-2">
				<h3>What is it?</h3>
				<p>The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in.Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions.</p>
				<h3>Who can donate?</h3>
				<p>You need to be 18-70 (men) or 20-70 (women) years old, weigh 50kg or more and must have given successful whole blood donation in last two years.</p>

			</div>
			<div class="process-3">
				<h3>User for?</h3>
				<p>Immune system conditions, pregnancy (including anti-D injections), bleeding, shock, burns, muscle and nerve conditions, haemophilia, immunisations.</p>
				<h3>Lasts For?</h3>
				<p>Plasma can last up to one year when frozen.</p>
			</div>
			<div class="process-4">
				<h3>How does it work?</h3>
				<p>We collect your blood, keep plasma and return rest to you by apheresis donation.</p>
				<h3>How long does it take?</h3>
				<p>15 minutes to donate.</p>
				<h3>How often can I donate?</h3>
				<p>Every 2-3 weeks</p>
			</div>

		</div>
	</section>
	                              
	<section class="about-donation">
		<h2 class="section-header">Learn about Donation</h2>
		<div class="about-donation-main container">
			<div class="about-donation-content">
				 <p>After donating blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn, helps in maintaining good health.</p> 
				<a href="views/registration.php">Register</a>
			</div>
			<div class="about-donation-image">
				<img src="./assests/images/hero.jpg" alt="">
			</div>
		</div>
	</section>
	<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/08Pb-UZPLiU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<section class="map">
		<h2 class="section-header">Map</h2>
		<div id="mapid"></div>
	</section>-->
	<?php
		include_once 'views/footer.php';
	?>
	




	<!--<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>-->
   <script src="assests/js/script.js"></script>
</body>
</html>