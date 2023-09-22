// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1 - Les instructions
* Ecrivez un programme qui fait saisir un nombre à l'utilisateur 
* puis affiche la table de multiplication de ce nombre.
* en utilisant while
* en utilisant for
* TODO : MESSAGE: Choisissez la table entre 2 et 10
* TODO : affichage de la table de multiplication ds la console
*/

/* let multi= prompt('Choisissez la table entre 2 et 10');
  

   for( let tour= 2 ; tour <=10 ; tour ++){

   console.log( multi *  tour )

 }*/

/ **********************************une autre manier de faire avec while**********************************************************/

 let table = Number(prompt ("Choisir une table de multiplictaion entre 2 et 10"));
    let multiple=1;
     while (multiple <= 10){
   
 console.log(table * multiple);
 multiple++
}








/*let multi = prompt('Choisissez la table entre 5 et 20');

   for( let tour = 5 ; tour <= 20 ; tour ++ ){

   console.log(multi * tour);

}

let multiplication = prompt('Entrez un nombre entre 10 et 100');
    for(tour >=10 ; tour <=100; tour++ ){
  console.log( multiplication * tour);
}
cela ne marche pas je ne sait pas pourquoi !!

*/















// Code ici

/*
* EXERCICE 2 - Les instructions
* Ecrivez un programme qui construit progressivement un triangle de 7 lignes:

# 
## 
### 
#### 
##### 
###### 
#######

*/

let Etoile =''
   for(tour = 1   ; tour <=7 ; tour++){
     console.log(Etoile= '#'+ Etoile );// + = / et Etoile= '#'+ Etoile un raccourci 

}




// Code ici

/* 
* EXERCICE 3: Complétez ce programme pour qu'il fasse 10 tours de manège en affichant le numéro du tour à chaque tour :

    Le manège démarre
    C'est le tour numéro 1
    C'est le tour numéro 2
    ...
    C'est le tour numéro 10
    Le manège s'arrête
*/

/*let tour;
for (tour = 1; tour <= 10; tour++) {
    console.log(tour);
}*/


/* let tour;
for (tour = 1; tour <= 10; tour++) {
    console.log( "C'est le tour numéro "  + tour);
}*/


let tour; 
console.log("Le manége démarre");
for (tour = 1; tour <= 10; tour++) {
    console.log( "C'est le tour numéro "  + tour) ;
}
console.log("Le manége s'arrête");


/* 
* EXERCICE 4:
* Ecrivez un programme qui affiche tous les nombres entre 1 et 100 avec les exceptions suivantes :
    - Il affiche "Fizz" à la place du nombre si celui-ci est divisible par 3.
    - Il affiche "Buzz" à la place du nombre si celui-ci est divisible par 5 et non par 3.
    - Il affiche "FizzBuzz" à la place du nombre si celui-ci est divisible à la fois par 3 et par 5.
    - Vous pouvez utiliser l'opérateur modulo % qui renvoie le reste de la division d'un entier par un autre.

console.log(10 % 2); // 0
console.log(10 % 3); // 1
console.log(11 % 3); // 1
Cet exercice constitue un test d'embauche classique qui élimine un nombre significatif de candidats. 
Accrochez-vous pour le réussir !
*/


for ( let i = 1 ; i<= 100 ; i++ ){

  if( i % 3 === 0 ) {
   console.log(i);
   console.log('fizz');


}

}

// *************************************************************************

for ( let i = 1 ; i<= 100 ; i++ ){
if (( i % 3 === 0 )  && (i % 5 === 0 )){
     console.log(i + 'FizzBuzz');
}else if ( i % 3 === 0 )
{
   console.log(i + 'fizz');
}else if (i % 5 === 0 ){
   console.log(i + 'buzz');
}

}
