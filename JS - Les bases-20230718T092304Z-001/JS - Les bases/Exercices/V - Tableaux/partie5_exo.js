// [ source: https://github.com/oc-courses/intro-javascript ]


/*
* EXERCICE 1 - les tableaux
* Complétez le programme pour calculer puis afficher la somme des valeurs du tableau nombres.
*/


let Nombres = [11, 3, 7, 2, 9, 10];
let valeures = 0;

nombres.forEach(function(vlr){
  valeures = valeures + vlr ;
});

console.log(valeures);
 



// CORRECTION 

let nombres = [11, 3, 7, 2, 9, 10]
let somme = 0;

nombres.forEach(function (nbr){
  somme = somme + nbr ;
});

console.log(somme);



/*
* EXERCICE 2 - les tableaux
* Complétez le programme pour qu'il calcule et affiche ensuite la plus grande valeur présente dans le tableau.
*/


let valeurs = [3, 11, 7, 2, 9, 10];

// On initialise la maximum avec le 1er élément du tableau
let max = valeurs[0];

// On commence la recherche au second élément (indice 1)
for (let i = 1; i < valeurs.length; i++) {
  // Si la valeur courante est supérieure au maximum actuel...
  if (valeurs[i] > max) {
    // ... Elle devient le nouveau maximum
    max = valeurs[i];
  }
}
console.log(max);



// SOLUTION AVEC FOREACH
let valeurs = [3, 11, 7, 2, 9, 10, 15, 9, 33];
let max = valeurs[0];

valeurs.forEach(function (valeur) {
  if (valeur > max) {
    max = valeur;
  }
})

console.log(max);









/*
* EXERCICE 3 - les tableaux
* Ecrivez un programme qui crée un tableau contenant les noms des trois mousquetaires, Athos, Porthos et Aramis ;
* 1- Affiche le nom de chaque mousquetaire à l'aide d'une boucle for ;
* 2- Ajoute au tableau le mousquetaire d'Artagnan ;
* 3- Affiche de nouveau le nom de chaque mousquetaire, cette fois à l'aide de la méthode forEach().
*/

// code 

let mousquetaires = ["Athos", "Porthos", "Aramis"];

console.log("Voici les trois mousquetaires :");
for (let i = 0; i < mousquetaires.length; i++) {
  console.log(mousquetaires[i]);
}

mousquetaires.push("D'Artagnan");

console.log("A présent, ils sont quatre !");
mousquetaires.forEach(function (mousquetaire) {
  console.log(mousquetaire);
});



/*
* EXERCICE 4 - les tableaux
* Ecrivez un programme qui fait saisir à l'utilisateur des mots jusqu'à ce qu'il saisisse "stop".
* Le programme affiche alors la liste des mots saisis.
*/

// code 


let mots = [];

let mot = "";
while (mot !== "stop") {
  mot = prompt("Entrez un mot ou tapez stop pour arrêter :");
  if (mot !== "stop") {
    mots.push(mot);
  }
}

mots.forEach(function (mot) {
  console.log(mot);
});



