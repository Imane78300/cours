// alert('teste');

// ppour demender a un utilisateur de choisir u nombre en utilise
//  var choix = prompt("Choisir un nombre :");

 var choix = prompt("Choisir un nombre :");

// for une boucle

// for(var i=1; i<=10; i++){
//    var resultat = choix * i;
//    document.write(choix +" x " + i + " = " + resultat + "<br>"); }


// if((choix >= 2) && (choix <=9)){
    
//  for(var i=1; i <=10; i++){
//     var resultat = choix * i;
// document.write(choix +" x " + i + " = " + resultat + "<br>");

// }
// }else{
//  document.write("<h4> Le chiffre doit être entre 2 et 9 !</h4>")

// }


// while = tant que  et les deux bare = ou 
// break ça coupe la boucle 

while ((choix>1) || (choix<10) ) {
    if((choix >= 2) && (choix <=9)){
        for(var i= 1; i <= 10; i++){
        var resultat = choix * i;
         document.write(choix + " x " + i + " = " + resultat + "<br>"); 
    }
    break;
    }else{
        choix = Number(prompt("<h4> Le chiffre doit être entre 2 et 9 !</h4>"));
    }
}

