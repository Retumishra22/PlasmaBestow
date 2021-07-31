<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
	<title>Plasma Bestow</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

    <link rel="stylesheet" href="../assests/css/contact.css">
</head>
<body>
	<!-- ffefa0 - light color
	ac4b1c - dark color -->
    <div class="nav container">
		<div class="logo"><a href="../index.php"> <h1>Logo</h1></a></div>
		<ul class="nav-links">
			
			<li> <a style="color: #fc2d2d;" href="contact.php">Contact Us</a></li>
            <?php
            if(isset($_SESSION['email'])){
                echo '<li><a href="appointments.php">Appointments</a></li>';
                echo '<li> <a href="home.php">Home</a></li>';
                echo '<li> <a href="../includes/logout.inc.php">Logout</a></li>';

            }
            else{
                echo '<li><a href="about.php">About</a></li>';
                echo '<li> <a href="login.php">Login</a></li>';
                echo '<li> <a href="registration.php">Register</a></li>'; 
            }
            ?>
           
		</ul>
	</div>
	<section class="cover">
		<img src="../assests/images/abouthero.svg" alt="">
		<div class="overlay">
			<h1>Contact us</h1>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, nostrum.</p>
			<a href="registration.php">Register</a>
        </div>
    </section>
</section>
<section class="about container">
    <h2 class="section-header">Contact Details</h2>
    <div class="about-main">
        <div class="about-content">
            
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione odit tenetur porro rerum placeat perspiciatis voluptates eum alias laboriosam.</p>		
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione odit tenetur porro rerum placeat perspiciatis voluptates eum alias laboriosam.</p>
        </div>
        <div class="about-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione odit tenetur porro rerum placeat perspiciatis voluptates eum alias laboriosam.</p>	
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione odit tenetur porro rerum placeat perspiciatis voluptates eum alias laboriosam.</p>
        </div>	
    </div>
</section>
<section class="map">
    <h2 class="section-header">Map</h2>
    <div id="mapid"></div>
</section>
    <?php
		include_once 'footer.php';
	?>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <script src="../assests/js/script.js"></script>
</body>
</html>