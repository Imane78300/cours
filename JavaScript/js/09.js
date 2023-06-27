//  Crrée un tableau 

// var arr = new Array(element0, element1, elements2);
// var arr = Array (element0 , elemnts1, elemnt2);
// var arr =[ element0 , element1, elemnts2] ;


var fruits = ["Apple", "banana" , "Fraise" ] ;
console.log(fruits.length); // length affiche le nombre d'element   dans ce tableau c'est  (des fruits) en gros combier de fruits


//  accéder ( via son index) à élements du tableau /on commence toujour par 0 dans les tableayu javascript

var first = fruits[0];
console.log(first);

var last = fruits[1];
console.log(last);

var last = fruits[2];
console.log(last);

var last = fruits[fruits.length -1];  // nous accédons à l'index du tableau  dans le sense inverse de la fin vers le debut en soustrayant 1 de sa longueur pour obtenir le dernier index.
console.log(last); 

// au lieusx de changer l etableau on modéfier

//   1.ajouter à la fin du tableau 
var newLength = fruits.push('orange');
console.log(fruits);
//  ["Apple", "banana" , "Fraise", "Orange" ] 

// 2. suprimer le dernier element des tableau

var lest = fruits.pop();// supprumer orange (à al fin) et pour 
console.log(fruits);

