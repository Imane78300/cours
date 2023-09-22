alert("Hello et bienvenue !");

// cette ligne génére aléotoirement un nombre entre 1 et 100

var solution = Math.floor(Math.random() * 100) + 1 ;

// la fonction (Math.floor) renvoie le plus grand entier qui est égal à un nombre 
// la fonction ( Math.random )  renvoie un nombre  à  vergule superieur ou égal à 0 et inférieur à 1
// dans la méthode Math.random 1 ne xeiste pas il est exclut il peut aller jusq'au 0.99999999999 mais pas 1 jamais 
// 

// TESTE ppour mieux vérifier le programme
console.log("(La soluton est " + solution + " )");

for (var i = 1; i <= 6; i++) {
    nbJoueur = parseInt(prompt("Le but du jeu est simple. Je pense à un nombre entre 0 et 100. A ton avis, quel est ce nombre ? Notes le dans la zone ci-dessous, tu as 6 essais."));
    if (!isNaN(nbJoueur)) {
        // isNaN = is not a number 
        if (solution === nbJoueur) {
            alert("Bravo vous avez trouvé !");
            i = 6;
        } else {
            if (solution < nbJoueur) {
                alert("Le nombre est plus petit, essai " + i + " sur 6");
                // + segnifie concatination
            } else {
                alert("Le nombre est plus grand, essai " + i + " sur 6");
            }
        }
    } else {
        alert("Vous n'avez pas saisi un nombre !");
    }
}


// else = sinon

alert("La bonne réponse est " + solution + ".");





