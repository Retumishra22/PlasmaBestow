<?php
session_start();
if(!isset($_SESSION['admin_email'])){
    header("location: adminlogin.php");
    exit();
}
?>
<html>
<head>
  
<meta charset="UTF-8">
    <link rel="stylesheet" href="../assests/css/style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
function getUser() {
  usrEmailID = document.getElementById("usrEmailID").value;
  if (usrEmailID == ""){
      return
  }
  var obj = {usrEmail: usrEmailID};
  console.log(usrEmailID);
  
  var userJSON = JSON.stringify(obj);
  console.log(userJSON)
  var txt ="";
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        myObj = JSON.parse(this.responseText); 
        console.log(myObj);
        if (myObj.length === 0) { 
            txt = "No details found"
        }
        else{
        for (x in myObj) { 
            txt += "User ID: " + myObj[x].users_id + "<br>"+ 
            "First Name: " + myObj[x].fname + "<br>"+ 
            "Last Name: " + myObj[x].lname + "<br>"+ 
            "Email: " + myObj[x].email + "<br>"+ 
            "Date of birth: " + myObj[x].dob + "<br>"+ 
            "Gender: " + myObj[x].gender + "<br>"+ 
            "Blood Group: " +myObj[x].blood_group + "<br>"+
            "Medical Complication: "+ myObj[x].med_complication + "<br>"+
            "Phone: " + myObj[x].phone + "<br>"+ 
            "City: " + myObj[x].city + "<br>"+ 
            "Pincode: " + myObj[x].pincode + "<br>"+ 
            "State: " + myObj[x].state + "<br>";
        } 
        }
       document.getElementById("userDetail").innerHTML = txt; 
      
    }
  }
  xmlhttp.open("POST","ajaxuser.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  console.log(userJSON);
  xmlhttp.send("user=" + userJSON ); 
}
</script>
</head>
<body>
<div class="nav container">
		<div class="logo"><a href="../index.php"> <h1>Logo</h1></a></div>
		<ul class="nav-links">
            <li> <a href="adminhome.php">Home</a></li>
			<li> <a href="../includes/logout.inc.php">Logout</a></li>
		</ul>
</div>
    <div class="home-head">
        <h1>User Information</h1>
        <div class="search-container">
            <form action="">
                <input type="text" id="usrEmailID" placeholder="Enter user email ID" name="usrEmailID">
                <input type="button" onclick="getUser()" value="Search" class="userbutton"/>
                <!-- <i class="fa fa-search"></i> -->
            </form>
        </div>
    </div>
<!-- <div>
<h3>Enter user email id </h3>

<input type="text" name="usrEmailID" id ="usrEmailID" >
<br/><br/>
<input type="button" onclick="getUser()" value="Search"/>


</div> -->

<div class="aboutme container">
<p id="userDetail"></p> 


<div>



</body>
</html>