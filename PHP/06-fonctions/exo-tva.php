<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-tva</title>
    <style>
        /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
    <div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Affichage
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../01-affichage/instructions.php">instructions</a>
    </div>
  </div>
 <div class="dropdown">
    <button class="dropbtn">Variables et constantes
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../02-variables et costante/variable.php">Variables</a>
      <a href="../02-variables et costante/constantes.php">Constantes</a>
</div>
 </div>

<div class="dropdown">
    <button class="dropbtn">concatenation et synthaxe
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../03-concatenation_et _syntaxe/concatenation.php">concatenation</a>
      <a href="../03-concatenation_et _syntaxe/syntaxes_quotes.php">syntaxes</a>
</div>
 </div>
<div class="dropdown">
    <button class="dropbtn">opérateur-arithmetique
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../04-opérateur-arithemtique/arithmetique.php">arithmetique</a>
      <a href="../04-opérateur-arithemtique/opérateur-affectation.php">opérateur</a>
</div>
   </div>


<div class="dropdown">
    <button class="dropbtn">condition switch if-else
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../05-conditions/switch.php">switch</a>
      <a href="../05-conditions/if-else.php">if-else.php</a>
</div>

 </div>


<div class="dropdown">
    <button class="dropbtn">Fonction
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../06-fonctions/exo-tva.php">exo-tva</a>
      <a href="../06-fonctions/predefinies.php">predefinis</a>
      <a href="../06-fonctions/utilisateur.php">utilisateur</a>
</div>

 </div>


<div class="dropdown">
    <button class="dropbtn">porté des variable 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../07-porté-des-variables/global-local.php">global et local</a>
</div>

 </div>

  </div>
</div>
    </div>
</html>



<?php

// exercice avec une fonction qui va calculer le TVA pour un pris HT 


//  fonction qui n'attend pas parametre 


   function calculTva(){
        // return permet de conserver la mèmoire recupurable en suite dans notre code 
        return 100*1.2 . '€ TTC ';
  }

  // j'execute e,n affichant le resultat
  echo calculTva(). '<br>';


/* ETAPE  1

 elle devra recevoire le prix en argument, plus elle calculera le prix TTC 
     Objectif: La  fonction est capable de calculer le prix TTC de n'importe quel chiffre et pas juste 100


*/ 

function calculTva2($prix){
   return $prix *1.2 . '€ TTC';
}


echo calculTva2(500) . '<br>';

// ETAPE 2 

/*
  La foction doit a present calculer le prix TTC des deux argument qu'on doit lui donner .
  Le prix  hors tax et aussi quel taux de TVA appliquer au prix HT 

*/ 


function calculTva3($prix,$tva){
    return $prix * $tva .'€ TTC';
}

echo calculTva3(500,1.055). '<br>' ;

echo calculTva3(300,1.2). '<br>'; 
//  en  peut changer la valeure du prix comme on veut

// cette fonction on toujoure 2 argument saufe que c'est lui  concernant le taux TVA  va recevoir une valeur par défaut ($taux = 1.2)


   function calculTva4($prix, $taux = 1.2){
    // elle lultuplie le pricx par le taux
      return $prix*$taux .'€ TTC' ;
  
  }


  // au moment de l'exucution si je ne donne qu'un argument (100) alors ma foncion va lui appliquer le taux par defaut (1.2)

    echo calculTva4(100) . '<br>' ;

  /* si par contre je précise le prix mais auss l etaux (different de celui par defaut alors que ce dernier va ecraser du taux par defaut pour 
  le remplacer (1.055) remplacer 1.2) */
  
    echo calculTva4(100,1.055) . '<br>' ;



    