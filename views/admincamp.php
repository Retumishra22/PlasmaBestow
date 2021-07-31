<?php
session_start();
if(!isset($_SESSION['admin_email'])){
    header("location: adminlogin.php");
    exit();
}
?>
<head>
  
  <meta charset="UTF-8">
      <link rel="stylesheet" href="../assests/css/style.css">
</head>
<body>
<div class="nav container">
		<div class="logo"><a href="../index.php"> <h1>Logo</h1></a></div>
		<ul class="nav-links">
            <li> <a href="adminhome.php">Home</a></li>
			<li> <a href="../includes/logout.inc.php">Logout</a></li>
		</ul>
</div>
    <div class="home-head">
        <h1>Camp Appointments</h1>
        <div class="search-container">
            <form action="">
                <input type="text" id="search" placeholder="Search" name="search">
                <!-- <input type="text" id="usrEmailID" placeholder="Enter user email ID" name="usrEmailID"> -->
                <!-- <input type="button" value="Search" class="userbutton"/> -->
                <!-- <i class="fa fa-search"></i> -->
            </form>
        </div>
    </div>
<?php 

        
include_once '../includes/connect.php';

$sql = "SELECT * FROM appointments";
$res = $con->query($sql);
?>


</div>

<div class="aboutme container">

<table id = "banks">
    <thead>
        <tr>
            <th>Appointment ID</th>
            <th>Name</th>
           <th>Email</th>
           <th>Camp ID</th>
           <th>Camp name</th>
           <th>Date</th>
           <th>Time</th>
           <th>Address</th>
           <th>Contact</th>
           
        </tr>
    </thead>
    <?php if ($res->num_rows > 0) {
                // output data of each row
            while($row = $res->fetch_assoc()) {
                $userid = $row['users_id'];
                $camp_id = $row["camp_id"];
                $camp = "SELECT * FROM camp_schedule where camp_id ='$camp_id'";
                $res1 = $con->query($camp);
                if ($res1->num_rows > 0) {
                // output data of each row
                    while($row1 = $res1->fetch_assoc()) {
                        $users = "SELECT * FROM users where users_id='$userid'";
                        $res2 = $con->query($users);
                        if ($res2->num_rows > 0) {
                            // output data of each row
                            while($row2 = $res2->fetch_assoc()) {
                                $name = $row2['fname'] ." ". $row2['lname'];


        ?>
    <tbody id="search-table">
        
        <tr>
            <td><?php echo $row["a_id"];?></td>
            <td><?php echo  $name;?></td>
           <td><?php echo  $row2['email'];?></td>
           <td><?php echo $row['camp_id'];?></td>
           <td><?php echo $row1["camp_namp"];?></td>
           <td><?php echo $row1["camp_date"];?></td>
           <td><?php echo $row1["camp_time"];?></td>
           <td><?php echo $row1["camp_address"];?></td>
           <td><?php echo $row1["contact"];?></td>
           
        </tr>
    
    </tbody>

    <?php
                            }
                        }
                    }
                }
            }
        }
        else{
            echo "No appointments";
        }
    ?>
</table>

</div>






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

