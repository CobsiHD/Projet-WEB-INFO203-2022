var dealerscore = 0;
var playerscore = 0; //Variable pour compter le nombre de points de chaque joueur//

var dealeracecount = 0;
var playeracecount = 0; // Variable qui permete de compter le nombre d'as//

var hide;
var deck;

var pioche = true ; // Variable qui dit si le joueur peut piocher tant que le score du jouer est <=21//

window.onload = function(){
    constrution_deck();
    melange_deck();
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