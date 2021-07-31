<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: login.php");
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
			
            <li> <a href="contact.php">Contact Us</a></li>
            <li><a href="appointments.php">Appointments</a></li>
			<li> <a style="color: #fc2d2d;" href="home.php">Home</a></li>
			<li> <a href="../includes/logout.inc.php">Logout</a></li>
		</ul>
	</div>


    <div class="home-head">
    
    <?php 
        include_once '../includes/connect.php';
        $email=$_SESSION['email'];
        
        
        $sql = "SELECT * FROM users WHERE email='$email';";
        $res = $con->query($sql);
    if ($res->num_rows > 0) {
        // output data of each row
         while($row = $res->fetch_assoc()) {
    
    $name = $row['fname'] ." ". $row['lname'];
    echo "<h1> Welcome, " . $name ."</h1>";
        
    ?>
    
    <div class="buttons">
        <a href="donate.php" class="donatebutton">Donate</a>
        <a href="receive.php" class="receiverbutton">Receive</a>
    </div>
    </div>

    <div class="aboutme container">
        <h1>User Information</h1>
        
        <ol>
            <li>Name                    : <?php echo $name; ?></li>
            <li>Blood group             : <?php echo $row['blood_group']; ?></li>
            <li>Gender                  : <?php echo $row['gender']; ?></li>
            <li>Date of Birth           : <?php echo $row['dob']; ?></li>
            <li>Phone                   : <?php echo $row['phone']; ?></li>
            <li>State                   : <?php echo $row['state']; ?></li>
            <li>City                    : <?php echo $row['city']; ?></li>
            <li>Pincode                 : <?php echo $row['pincode']; ?></li>
            <li>Medical Complication   : <?php echo $row['med_complication']; ?></li>
        </ol>
    <?php
         }
        }
    ?>
        <a href="edit.php" class="edit-info">Edit</a>
        <?php 
        if(isset($_GET['error'])){
            if($_GET['error'] == "none"){
                echo "<script type='text/javascript'>alert('Update sucessful!'); </script>";
            }
        }
        ?>

    </div>

	<?php
		include_once 'footer.php';
	?>
	




	<!--<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>-->
   <script src="assests/js/script.js"></script>
</body>
</html>