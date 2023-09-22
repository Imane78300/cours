
// ====== ACTIVITÉ COURS 3 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Ecouter un évènement
2 - La propagation des évènements 
3 - Comment stopper la propagation des évènement
4 - Modifier le comportement par défaut d'un élément

Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours3.html


/* 
Partie 1
Commençez par écouter les événements click depuis l'élément #parent. 
Puis affichez le nombre de clics dans l'élément #parent-count.
*/

let compteurClic = 0 ;

document.getElementById("parent").addEventListener("click", function() { 
//     quand je click j'ajoute + 1 à la variable compteurClick
   compteurClic++;
  
  console.log(compteurClic);
//   pour afficher le resultat
  document.getElementById("parent-count").textContent = compteurClic;

/*   la en a ecresser le texte qui est dans le parent ("parent -count") par la valeur du compteurclick 
comme ça en affiche le nombre de clique a chaque fois*/
})





/* 
Partie 2
Faite la même chose mais avec l'élément #child. 
Il faudra afficher le nombre de clics sur cet élément dans l'élément #child-count.
*/

// un peut prés la même chose 

let child = document.getElementById("child");
let nbrClick2 = 0 ;

child.addEventListener("click" , function(){

 nbrClick2++;

 document.getElementById("child-count").textContent =  nbrClick2 ;


})



/*
Partie 3
Nous souhaitons maintenant que lorsque nous cliquons sur l'élément #child, seul le compteur de l'enfant se mette à jour.
N'oubliez pas que l'élément enfant se trouve à l'intérieur de l'élément parent
*/

let child = document.getElementById("child");
let nbrClick2 = 0 ;

child.addEventListener("click" , function(event){

 nbrClick2++;

 document.getElementById("child-count").textContent =  nbrClick2 ;
 event.stopPropagation();

//  event.stopPropagation();cela cert a stoper l'action du parent 

//  event en peut le remplacer par ce que en veut (banane ou ,n'importe quoi.... en effet agrace a lui en recupére l'element au moment de l'evenement  )

})



/*
Partie 4
On veut éviter qu'un clic sur le lien ne nous fasse changer de page. 
Supprimons donc ce comportement par défaut. 
*/

let child = document.getElementById("child");
let nbrClick2 = 0 ;

child.addEventListener("click" , function(event){

 nbrClick2++;

 document.getElementById("child-count").textContent =  nbrClick2 ;
 event.stopPropagation();
 event.preventDefault();

  // event.preventDefault(); c'est pour arrêter l'action qui ce fait par deffaut 
 })