var disMoi = "";
// en utilise le i pour les boucle
var i=1;
// !== strictement differents

while ((disMoi !== "oui") && (disMoi !== "non")){
   disMoi = prompt("Allez!!! On joue à ni oui ni non ?");
document.write('"' + disMoi + '"n\' est pas une réponse , pour la '+ i + '° fois, veux-tu jouer oui ou non ? <br>');
i++
//  pour qu eça se repete pour la premier fois la duesieme fois troisieme fois
}
document.write("<h2 style='background-color:cyan; text-align:center;' >PERDU ;-) ! Tu as tenu "+ i + " tours. </h2>");


