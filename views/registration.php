<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
<link Rel="stylesheet" type="text/css" href="../assests/css/registration.css"/>

</head>
<body>
	<form name="myform" action="../includes/signup.inc.php" onsubmit="return validateform()" method="POST">
		<div class='container'>
		<h2>REGISTRATION</h2>
		
		<div class='row'>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="text" id="firstname" name="fname" placeholder="First Name" >
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="text" id="lastname" name="lname" placeholder="Last Name" >
			</div>
		</div>
		<div class="row">
			<div class='col-lg-12 col-md-12 col-sm-12'>
				<input class="input" id='emailid' type='email' name="email" placeholder="Email">
			</div>
		</div>
		<div class="row">
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="date" autocomplete="off" spellcheck="false" placeholder="Date of Birth" name="dob" value=""  id="dob" min="1997-01-01" max="2030-12-31" />
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<select name="gender" class="input" id="gender" type="select" >
					<!--<option disabled="disabled" selected="selected">--Select Gender--</option>-->
					<option value="">--Select Gender--</option>
                	<option>Female</option>
                	<option>Male</option>
                	<option>Other</option>
                </select>
			</div>
		</div>
		<div class="row">
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="text" placeholder="Blood Group" value=""  name="blood_group" id="bloodgroup"/>
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<select name="med_complication" id="med" class="input" type="select" style="
    				height: 45px;
    				margin-right: 0px;
					margin-left: 10px;">

					<!--<option disabled="disabled" selected="selected">--Select Gender--</option>-->
					<option value="">Any Medical complication?</option>
                	<option>Diabetes</option>
                	<option>Underweight i.e below 55kg</option>
					<option>Cardiac disease</option>
					<option>Hepatitis</option>
					<option>Body tattooing</option>
					<option>Recent surgery</option>
					<option>None</option>
                </select>
			</div>
		</div>
		<div class="row">
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<select class="input" type="select" name="state" id="state">
					<!--<option disabled="disabled" selected="selected">--Select State--</option>-->
					<option value="">--Select State--</option>
					<option>Andhra Pradesh</option>
                	<option>Assam</option>
                	<option>Arunanchal Pradesh</option>
					<option>Bihar</option>
                	<option>Chhattisgarh</option>
                	<option>Goa</option>
					<option>Gujarat</option>
                	<option>Haryana</option>
                	<option>Himachal Pradesh</option>
					<option>Jharkhand</option>
                	<option>Karnataka</option>
                	<option>Kerala</option>
					<option>Madhya Pradesh</option>
                	<option>Maharashtra</option>
                	<option>Manipur</option>
    				<option>Meghalaya</option>
                	<option>Mizoram</option>
                	<option>Nagaland</option>
					<option>Odisha</option>
                	<option>Punjab</option>
                	<option>Rajasthan</option>
					<option>Sikkim</option>
                	<option>Tamil Nadu</option>
                	<option>Telangana</option>
					<option>Tripura</option>
                	<option>Uttarakhand</option>
                	<option>Uttar Pradesh</option>
					<option>West Bengal</option>
                
            </select>
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="text" id="city" name="city"placeholder="City">
			</div>
		</div>
		<div class="row">
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="tel" name="phone" id="phone" placeholder="Phone Number" size='10'>
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="tel" id="pincode" name="pincode" placeholder="Pincode" >
			</div>
		</div>
		<div class="row">
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="password" id="password" name='password' placeholder="Password" >
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="password" id="confirmpassword" name='confirmpassword' placeholder="Confirm Password" >
			</div>
		</div>
		<button type="submit" name="submit">Register</button>
		<p>If you already have a account <a href="login.php">Click here</a> </p>
		<a href="../index.php">Go Back</a>
		</div>
	</form>
	<?php
// 	if(isset($_POST['submit'])){
// 	$fname=(isset($_POST['fname']) ? $_POST['fname'] : null);
// 	$lname=(isset($_POST['lname']) ? $_POST['lname'] : null);
// 	$email=(isset($_POST['email']) ? $_POST['email'] : null);
// 	$dob=(isset($_POST['dob']) ? $_POST['dob'] : null);
// 	$gender=(isset($_POST['gender']) ? $_POST['gender'] : null);
// 	$blood_group=(isset($_POST['blood_group']) ? $_POST['blood_group'] : null);
// 	$med_complication=(isset($_POST['med_complication']) ? $_POST['med_complication'] : null);
// 	$state=(isset($_POST['state']) ? $_POST['state'] : null);
// 	$city=(isset($_POST['city']) ? $_POST['city'] : null);
// 	$phone=(isset($_POST['phone']) ? $_POST['phone'] : null);
// 	$pincode=(isset($_POST['pincode']) ? $_POST['pincode'] : null);
// 	$password=(isset($_POST['password']) ? $_POST['password'] : null);
// 	$cpassword=(isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : null);
// 	$submit=(isset($_POST['submit']) ? $_POST['submit'] : null);

	
	
// 		$con = mysqli_connect("localhost","root","","pb_db");
	
// 		// Check connection
// 		if (mysqli_connect_errno()) {
// 		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
// 		  exit();
// 		}

// 		$compare = "SELECT * FROM users";
//         $result = mysqli_query($con, $compare);
//         if (mysqli_num_rows($result) > 0) {
         
//             while($row = mysqli_fetch_assoc($result)) {
//                 $stored_email=$row["email"];
//                 if($stored_email === $email){
// 					echo "<script>
//                     alert('User already exists');
// 					</script>";
// 					die();
                    
//                 }               
//                 }                          
//             }
		
// 		$sql="INSERT INTO users (fname, lname, email, dob, gender, blood_group, med_complication, state, city, phone, pincode, password) VALUES ('$fname', '$lname', '$email', '$dob','$gender','$blood_group','$med_complication','$state','$city','$phone','$pincode','$password')";
		
		
		
		
		
// 		if(mysqli_query($con, $sql)){
// 			echo "<script type='text/javascript'>alert('New user Added');
//                                 window.location='login.php';
//                 	</script>";
// 		} else{
// 			echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
// 		}
	
	
// }
if(isset($_GET['error'])){
	if($_GET['error'] == "emptyinput"){
		echo "<script type='text/javascript'>alert('Empty input'); </script>";
	}
	else if($_GET['error'] == "invalidemail"){
		echo "<script type='text/javascript'>alert('Invalid Email id'); </script>";
	}
	else if($_GET['error'] == "passwordsdontmatch"){
		echo "<script type='text/javascript'>alert('Passwords do not match'); </script>";
	}
	else if($_GET['error'] == "emailtaken"){
		echo "<script type='text/javascript'>alert('Email already registered'); </script>";
	}
}



?>
	<script src="../assests/js/registration.js"></script>
</body>
</html>