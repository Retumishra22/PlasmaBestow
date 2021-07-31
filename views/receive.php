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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h1> Plasma Banks </h1>
        <div class="search-container">
            <form action="">
                <input type="text" id="search" placeholder="Search.." name="search">
                <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
            </form>
        </div>
    <?php 

        
        include_once '../includes/connect.php';
        $email=$_SESSION['email'];
        
        
        $sql = "SELECT * FROM plasma_banks";
        $res = $con->query($sql);
    ?>
   
    
   </div>

    <div class="aboutme container">
        
        <table id = "banks">
            <thead>
                <tr>
                   <th>ID</th>
                   <th>Bank Name</th>
                   <th>Address</th>
                   <th>Locality</th>
                   <th>Email</th>
                   <th>Phone</th>
                </tr>
            </thead>
            <?php if ($res->num_rows > 0) {
                        // output data of each row
                    while($row = $res->fetch_assoc()) {
        
                ?>
            <tbody id="search-table">
                
                <tr>
                   <td><?php echo $row["bank_id"];?></td>
                   <td><?php echo $row["bank_name"];?></td>
                   <td><?php echo $row["bank_address"];?></td>
                   <td><?php echo $row["bank_locality"];?></td>
                   <td><?php echo $row["email"];?></td>
                   <td><?php echo $row["phone"];?></td>
                </tr>
            
            </tbody>
        
            <?php
                    }
                }
            ?>
        </table>
        
    </div>
    <?php
		include_once 'footer.php';
	?>
	
	




	<!--<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>-->
   <script src="assests/js/script.js"></script>
   <script src= 
        "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
    <script> 
            $(document).ready(function() { 
                $("#search").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#search-table tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
        </script>
</body>
</html>

