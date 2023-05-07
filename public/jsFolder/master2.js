let icons = document.querySelector(".sous-menu");
let dropdwn = document.querySelector(".drop-down");
icons.onclick = function(){
    dropdwn.classList.toggle("active");
}



// Active Page
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('.sidebar ul li a').forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    }
});
// Active page Menu
const menuActive = window.location.pathname;
const navMenu = document.querySelectorAll('.container .shuffle li a').forEach(link => {
    if(link.href.includes(`${menuActive}`)){
        link.classList.add('active');
    }
});

// Modal Form( Pop Up)
// Get the modal
let modal = document.querySelector(".myModal");
let btn = document.querySelectorAll(".edit-show");
let span = document.querySelector(".close");

btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Scrool Top
let mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

