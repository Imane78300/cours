// alert("hello");
//  un nemuro desimal est un numero avec vergule par exemple (20.5)

var moyenne = parseFloat(prompt("Quelle est ta moyenne au bacb ?"));

if( moyenne < 10){
    document.write(" Tu est recalé"); // j'affiche q'il est recelé
}else if (( moyenne >=10)  && (moyenne <12)){
    // sinon ; si la moyenne est entre 10 et 12
     document.write("tu pass !") // j'affiche que le candidat pass

}else if (( moyenne >=12 ) && ( moyenne <=20)){
     document.write("bravot pour la mention")
//  j'affiche qu'il a une mention

}else {
//  en cas de saisir ne rentrant pas dans le cas ci -avant
document.write("vous n'avait pas saisi ....")
//     je lui indique s'il n'as pas saisie ce que on as  lui demander
}