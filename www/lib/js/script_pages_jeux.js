var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Cette fonction permet d'afficher les cartes */
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("custom-slider");
    var etat = document.getElementById("prev suiv actu");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex-1].className += " active";

    slides[slideIndex - 2].id = "prev";
    slides[slideIndex - 1].id = "actu";
    slides[slideIndex].id = "suiv";

    console.log(etat.id);

}


