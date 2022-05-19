
let redcard = 0;

shuffle()

function shuffle() {
    let allcards = document.getElementsByClassName("card-img");
    allcards[redcard].setAttribute('src', "images/A-S.png");
    let random = Math.floor(Math.random() * allcards.length); // un nombre au hasard
    let card = allcards[random];
    card.setAttribute('src', "images/A-H.png");
    card.id="coeur";
    redcard = random
}

function flip(event){
    let element = event.currentTarget;
    if (element.className === "card"){
        if(element.style.transform === "rotateY(180deg)"){
            element.style.transform = "rotateY(0deg)";
        }
        else{
            element.style.transform = "rotateY(180deg)";
        }
    }
}

function win(event){

    var win = false;

    let evenement = event.currentTarget;

    let idImage = evenement.childNodes[1].childNodes[1];

    if(idImage.id === "coeur"){

        win = true;

    }
    else{
        win = false;
    }

window.location.replace("http://os-vps418.infomaniak.ch:1180/l1_info_5/www/pages/replay.php?win=" + win)
}



