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
        <h1> Plasma Donation Camps</h1>
        <div class="search-container">
            
                <input type="text" id="search" placeholder="Search.." name="search">
                <button id="myBtn" class="register">Register</button>
                <!-- <input type="button" value="Register" class="register"/> -->
                <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
            
        </div>
    <?php 

        
        include_once '../includes/connect.php';
        $email=$_SESSION['email'];
        
        
        $sql = "SELECT * FROM camp_schedule";
        $res = $con->query($sql);
    ?>
   
    
   </div>

    <div class="aboutme container">
        
        <table id = "banks">
            <thead>
                <tr>
                   <th>ID</th>
                   <th>Camp Name</th>
                   <th>Date</th>
                   <th>Time</th>
                   <th>Address</th>
                   <th>City</th>
                   <th>Contact</th>
                   <!-- <th>Register</th> -->
                   
                </tr>
            </thead>
            <?php if ($res->num_rows > 0) {
                        // output data of each row
                    while($row = $res->fetch_assoc()) {
        
                ?>
            <tbody id="search-table">
                
                <tr>
                   <td><?php echo $row["camp_id"];?></td>
                   <td><?php echo $row["camp_namp"];?></td>
                   <td><?php echo $row["camp_date"];?></td>
                   <td><?php echo $row["camp_time"];?></td>
                   <td><?php echo $row["camp_address"];?></td>
                   <td><?php echo $row["camp_city"];?></td>
                   <td><?php echo $row["contact"];?></td>
                   <!-- <td>
                   <div class="buttons">
                    <form>
                   <input type = "button" class="register" value = "Register"/>
                    </form>
                    </div>
                   </td> -->
                </tr>
            
            </tbody>
        
            <?php
                    }
                }
            ?>
        </table>
        
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content search-container">
            <span class="close">&times;</span>
            <form name="" action="" method="POST">
            <p class="campp">Enter the Camp ID number you want to register for</p>
            <input type="text" class="search" placeholder="Camp ID number" name="campid"/><br>
            <button class="register" name="register">Register</button>
            <?php
                if(isset($_POST['register'])){
                    $campid=(isset($_POST['campid']) ? $_POST['campid'] : null);
                    $session_id = $_SESSION['id'];
                    require_once '../includes/connect.php';
                    if($campid){
                        $campare ="SELECT * from camp_schedule where camp_id = '$campid'";
                        $res = $con->query($sql);
                        if ($res->num_rows > 0) {

                            $sql="INSERT INTO appointments (users_id, camp_id) VALUES ('$session_id', '$campid')";
                            if(mysqli_query($con, $sql)){
                                echo "<script>alert('Appointment Added!');</script>";
                                header("location: appointments.php");
                                exit();
                            } 
                            else{
                                header("location: donate.php");
                                exit();		
                            }
                        }
                        else{
                            echo "<script>alert('Camp ID does not exist');</script>";
                            header("location:appointments.php");
                           
                        }
                    }


                }
                else{
                    
                }
            ?>
            </form>
        </div>

    </div>
    <?php
		include_once 'footer.php';
	?>
	
	




	<!--<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>-->
   <script src="../assests/js/main.js"></script>
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