// Partie 1
/*
    On génère un nombre mystère entre 0 et 100
    On crée un input avec un bouton
    L'utilisateur doit proposer une solution en écrivant sa réponse dans input et en cliquant sur le bouton
    Sa réponse est comparée à la solution
    Si la réponse est plus petite que la solution, on affiche le texte "Le nombre mystère plus grand"
    Si la réponse est plus grande, on affiche "Le nombre mystère est plus petit"
    Si la réponse est identique à la solution, on affiche "C'est gagné" 

*/



let solution = Math.floor(Math.random()*100)+1;

let tentatives = 7;
let proposition;


$("#send").click