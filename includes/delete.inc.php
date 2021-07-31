<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: ../views/login.php");
    exit();
}

$session_email = $_SESSION['email'];
include_once 'connect.php';
$sql="DELETE FROM users WHERE email='".$session_email."';";
        
        if ($con->query($sql) === TRUE) {
            session_unset();
            session_destroy();
            header("location: ../index.php");
            exit();
          } 
          else {
            echo $con->error;
            // header("location:../views/register.php?error=$username");
            exit();
          }
?>