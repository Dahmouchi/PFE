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
let modal = document.getElementsByClassName("modal");
let btn = document.getElementsByClassName("edit-show");
let span = document.getElementsByClassName("close");

for (let i = 0; i < btn.length; i++) {
  btn[i].onclick = function() {
      modal[i].style.display = "block";
  }
}

for (let i = 0; i < span.length; i++) {
  span[i].onclick = function() {
    for (let i = 0; i < modal.length; i++) {
      modal[i].style.display = "none";
    }
  }
}

// When the user clicks anywhere outside of the modal, close it
for (let i = 0; i < modal.length; i++) {
window.onclick = function(event) {
  if (event.target == modal[i]) {
    modal[i].style.display = "none";
  }
}
}
//product  modal
let modalP = document.getElementsByClassName("modalproduct");
let btnP = document.getElementsByClassName("editProduct");
let spanP = document.getElementsByClassName("closeProduct");
for (let i = 0; i < btnP.length; i++) {
btnP[i].onclick = function() {
    modalP[i].style.display = "block";
}

}

for (let i = 0; i < spanP.length; i++) {
spanP[i].onclick = function() {
  for (let i = 0; i < modalP.length; i++) {
    modalP[i].style.display = "none";
}
}

}

// When the user clicks anywhere outside of the modal, close it
for (let i = 0; i < modalP.length; i++) {
window.onclick = function(event) {
  if (event.target == modalP[i]) {
    modalP[i].style.display = "none";
  }
}}

// Scrool Top
let mybutton = document.getElementById("scroll-back");
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

// Image slider

