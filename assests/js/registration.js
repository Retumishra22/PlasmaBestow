
var fname = document.getElementById('firstname');
var lname = document.getElementById('lastname');
var email=document.getElementById('emailid');
// var x=email.value;  
// var atposition=x.indexOf("@");  
// var dotposition=x.lastIndexOf("."); 
var password = document.getElementById("password");
var cpassword = document.getElementById("cpassword");
var dob = document.getElementById("dob");
var gender = document.getElementById("gender"); 
var state = document.getElementById("state");
var city = document.getElementById("city");
var phone = document.getElementById("phone");
var pincode = document.getElementById("pincode");


function validateform(){ 
  var x=email.value;  
  var atposition=x.indexOf("@");  
  var dotposition=x.lastIndexOf("."); 
  if (fname.value == "") {
    alert("First Name must be filled out");
    fname.style="border: 2px solid red";
    return false;
    
  }
  else{
    fname.style="border: 1px solid black";
    
  }
  if (lname.value == "") {
    alert("Last Name must be filled out");
    lname.style="border: 2px solid red";
    return false;
  }
  else{
    lname.style="border: 1px solid black";
    
  }
  if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    alert("Please enter a valid e-mail address");
     email.style="border: 2px solid red"; 
    return false;  
   }
   else{
     email.style="border: 1px solid black";
    
  }
  if (dob.value == "") {
    alert("Date of Birth must be filled out");
    dob.style="border: 2px solid red";
    return false;
  }
  else{
    dob.style="border: 1px solid black";
    
  }
  if (gender.value == "") {
    alert("Please specify your gender");
    gender.style="border: 2px solid red";
    return false;
  }
  else{
    gender.style="border: 1px solid black";
    
  }
  if (state.value == "") {
    alert("Select your state");
    state.style="border: 2px solid red";
    return false;
  }
  else{
    state.style="border: 1px solid black";
    
  }
  if (city.value == "") {
    alert("Please specify your city");
    city.style="border: 2px solid red";
    return false;
  }
  else{
    city.style="border: 1px solid black";
    
  }
  if (phone.value == "") {
    alert("Phone number must be filled out");
    phone.style="border: 2px solid red";
    return false;
  }
  else{
    phone.style="border: 1px solid black";
    
  }
  if (isNaN(phone.value)){
    alert("Enter numeric value only");
    phone.style="border: 2px solid red";
    return false;
  }
  else{
    phone.style="border: 1px solid black";
    
  }
  if (pincode.value == "") {
    alert("Pincode number must be filled out");
    pincode.style="border: 2px solid red";
    return false;
  }
  else{
    pincode.style="border: 1px solid black";
    
  }
  if (isNaN(pincode.value)){
    alert("Enter numeric value only");
    pincode.style="border: 2px solid red";
    return false;
  }
  else{
    pincode.style="border: 1px solid black";
    
  }
  if (password.value == "") {
        alert("Password must be filled out");
        password.style="border: 2px solid red";
        return false;
  }
  else{
    password.style="border: 1px solid black";
    
  }
  if (cpassword.value == "") {
        alert("Confirm Password must be filled out");
        cpassword.style="border: 2px solid red";
        return false;
  }
  else{
        cpassword.style="border: 1px solid black";
          
  }
  if (password.value != cpassword.value) {
        alert("Passwords do not match.");
        password.style="border: 2px solid red";
        cpassword.style="border: 2px solid red";
        return false;
  }
  else{
    password.style="border: 1px solid black"
    cpassword.style="border: 1px solid black";
  }
    



  return true;
}
