
// ====== ACTIVITÉ COURS 2 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Créer un nouvel élément HTML
2 - Ajoutez un nouvel élément créer dans la DOM
3 - Ajoutez un contenu HTML dans la DOM
4 - Ajoutez une classe dans un élément
5 - Modifier le CSS d'un élément

Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours2.html


1 - Créez un nouvel élément de type paragraphe paragraphe
    
    //code


2 - Ajoutez votre nouvel élément dans l'élément ayant pour id "main"
    
    //code


3 - Ajoutez ce contenu HTML dans l'élément que vous créé lors de la première tâche: Mon <strong>grand</strong> contenu
    
    //code


4 - Ajoutez la classe important à l'élément que vous avez crée lors de la première tâche
    
    //code


5 - Votre élément est maintenant rouge, mais on voudrait qu'il soit vert. 
    Modifiez les styles de votre élément (en JavaScript) pour qu'il soit vert.
    
    //code

*/


// REPONCE QUESTION 1


let newElt1= document.createElement("p");

// REPONCE QUESTION 2


document.getElementById("main").appendChild(newElt1);


//  REPONCE QUESTION 3

newElt1.nnerHTML= "Mon <strong> grand </strong> contenu";


//  REPONCE QUESTION 4

newElt1.classList.add("important");




//  REPONCE QUESTION 5


newElt1.style.color="green" ;


