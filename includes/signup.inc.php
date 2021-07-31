<?php

if(isset($_POST['submit'])){
	$fname=(isset($_POST['fname']) ? $_POST['fname'] : null);
	$lname=(isset($_POST['lname']) ? $_POST['lname'] : null);
	$email=(isset($_POST['email']) ? $_POST['email'] : null);
	$dob=(isset($_POST['dob']) ? $_POST['dob'] : null);
	$gender=(isset($_POST['gender']) ? $_POST['gender'] : null);
	$blood_group=(isset($_POST['blood_group']) ? $_POST['blood_group'] : null);
	$med_complication=(isset($_POST['med_complication']) ? $_POST['med_complication'] : null);
	$state=(isset($_POST['state']) ? $_POST['state'] : null);
	$city=(isset($_POST['city']) ? $_POST['city'] : null);
	$phone=(isset($_POST['phone']) ? $_POST['phone'] : null);
	$pincode=(isset($_POST['pincode']) ? $_POST['pincode'] : null);
	$password=(isset($_POST['password']) ? $_POST['password'] : null);
	$cpassword=(isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : null);
    $submit=(isset($_POST['submit']) ? $_POST['submit'] : null);
    
    require_once 'connect.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword) !== false){
        header("location: ../views/registration.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../views/registration.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($password, $cpassword) !== false){
        header("location: ../views/registration.php?error=passwordsdontmatch");
        exit();
    }
    if(emailExists($con, $email) !== false){
        header("location: ../views/registration.php?error=emailtaken");
        exit();
    }
    
    createUser($con,$fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword);
}
else{
    header("location: ../views/registration.php");
}



?>