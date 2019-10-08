var starter = document.querySelectorAll(".starter");

for (let i=0; i<starter.length;i++) {
    fold = starter[i];
    fold.addEventListener("click", function(){
console.log(i);
if (i === 0){
console.log("hej 0");
var foldout = document.querySelector(".storyfold");
foldout.classList.add("active");
} else if (i === 1){
console.log("hej 1");
var foldout = document.querySelector(".storyfoldtwo");
foldout.classList.add("active");
} else if (i === 2){
    console.log("hej 2");
    var foldout = document.querySelector(".storyfoldthree");
foldout.classList.add("active");
}
    })
}