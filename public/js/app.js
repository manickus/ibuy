 var menuBtn = document.querySelector(".call-to-menu");

 menuBtn.addEventListener("click",function(){
 	var menuList = document.querySelector(".menu-list");
 	menuList.classList.toggle("nav-opened");
 },false );


var catMobile = document.querySelector('.call-to-mobile-categories');
catMobile.addEventListener("click", function() {
	var categoriesListMobile = document.querySelector('.categories-mobile');
	categoriesListMobile.classList.toggle('show');
}, false);