<?php

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

function emailExists($con, $email){
    $sql= "SELECT * FROM  users WHERE email='$email';";
    $res = $con->query($sql);
    if ($res->num_rows > 0) {
        // output data of each row
         while($row = $res->fetch_assoc()) {
            return $row;
         }
      } else {
        $result =false;
        return $result;
      }
}

function createUser($con,$fname, $lname, $email, $dob, $gender, $blood_group, $med_complication, $state, $city, $phone, $pincode, $password, $cpassword) {
    $hpwd=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO users (fname, lname, email, dob, gender, blood_group, med_complication, state, city, phone, pincode, password) VALUES ('$fname', '$lname', '$email', '$dob','$gender','$blood_group','$med_complication','$state','$city','$phone','$pincode','$hpwd');";
    
    if ($con->query($sql) === TRUE) {
        header("location:../views/login.php?error=none");
        exit();
      } 
      else {
        echo $con->error;
        // header("location:../views/register.php?error=$username");
        exit();
      }
}
// login system
function emptyInputLogin($username, $password){
    $result;
    if(empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($con, $username, $password){
    $emailexists = emailExists($con, $username);

    if($emailexists === false){
        header('location:../views/login.php?error=wronglogin');
        exit();
    }

    $hpwd = $emailexists['password'];
    $checkpwd=password_verify($password, $hpwd);

    if ($checkpwd === false) {
        header('location:../views/login.php?error=wrongpassword');
        // echo $password;
        // echo $pwdh;
        exit();
        
    }
    elseif ($checkpwd === true) {
        session_start();
        $_SESSION['email'] = $emailexists['email'];
        $_SESSION['id'] = $emailexists['users_id'];
        header('location:../views/home.php');
        exit();
    }
}





?>