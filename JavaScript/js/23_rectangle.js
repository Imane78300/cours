'use strict ' // Mode strict du JS


// 1- Variable on travail avec des variable 

// Recherche le bouton dans l'arbre DOM =Documment Object Model

var bouton = document.getElementById('toggle-rectangle');

// Recherche de rectangle dans l'arbre DOM

var rectangle =  document.querySelector('.rectangle ') ;
// querySelector pour recupurer une class


// 2- Fonctions

// 1-- fonction en click sur el bouton

function surClickButon(){
     rectangle.classList.toggle('hide');
}


