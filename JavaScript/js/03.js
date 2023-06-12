
// alert("hello");


// -- 1. Adition
// -- 2. je peut declarer plusieur variable à la suite


// je déclare mes variables
var nb1, nb2n, resultat;

//  jaffecte des valeurs

nb1 = 10 ; 
nb2 = 5 ;


// j'utiliser mes  variables avec un calcul
resultat = nb1 +nb2 ;


// j'affiche mon résultat dans la consol

console.log(resultat);

// -- 2. Soustraction
// soustraction nb1 - nb2 avec l'opérateur

resultat = nb1 - nb2 ;
console.log(resultat);

// --3. Multiplicaton
// Multiplication de nb1 * nb2 avec l'operateur "*"

resultat = nb1 * nb2 ;
console.log(resultat);


// --4. Division

// divesuion avec l'ppperateur "/"


resultat = nb1 / nb2 ;
console.log(resultat);

// --5. modulo
// Le modulo retourne le reste d'une Division 
// modulo de nb1 % nb2 avec l'operateut

resultat = nb1 % nb2 ;
console.log(resultat);


// et maintenant je ré-affecte une valeur à nb1  

nb1 = 11;
resultat = nb1 % nb2;
console.log("le erste de la devision  de "+ nb1 + "par" + nb2 + "est égal à:" + resultat);

// -- 6. Ecritures simplifées 
nb1 = 15;
nb1 =  nb1 +5; // egal 20

nb1 +=10; // nb1  lui-même 20+10 
console.log(' le resultat de "nb1 += 10;" est' +nb1);
//  égal à 30; alternance de guillemet simple et doubles pour ne pas casser ma chaine de caractéres

// si j'utillise un '(apostrofphe) dans uen phrase concaténée , je peut échapper le caractére à l'aide d'un anti-slash \ (alt gr +8)
