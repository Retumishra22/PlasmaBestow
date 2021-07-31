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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
<link Rel="stylesheet" type="text/css" href="../assests/css/registration.css"/>

</head>
<body>
	<form name="myform" action="../includes/edit.inc.php" onsubmit="return validateform()" method="POST">
		<div class='container'>
        <h2>EDIT INFO</h2>
        <?php 
            include_once '../includes/connect.php';
            $session_email=$_SESSION['email'];
            
            
            $sql = "SELECT * FROM users WHERE email='$session_email';";
            $res = $con->query($sql);
        if ($res->num_rows > 0) {
            // output data of each row
             while($row = $res->fetch_assoc()) {
        
        
        ?>
		
		<div class='row'>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="text" id="firstname" name="fname" value="<?php echo $row['fname'];?>" >
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="text" id="lastname" name="lname" value="<?php echo $row['lname'];?>" >
			</div>
		</div>
		<div class="row">
			<div class='col-lg-12 col-md-12 col-sm-12'>
				<input class="input" id='emailid' type='email' name="email" value="<?php echo $row['email'];?>" readonly>
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
				<input class="input" type="text" placeholder="Blood Group" value="<?php echo $row['blood_group'];?>"  name="blood_group" id="bloodgroup"/>
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
				<input class="input" type="text" id="city" name="city" value="<?php echo $row['city'];?>">
			</div>
		</div>
		<div class="row">
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="tel" name="phone" id="phone" value="<?php echo $row['phone'];?>" size='10'>
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12'>
				<input class="input" type="tel" id="pincode" name="pincode" value="<?php echo $row['pincode'];?>" >
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
		<button type="submit" name="submit">Update</button>
		
		<a href="home.php">Go Back</a>
        </div>
        <?php
         }
        }
    ?>
 <?php
// Signup.inc.php
// if(isset($_POST['submit'])){
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
//     $submit=(isset($_POST['submit']) ? $_POST['submit'] : null);
    
//     include_once '../includes/connect.php';
//     // Functions.inc.php
//     function emptyInputSignup($fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword){
//         $result;
//         if(empty($fname) || empty($lname) || empty($email) || empty($dob) || empty($gender) || empty($blood_group) || empty($med_complication) || empty($state) || empty($city) || empty($phone) || empty($pincode) || empty($password) || empty($cpassword)){
//             $result = true;
//         }
//         else{
//             $result = false;
//         }
//         return $result;
//     }
    
//     function invalidEmail($email){
//         $result;
//         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             $result = true;
//         }
//         else{
//             $result = false;
//         }
//         return $result;
//     }
    
//     function pwdMatch($password, $cpassword){
//         $result;
//         if($password!==$cpassword){
//             $result = true;
//         }
//         else{
//             $result = false;
//         }
//         return $result;
//     }
    
    
    
//     function updateUser($con,$fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword) {
//         $hpwd=password_hash($password,PASSWORD_DEFAULT);
//         $sql="UPDATE users SET fname='$fname', lname='$lname', email='$email', dob='$dob', gender='$gender', blood_group='$blood_group', med_complication='$med_complication', state='$state', city='$city', phone='$phone', pincode='$pincode', password='$hpwd' WHERE email=$session_email;";
        
//         if ($con->query($sql) === TRUE) {
//             header("location:home.php?error=none");
//             exit();
//           } 
//           else {
//             echo $con->error;
//             // header("location:../views/register.php?error=$username");
//             exit();
//           }
//     }
    

//     if(emptyInputSignup($fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword) !== false){
//         header("location: edit.php?error=emptyinput");
//         exit();
//     }
//     if(invalidEmail($email) !== false){
//         header("location: edit.php?error=invalidemail");
//         exit();
//     }
//     if(pwdMatch($password, $cpassword) !== false){
//         header("location: edit.php?error=passwordsdontmatch");
//         exit();
//     }
    
    
//     updateUser($con,$fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword);
// }
// else{
//     header("location: edit.php");
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
	
}

?> 
    </form>




    <script src="../assests/js/registration.js"></script>
</body>
</html>