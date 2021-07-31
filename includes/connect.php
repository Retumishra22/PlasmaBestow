<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="pb_db";

$con= mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

?>