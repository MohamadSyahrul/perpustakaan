//mobile menu

const toggleBtn = document.querySelector(".bars");
const mobileMenu = document.querySelector('.nav');

toggleBtn.addEventListener('click', function(){
    console.log(mobileMenu);
    mobileMenu.classList.toggle("show_links");
});


//set date

const date = document.querySelector('.date');
date.innerHTML = new Date().getFullYear();


//scroll to top

const scrollBtn = document.querySelector(".scroll_top")

scrollBtn.addEventListener("click", function(){
    window.scrollTo({left: 0, top:0});
});

window.addEventListener('scroll', function(){
    const scrollHeight = window.pageYOffset;
    if (scrollHeight > 700) {
        scrollBtn.classList.add("show_scroll");
    } else {
        scrollBtn.classList.remove("show_scroll");
    }
});


//happy students slider

const students = document.querySelectorAll(".student");
const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");

students.forEach(function(student,index){
    student.style.left = `${index * 100}%`;
});

let counter = 0;
nextBtn.addEventListener('click', function() {
    counter++;
    sliderStudents();
});
prevBtn.addEventListener('click', function() {
    counter--;
    sliderStudents();
});

function sliderStudents(){
    if (counter === students.length) {
        counter = 0;
    } 
    if (counter < 0) {
        counter = students.length - 1;
    }
    students.forEach(function(student){
        student.style.transform = `translateX(-${counter * 100}%)`
    })
};