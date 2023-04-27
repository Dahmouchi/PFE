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

