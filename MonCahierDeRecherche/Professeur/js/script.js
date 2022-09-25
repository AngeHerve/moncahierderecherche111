let menutoggle = document.querySelector(".menutoggle");
let closemenu = document.querySelector(".close");
let sidebar = document.querySelector(".bg-sidebar");
let barhamburger = document.querySelector(".fa-bars");


// function for login and sign up

// cacher le dashboad quant on ressaie de rendre le site responsive ou sur mobile
menutoggle.addEventListener("click",function(){
    sidebar.classList.toggle("hidden-sidebar");
    menutoggle.classList.toggle("fa-rotate-270");
    sidebar.classList.remove("hidden-sidebar-mobile");
});
 
// pour cacher le triangle de l'header
barhamburger.addEventListener("click",function(){
    sidebar.classList.remove("hidden-sidebar-mobile");
});

closemenu.addEventListener("click",function(){
    sidebar.classList.add("hidden-sidebar-mobile");
});