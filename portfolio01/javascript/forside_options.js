var menu_button = document.querySelector(".burgerMenuIcon");    
var close_Button = document.querySelector(".navigation"); 
menu_button.addEventListener("click",function() {
   console.log("open");
   var menu = document.querySelector(".navigation");
   menu.classList.add("active"); 
});
close_Button.addEventListener("click",function(){
console.log("close");
var menu = document.querySelector(".navigation");
menu.classList.remove("active");
}); 


var anima = document.querySelector(".CV-logo");
var animatwo =document.querySelector(".introinfopoints");
var animatree = document.querySelector(".velkommen-title")
window.onload = function () {
anima.classList.add("aktiv");
animatree.classList.add("aktiv");
animatwo.classList.add("aktiv");
}
