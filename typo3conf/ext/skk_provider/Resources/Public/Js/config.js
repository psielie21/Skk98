
var slideIndex = 0;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {

  var i;
  var slides = document.getElementsByClassName("slide");
  if (n > slides.length-1) {slideIndex = 0}
  if (n < 0) {slideIndex = slides.length-1}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";

}


function toggleMobile() {
    var x = document.getElementById("myTopnav");
    var bar = document.getElementById("bar");

    if (x.className === "topnav") {
        x.className += " expanded";
        bar.classList.add("change");
    } else {
        x.className = "topnav";
        bar.classList.remove("change");
    }
}

function activateInfo(){
  document.getElementById("overlay").style.display = "block";
}

function deactivateInfo(){
  document.getElementById("overlay").style.display = "none";
}
