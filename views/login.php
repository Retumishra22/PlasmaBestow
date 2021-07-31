<?php
session_start();
?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>
html{
    height: 100%;
}
body{
    background: #2193b0; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #2193b0, #6dd5ed); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #2193b0, #6dd5ed); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    margin:0;
}
.login-card{
    background-color: rgba(255,255,255);
    width:30%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 1.5rem 0.75rem;
    border: 1px solid black;
    
    height: 80%;
}
.login-header{
    color:black;
    margin:0;
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;

}
.login-header>img{
    height:2rem;
}

.input-group{
    margin: 1rem 5px;
}
.login-form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.login-input{
    border:1px solid black;
    font-size: 20px;
    padding: 0.25rem;
    padding-top: 5px;
    padding-bottom: 5px;
}
.login-input-btn{
    background-color:#2193b0;
     display:block;
     margin:10px 10px 10px 10px;
     text-align:center;
     align-items: center;
     align-self: center;
     
     border:2px solid black;
     height: 45px;
     outline:none;
     color:white;
     cursor:pointer;
     transition:0.25px;
     width: 15rem;

}
.login-input-btn:hover{
                background-color:#6dd5ed;
      }  
.login-utilities a{
    font-size: 20px;
}

@media(max-width: 800px){
    .login-card{
    width:70%;

}
}
</style>   
</head>    
<body>
    <div class="login-card">
        <p class="login-header">LOG IN</p> 
        <p class="login-header">
            <img src="../assests/images/profile-user.svg"/>
        </p>
        <form class="login-form" action="../includes/login.inc.php" onsubmit="return validateform()" method="POST">
            <div class="input-group">
                <input type="email" class="login-input" id="username" name='email' placeholder="Email" required/>    
            </div>
            <div class="input-group">
                <input type="password" class="login-input" id="password" name='password' placeholder="Password" required/>    
            </div>
            <div class="input-group">
                <input type="submit" class="login-input login-input-btn" name='login' value="SIGN IN"/>    
            </div>
        </form>
        <div class="login-utilities">
            <span>
                <a href="../index.php">Go back</a>
            </span>
            <span>
                |
            </span>
            <span>
                <a href="registration.php">Create Account</a>
            </span>
            <span>
                |
            </span>
            <span>
                <a href="adminlogin.php">Admin Login</a>
            </span>
        </div>
    </div>
    <?php
    // if(isset($_POST['login'])){
    //     $username=(isset($_POST['email']) ? $_POST['email'] : null);
    //     $password=(isset($_POST['password']) ? $_POST['password'] : null);

    //     $con = mysqli_connect("localhost","root","","pb_db");
    //     if (mysqli_connect_errno()) {
    //         echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //         exit();
    //       }
        

    //     if($username&&$password){
            
    //         $query="SELECT * FROM users where email='$username'";
    //         $sql=mysqli_query($con,$query);
    //         $numrows=mysqli_num_rows($sql);
    //         if($numrows!=0){
    //             //Code to login
    //             while($row=mysqli_fetch_assoc($sql)){
    //                 $dbusername=$row['email'];
    //                 $dbpassword=$row['password'];
                    
    //             }
    //             if($username==$dbusername&&$password==$dbpassword){
    //                 session_start();
    //                 $_SESSION['user'] = $dbusername;
    //                 header("location: home.php");
    //                 echo "<script>
    //                 alert('You are in');
    //                 </script>";
                    
    //             }
                
    //         }
    //         else{
    //                 echo "<script>
    //                     alert('Username does not exist');
    //                     </script>";
    //             }
        
    //     }
    //     else{
    //         echo "<script>
    //         alert('Enter your username and password');
    //         </script>";
    //     }
        


    // }
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyinput"){
            echo "<script type='text/javascript'>alert('Empty input'); </script>";
        }
        else if($_GET['error'] == "wronglogin"){
            echo "<script type='text/javascript'>alert('Wrong login information'); </script>";
        }
        else if($_GET['error'] == "wrongpassword"){
            echo "<script type='text/javascript'>alert('Wrong password'); </script>";
        }
        
    }
    
    
    
    ?>
</body>
<script>
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    function validateform(){
        var x=username.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf("."); 
        if (username.value == "") {
            alert("Username must be filled out");
            username.style="border: 2px solid red";
            return false;
        }
        else{
            username.style="border: 1px solid black";
        }
        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
            alert("Please enter a valid e-mail address");
            username.style="border: 2px solid red"; 
            return false;  
        }
        else{
            username.style="border: 1px solid black";
    
        }
        if (password.value == "") {
            alert("Password must be filled out");
            password.style="border: 2px solid red";
            return false;
        }
        else{
            password.style="border: 1px solid black";
        }
        return true;
    }

</script>     
</html> 