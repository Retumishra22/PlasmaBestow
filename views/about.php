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

    <link rel="stylesheet" href="../assests/css/about.css">
</head>
<body>
	<!-- ffefa0 - light color
	ac4b1c - dark color -->
    <div class="nav container">
		<div class="logo"><a href="../index.php"> <h1>Logo</h1></a></div>
		<ul class="nav-links">
			<li><a style="color: #fc2d2d;" href="about.php">About</a></li>
			
      <?php
            if(isset($_SESSION['email'])){
              echo '<li><a href="appointments.php">Appointments</a></li>';
                echo '<li> <a href="home.php">Home</a></li>';
                echo '<li> <a href="../includes/logout.inc.php">Logout</a></li>';

            }
            else{
              echo '<li> <a href="contact.php">Contact Us</a></li>';
                echo '<li> <a href="login.php">Login</a></li>';
                echo '<li> <a href="registration.php">Register</a></li>'; 
            }
      ?>
      
		</ul>
	</div>
	<section class="cover">
		<img src="../assests/images/abouthero.svg" alt="">
		<div class="overlay">
			<h1>About us</h1>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, nostrum.</p>
			<a href="registration.php">Register</a>
		</div>
		
    </section>
    <section class="about container">
		<h2 class="section-header">Plasma Bestow</h2>
		<div class="about-main">
			<div class="about-content">
				
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione odit tenetur porro rerum placeat perspiciatis voluptates eum alias 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corporis recusandae incidunt iusto deleniti! Alias magnam, nihil quos ipsum consequuntur quo at blanditiis debitis, reprehenderit et, quae omnis ab rerum ratione sed? Blanditiis delectus veniam, itaque ad ullam, repudiandae tempore reiciendis voluptatum dolorem quod perspiciatis dolorum laborum aperiam quia. Ad.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione odit tenetur porro rerum placeat perspiciatis voluptates eum alias 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corporis recusandae incidunt iusto deleniti! Alias magnam, nihil quos ipsum consequuntur quo at blanditiis debitis, reprehenderit et, quae omnis ab rerum ratione sed? Blanditiis delectus veniam, itaque ad ullam, repudiandae tempore reiciendis voluptatum dolorem quod perspiciatis dolorum laborum aperiam quia. Ad.
                </p>		
            </div>
        </div>
        <div class="about-img-main">
            <div class="about-image">
                <img src="../assests/images/hero.jpg" alt="">

            </div>
            <div class="about-image">
                <img src="../assests/images/hero.jpg" alt="">

            </div>
            <div class="about-image">
                <img src="../assests/images/hero.jpg" alt="">

            </div>
		</div>
    </section>
    <section class="video container">
		<h2 class="section-header">Video</h2>
		<form>         
            <video width = "80%" height = "auto" id="video" src = "../assests/video/v1.mp4" controls>
            Your browser does not support the video element.
            </video>
            <br />
            <div class="video-button">
            <input type = "button" class="button" onclick = "PlayVideo();" value = "Play"/>
            <input type = "button" class="button" onclick = "PauseVideo();" value = "Pause"/>
            <input type = "button" class="button" onclick = "fullScreen();" value = "Full Screen"/>
            <input type = "button" class="button" onclick = "NormalVideo();" value = "Normal Screen"/>
            </div>
         </form>
    </section>
    <div class="map container">
        <h2 class="section-header">Map</h2>
        <div id="map">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1k_dNnCXyZPvk1Qrc6wO5GXa4Q9cY2Wsi" 
            width="640" height="480"></iframe>
            <!--<iframe src="https://www.google.com/maps/d/u/0/edit?mid=1k_dNnCXyZPvk1Qrc6wO5GXa4Q9cY2Wsi&usp=sharing"></iframe>-->
        </div>
    </div>

    <?php
		include_once 'footer.php';
	  ?>
</body>
<script type = "text/javascript">
    var myVideo=document.getElementById("video");
    function PlayVideo() {
        myVideo.play(); 
    }
    function PauseVideo() {
       myVideo.pause(); 
    }
    function fullScreen() { 
    if (myVideo.requestFullscreen) {
    myVideo.requestFullscreen();
  } else if (myVideo.mozRequestFullScreen) { /* Firefox */
    myVideo.mozRequestFullScreen();
  } else if (myVideo.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    myVideo.webkitRequestFullscreen();
  } else if (myVideo.msRequestFullscreen) { /* IE/Edge */
    myVideo.msRequestFullscreen();
  }
}  
    function NormalVideo() { 
        myVideo.width = 700; 
    } 
 </script>
</html>