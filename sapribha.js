
// alert creates a small window which displays a message and as soon as the user clicks "ok" , user get acess to the website
// alert does not return anything
alert("sapribha loves you");

let name=prompt("enter your name","name");
// prompt return a value 
console.log("name entered by the user:  "+name);

let deleted=confirm("do you want to delete this post?");
console.log(deleted);

if(deleted){
    console.log("your post has been deleted successfully");
}
else{
    console.log("deletion failed");
}



// click event in js

// hide/show event by click

function togglehide(){
    let btn=document.getElementById('btn');
    let para1=document.getElementById('para1');

    if(para1.style.display!='none'){
   para1.style.display='none';}
   else{
    para1.style.display='block';
   }
}






//slider in gallery

const sliderImages = document.querySelector(".slider-images");
const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");

let counter = 0;

nextBtn.addEventListener("click", () => {
  if (counter < 3) {
    counter++;
  } else {
    counter = 0;
  }
  sliderImages.style.transform = `translateX(-${counter * 25}%)`;
});

prevBtn.addEventListener("click", () => {
  if (counter > 0) {
    counter--;
  } else {
    counter = 3;
  }
  sliderImages.style.transform = `translateX(-${counter * 25}%)`;
});