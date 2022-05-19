
window.onload = function(){

    showGen();

}
function showGen(){
    for (i = 0; i < 7; i++) {

        if (table[i].id !== "general" && table[i].style.display !== "none"){
            table[i].style.display = "none";
        }
        else if(table[i].id === "general" && table[i].style.display === "none"){

            table[i].style.display = "table";
        }

    }

function show(event) {

    var evenement = event.currentTarget.id;
    var table = document.getElementsByTagName("table");
    var i;


    for (i = 0; i < 7; i++) {

        if (table[i].id !== evenement && table[i].style.display !== "none") {
            table[i].style.display = "none";
        } else if (table[i].id === evenement && table[i].style.display === "none") {

            table[i].style.display = "table";
        }

    }

}}