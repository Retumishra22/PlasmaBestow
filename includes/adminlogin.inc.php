<?php
// login.inc.php
if(isset($_POST['login'])){

    $username=(isset($_POST['email']) ? $_POST['email'] : null);
    $password=(isset($_POST['password']) ? $_POST['password'] : null);

    require_once 'connect.php';
    // functions.inc.php
        if($username&&$password){
            
            $query="SELECT * FROM admin where admin_email='$username'";
            $sql=mysqli_query($con,$query);
            $numrows=mysqli_num_rows($sql);
            if($numrows!=0){
                //Code to login
                while($row=mysqli_fetch_assoc($sql)){
                    $dbusername=$row['admin_email'];
                    $dbpassword=$row['password'];
                    
                }
                if($username==$dbusername&&$password==$dbpassword){
                    session_start();
                    $_SESSION['admin_email'] = $dbusername;
                    header("location:../views/adminhome.php");
                    
                    exit();
                }
                
            }
            
            else{
                    echo "<script>
                        alert('Username does not exist');
                        </script>";
                        header("location: ../views/adminlogin.php?error=invalid");
                        exit();
                        // header("location: ../views/adminlogin.php");
                        // exit();
                }
                
        
        }
        else{
            echo "<script>
            alert('Enter your username and password');
            </script>";
            header("location: ../views/adminlogin.php?error=invalid");
            exit();
            // header("location: ../views/adminlogin.php");
            // exit();
        }


}
else{
    echo "<script>
            alert('Invalid input');
            </script>";
    header("location: ../views/adminlogin.php?error=invalid");
    exit();
    // header("location: ../views/adminlogin.php");
    // exit();
}

?>
