<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: ../views/login.php");
    exit();
}
    $session_email = $_SESSION['email'];

// Signup.inc.php
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
    
    include_once 'connect.php';
    // Functions.inc.php
    function emptyInputSignup($fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword){
        $result;
        if(empty($fname) || empty($lname) || empty($email) || empty($dob) || empty($gender) || empty($blood_group) || empty($med_complication) || empty($state) || empty($city) || empty($phone) || empty($pincode) || empty($password) || empty($cpassword)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    
    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    
    function pwdMatch($password, $cpassword){
        $result;
        if($password!==$cpassword){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    
    
    
    function updateUser($con,$fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword) {
        $hpwd=password_hash($password,PASSWORD_DEFAULT);
        $session_email = $_SESSION['email'];
        $sql="UPDATE users SET fname='".$fname."', lname='".$lname."', dob='".$dob."', gender='".$gender."', blood_group='".$blood_group."', med_complication='".$med_complication."', state='".$state."', city='".$city."', phone='".$phone."', pincode='".$pincode."', password='".$hpwd."' WHERE email='".$session_email."';";
        
        if ($con->query($sql) === TRUE) {
            
            header("location:../views/home.php?error=none");
            
            // echo "<script type='text/javascript'>alert('User information updated sucessfully'); </script>";
            exit();
          } 
          else {
            echo $con->error;
            // header("location:../views/register.php?error=$username");
            exit();
          }
    }
    

    if(emptyInputSignup($fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword) !== false){
        header("location: ../views/edit.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../views/edit.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($password, $cpassword) !== false){
        header("location: ../views/edit.php?error=passwordsdontmatch");
        exit();
    }
    
    
    updateUser($con,$fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword);
}
else{
    header("location: ../views/edit.php");
}
?>