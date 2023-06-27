// boucle while

console.log("while");
var ligne="";
var i = 1;
while(i <= 7){
    ligne= ligne + "#";
    // Autre possiblilité avec l'opérateur +=
    // ligne+= "#";

    console.log(ligne);
    i++;
    //  dans le premier tours aligne vas avoir l avaleutr # puis a chaque tours il va garder la valeurs du ligne presedent 
}


// Boucle for

var diese ="";
var rang;
//  rang un non en peut métre ce que ne veut

for(rang = 0 ; rang <=7 ; rang++){
     diese = diese + "#" ;
    //  diese += "#";
    document.write(diese + "<br>");
}

