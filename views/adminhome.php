<?php
session_start();
if(!isset($_SESSION['admin_email'])){
    header("location: adminlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
	<title>Plasma Bestow</title>
	<!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>-->

    <link rel="stylesheet" href="../assests/css/style.css">
</head>
<body>
	<!-- ffefa0 - light color
	ac4b1c - dark color -->
    <div class="nav container">
		<div class="logo"><a href="../index.php"> <h1>Logo</h1></a></div>
		<ul class="nav-links">
        <li> <a style="color: #fc2d2d;" href="adminhome.php">Home</a></li>
			<li> <a href="../includes/logout.inc.php">Logout</a></li>
		</ul>
	</div>


    <div class="home-head-admin">
    <h1>Welcome Admin</h1>
    <div class="buttons">
        <a href="adminuser.php" class="donatebutton">User information</a>
        <a href="admincamp.php" class="receiverbutton">Camp appointments</a>
    </div>
    </div>
    <script src="assests/js/script.js"></script>
</body>
</html>