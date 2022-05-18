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
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}

    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    if (slideIndex === 6) { slides[slideIndex - 1].id = "actu";
    slides[4].style.display = "block";
    slides[0].style.display = "block";
    slides[4].id = "prev";
    slides[0].id = "suiv";
    slides[slideIndex - 1].style.order = "-1";
    slides[4].style.order = "-1";
    }

    if (slideIndex === 1) { slides[slideIndex - 1].style.display = "block";
        slides[slideIndex].style.display = "block";
        slides[5].style.display = "block";
        slides[5].id = "prev";
        slides[5].style.order = "-1";
    }
    else {
        slides[slideIndex - 1].style.display = "block";
        slides[slideIndex].style.display = "block";
        slides[slideIndex - 2].style.display = "block";
    }



    slides[slideIndex].id = "suiv";
    slides[slideIndex - 1].id = "actu";
    slides[slideIndex - 2].id = "prev";

    dots[slideIndex-1].className += " active";


}


