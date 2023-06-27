'use strict' // Mode striCT du JavaScript 


// Déclaration d'une variable 


var nombre;

// la boucle do while s'éxecutera toujours au moins une fois, alors que la boucle while ne pas s'éxécuter si la condition est fausse  dés le départ

// En utilisent  cette boucle quand elle doit s'éxécuter au moins une fois pour que la comapraison puisse s'effectuer .

// parsefloat est un nombre disimal un nombre avec vérgule
do{   
     nombre = parseFloat(window.prompt('Veuillez choisir un nombre :'));
}while(isNaN(nombre) == true);


document.write('<p>Merci, vous avez saisi <strong>' + nombre + '</strong></p>');

