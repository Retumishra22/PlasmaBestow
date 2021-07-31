
// var camptable = document.querySelector("#search-table"); 

// camptable.addEventListener("click", function(e){
//     console.log(e.target);
//     if(e.target.className == "register"){
//         console.log("Hello");
//     }
   
// })
// var btn = document.getElementsByClassName("register");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the modal
var modal = document.getElementById("myModal");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    var msg = confirm("Are you sure you want to register?");
    if(msg==true){
        modal.style.display = "block";
    }
    else{
        modal.style.display = "none"; 
    }
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
