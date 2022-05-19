var dealerscore = 0;
var playerscore = 0; //Variable pour compter le nombre de points de chaque joueur//

var dealeracecount = 0;
var playeracecount = 0; // Variable qui permete de compter le nombre d'as//

var hide;
var deck;

var pioche = true ; // Variable qui dit si le joueur peut piocher tant que le score du jouer est <=21//

window.onload = function(){
    constrution_deck();   // Pour pouvoir réaliser les fonction directement dès le début du chargement de la pages de plus cela permet de lancer le jeu 
    melange_deck();
    startGame();
}
function constrution_deck(){
    // Fonction sans paramêtre qui crée un jeu de carte avec cahque carte le nom de la carte d'un jeu de 52 cartes//
    let valeur = ["A","2","3","4","5","6","7","8","9","10","J","Q","K"];
    let types = ["C","D","H","S"]; // Initial des Types de cartes en anglais pour éviter toute confusions entre le coeur et le carreau//
    deck = [];
    for (let i =0; i < types.length ; i++){
        for (let j=0 ; j < valeur.length ; j++ ){
            deck.push(valeur[j] + "-" + types[i] );// On crée 2 boucle qui parcourt les 2 tableaux pour créer à chaque fois la carte de différent type et valeur.//
        };
    };
    console.log(deck);
}
function melange_deck() {
    for (let i = 0; i< deck.length ; i++){
        let j =Math.floor(Math.random() * deck.length);
        let temp = deck[i];
        deck[i]=deck[j];
        deck[j]=temp ;
    }
    console.log(deck);
}
function startGame(){
    hide = deck.pop();
    dealerscore += getValue(hide);
    dealeracecount = checkAce(hide);
    // console.log(dealerscore);
    // console.log(hide);
    while(dealerscore<17){
        let cardImg = document.createElement("img");
        let card = deck.pop();
        cardImg.src = "../../images/carte/" + card + ".png";
        dealerscore += getValue(card);
        dealeracecount += checkAce(card);
        document.getElementById("dealer-cards").append(cardImg); // On ajoute les images de cartes dans le html
    }
    // console.log(dealerscore);
    for( let i=0 ; i < 2; i++){
        let cardImg = document.createElement("img");
        let card = deck.pop();
        cardImg.src = "../../images/carte/" + card + ".png";
        playerscore += getValue(card);
        playeracecount += checkAce(card);
        document.getElementById("player-cards").append(cardImg);
    }
    // console.log(playerscore);
    document.getElementById("hit").addEventListener("click",hit);
    document.getElementById("stay").addEventListener("click",stay);
}
function getValue(card){
    let data= card.split("-");// "4-C" -> ["4","C"]//
    let value= data[0];
    if(isNaN(value)){ // A J K Q //
        if(value=="A"){
            res =11;
        }else {
            res =10 ;
        }
    }else {
    res = parseInt(value);
    }
    return res;
}
function checkAce(card){
    if (card[0]=="A"){
        res =1 ;
    }else {
        res=0 ;
    }
    return res 
}
function hit(){
    if (pioche){
        let cardImg = document.createElement("img");
        let card = deck.pop();
        cardImg.src = "../../images/carte/" + card + ".png";
        playerscore += getValue(card);
        playeracecount += checkAce(card);
        document.getElementById("player-cards").append(cardImg);
    }
    if (reduceAce(playerscore,playeracecount)){
        pioche =false;
    }
}
function reduceAce(playerscore,playeracecount){
    while(playerscore > 21 && playeracecount > 0){
        playeracecount -= 1 ; 
        playerscore -=1 ;
    }
    return playerscore ; 
}
function stay(){
    dealerscore = reduceAce(dealerscore,dealeracecount);
    playerscore = reduceAce(playerscore,playeracecount);
    canHit=false ;
    document.getElementById("hide").src ="../../images/carte/" + hide + ".png" ;
    let message=""
    if (playerscore > 21){
        win = false
    } else if (dealerscore > 21){
        win = true
    } else if (playerscore >= dealerscore){
        win = true
    } else if (playerscore < dealerscore){
        win = false;
    }
    window.location.replace("http://os-vps418.infomaniak.ch:1180/l1_info_5/www/pages/replay.php?win=" + win);
}
