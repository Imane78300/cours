var jour = prompt("Quel jours somme-nous ?");

if(jour=== "LUNDI"){
document.write("demain nous serons  MARDI");

}else if(jour=== " MARDI"){
document.write("demain nous serons  MERCREDI");

}else if(jour=== " MERCREDI"){
document.write("demain nous serons  JEUDI");

}else if(jour=== " JEUDI"){
document.write("demain nous serons  VENDREDI");

}else if(jour=== " VENDREDI"){
document.write("demain nous serons  SAMEDI");

}else if(jour=== " SAMEDI"){
document.write("demain nous serons  DIMANCHE");
}else if(jour=== " DIMANCHE"){
document.write("demain nous serons  LUNDI");

}else {
document.write("jours inconnu");
}



switch(jour){
case "lundi":
    console.log("demain on est mardi");  
break;

case "mardi":
    console.log("demain on est mercredi");
break;

case "mercredi":
    console.log("demain on est  jeudi");
break;

case "jeudi":
    console.log("demain on est vendredi");
break;

case "vendredi":
    console.log("demain on est samedi");
break;

case "samedi":
    console.log("demain on est dimanche");
break;

case "dimanche":
    console.log("demain on est lundi");
break;
default:
     console.log("Désolé verifier l'ortographe et veillez écrire sans majuscule.");
}

