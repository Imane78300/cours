// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1 - les fonctions
* Compléter le code suivant:
* Celui-ci doit renvoyer un message de bienvenue
*/

// TODO : faire saisir le prénom et le nom de l'utilisateur
// TODO : appeler direBonjour() avec les bons arguments et afficher son résultat

    
/*function direBonjour(prenom, nom) {
    let message = "Bonjour, " + prenom + " " + nom + " !";
    return message;
 }*/


function direBonjour(prenom, nom) {
    let message = "Bonjour, " + prenom + " " + nom + " !";
    return message;
}
let imane = prompt ("Veuillez saisir votre prenom");
let ellh = prompt("Veuillez saisir votre nom");


   console.log( direBonjour("imane" , "ellh")) ;





/*function direBonjour(prenom, nom) {
    let message = "Bonjour, " + prenom + " " + nom + " !";
    console.log( "imane" + "ellh" )
    return message;
}
direBonjour("imane" , "ellh");     Mon premier teste mais j'ai mal declare la variable */


/*
* EXERCICE 2 - les fonctions
* Completer le code suivant
* Celui-ci doit renvoyer le carré d'un nombre
*/

function carre(num1) {
    let resultat = num1 * num1;
    return resultat;
}
console.log(carre(0))


/* Une autre maniere 
function carre(nombre){
   return nombre * nombre ; 
}
console.log(carre(0)) */




function carre (num1){
    let resultat = num1 * num1;
    return resultat;
}

console.log=(carre(2))




function carre(num1){
   let resultat = num1 * num1 ;
     return resultat;
}
console.log=(carre(5))








console.log(carre(0)); // Doit afficher 0
console.log(carre(2)); // Doit afficher 4
console.log(carre(5)); // Doit afficher 25









/* 
* EXERCICE 3 - les fonctions
* En supposant que la fonction JavaScript Math.min() n'existe pas, 
* complétez le programme pour que la fonction min() renvoie le plus petit des 
* deux nombres passés en paramètres.
*/

// Ajoutez votre code ici


function min( Number1 , Number2){
 
    if ( Number1 > Number2 ){
        return Number2;  
    }
    if ( Number1 < Number2 ){
        return Number1;
    } 
} 
console.log(min(4.5, 5));


/*    UNE AUTRE METHODE 
 function min(a,b ) {

          if (a<b ){
            return a; 
        } 
    
         return b ; 
     }
     
     */ 








console.log(min(4.5, 5));





console.log(min(4.5, 5)); // 4.5
console.log(min(19, 9));  // 9
console.log(min(1, 1));   // 1

/* 
* EXERCICE 4 - les fonctions
* Complétez le programme pour que la fonction calculer() gère les 4 opérations 
* mathématiques de base : addition, soustraction, multiplication et division.
*/
// Ajoutez votre code ici

console.log(calculer(4, "+", 6));  // 10
console.log(calculer(4, "-", 6));  // -2
console.log(calculer(2, "*", 0));  // 0
console.log(calculer(12, "/", 0)); // Infinity


// Effectue les 4 opérations arithmétiques de base
function calculer(nbGauche, operation, nbDroite) {
  let resultat;
  switch (operation) {
    case "+":
      resultat = nbGauche + nbDroite;
      break;
    case "-":
      resultat = nbGauche - nbDroite;
      break;
    case "*":
      resultat = nbGauche * nbDroite;
      break;
    case "/":
      resultat = nbGauche / nbDroite;
      break;
  }
  return resultat;
}

console.log(calculer(4, "+", 6)); // 10
console.log(calculer(4, "-", 6)); // -2
console.log(calculer(2, "*", 0)); // 0
console.log(calculer(12, "/", 0)); // Infinity


