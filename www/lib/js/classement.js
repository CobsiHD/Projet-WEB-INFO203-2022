


function show(event) {

    var evenement = event.currentTarget.id;
    var table = document.getElementsByTagName("table");
    var i;

    console.log(table);

    for (i = 0; i < 7; i++) {

        if (table[i].id !== evenement && table[i].style.display !== "none"){
            table[i].style.display = "none";
        }
        else if(table[i].id === evenement && table[i].style.display === "none"){

            table[i].style.display = "table";
        }


        console.log(i)
        console.log(table[i]);
    }

}