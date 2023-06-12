//  alert('test');

//  L'operateure de comparaison ==  signifie 'agale à'

var nb1 = 123;
var nb2 = "123";

console.log(nb1 == nb2); // returene true

//  L'operateur de comparaison === signifie 'strictement égal à ' 
//  il permet de vérifier la VALEURS  et le TYPE

console.log(nb1 === nb2); // returne False

//  L'operateut signifie ' différents de ..... enn VALEUR' 
console.log(nb1 != nb2);
//  l'operateur  !== signifie ' strictement différent de ... en TYPE ET EN VALEUR '

console.log(nb1 !== nb2); // returne TRUE

//  EXERCICE

//  J' ARRIVE SUR UN ESPPACE SECURISER AU MOYEN dy prenom et du age 
//  je doit choisur mon prenom et mon age pour être adentifier sur le site 
//  En cas d'échec une alert m'informe du probléme.
//  si tout se passe bien, un message de bienvenue m'acceuille .

var prenom , monAge;
prenom ="imane";
monAge = 23 ;

// 1 -- Demander son prénom à l'autilisateur avec un prompt 
var prenomLogin = prompt( 'quel est votre prénom');
//  2 --  Je verifie si le prenom saisie (prenomeloging) correspond à  (prenom)
     if ( prenom === prenomLogin){
    // 2.1 si tout est ok , je contanu la verifiaction avec l'age 
    var ageLogin = parseInt(prompt("Votre âge ? "));
// 2.2 demande a l'utilisateur son age via un prompt
     if ( ageLogin === monAge){
     alert("bienvenue" + prenomLogin) ;
      }else{
        // 2.3 si les ages ne corespendant pas je lance une ALERT
     alert("Ereure d'âge") ;
        }
    
}else{
    // 2.4 SINON ? les prénom ne correspondant pas , je lance une ALERT
alert ("attention, prenom non reconnu")
}



