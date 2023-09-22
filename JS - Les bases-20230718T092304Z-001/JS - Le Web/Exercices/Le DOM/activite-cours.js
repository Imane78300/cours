// ====== ACTIVITÉ COURS =====


// 1 - Récupérez l'élément ayant pour ID main-content grâce à son ID.


// 2 - Pour ID main-content, change le contenu textuel par "Bonjour, je suis un nouveau texte"


// 3 - Récupérez le premier élément ayant pour classe important


// 4 - Change lui sa class par newClass, le contenu textuel devra s'afficher en rouge




// QUESTION 1 


document.getElementById("main-content");


// QUESTION 2

document.getElementById("main-content").textContent ="Bonjour , je suis un noveau texte ";


// QUESTION 3 


document.getElementsByClassName("important")[0];

// deusiéme maniére

document.querySelector(".imprtant") ;



// QUESTION 4 

elt2.classList.replace("important", "newClass");

const elt2 = document.getElementById("newClass");
elt2.style.color = "red"; 

// plus facile 

document.querySelector("important").classList.replace("important" , "newClass");
document.querySelector("important").style.color = "red";