let circle1 = document.querySelector(".blue");
let circle2 = document.querySelector(".red");
let circle3 = document.querySelector(".gray");
let heroShoe = document.querySelector(".hero-img");

circle1.addEventListener("click", changeImg,false); 
circle1.color = "blue";
circle2.addEventListener("click", changeImg,false);
circle2.color = "red";
circle3.addEventListener("click", changeImg,false);
circle3.color = "gray";

function changeImg(event){
  removeSelection();
  heroShoe.setAttribute("src", `resouces/images/${event.currentTarget.color}-shoe.png`);
  event.currentTarget.classList.add("c-selected");
}

function removeSelection(){
  circle1.classList.remove("c-selected");
  circle2.classList.remove("c-selected");
  circle3.classList.remove("c-selected");
}
