// alert('test');

// structure de base IF
if (true){ // par défaut la condition vérifier le IF vérifier si elle est varie

    // ..... code.....
}




var nb1 = 10 ;
if(nb1 < 50){
  console.log("nb1 est bien infésieure à 50")
}


//  ELSE

if (true){
// ......code...si VRAI
} else {
// ....code....si FAUX
}


if (nb1 > 50){
console.log("nb1 est bien suérieur à 50")
} else {
    console.log("nb1 est inférieur à 50")
}


// exercice

//  on utilisze le if pour verifier l'âge de l'intarnaute.
// => s'il est majeur je lui souhaite la bienvenue
// => s'il minaure je lui [1] signzl et [2] le renvoie vers un autre site


// 1 -- je déclare la majourité legale

var majouritefr = 18;
// 2 -- demandder l'âge en s'assurant que nous avoon un NUMBER
var age  = parseInt(prompt("Indiquez votre âge "));

// 3 -- je vérifie si mon internaute est majeur

if (age >= majouritefr){
alert ("bienvenu voous êtes majeurs") // bienvenue si vrai 
} else {

//  s'il est minaur je lui signale 
alert("allez avoir in aute site")
// et ensuite je redirige vers darty
document.location.href="http://www.darty.fr/"}

