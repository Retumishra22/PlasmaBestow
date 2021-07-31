<?php

if(isset($_POST['login'])){

    $username=(isset($_POST['email']) ? $_POST['email'] : null);
    $password=(isset($_POST['password']) ? $_POST['password'] : null);

    require_once 'connect.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $password) !== false){
        header("location: ../views/login.php?error=emptyinput");
        exit();
    }

    loginUser($con, $username, $password);


}
else{
    header("location: ../views/login.php");
    exit();
}



?>