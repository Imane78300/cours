<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predifinis</title>
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

// les fonction prédefinies sont celles qui sont déja codées, mises à notre disposition par PHP (par exemple isset()  )

// 01- strlen() et iconv_strlen()
/* les deux permettent se tester la longueur d'une chaine de caractéres (pour que par exemple on entre pas 20 caractére pour un pseudo, 
on limiter au maximum   20)   les espaces sont comptés */


$phrase = " Lorem ipsum color sit amet consectetur adipisicing elit .  Enim , totam . "; 

// le resultat trouvé sera 75

   echo iconv_strlen($phrase) ."<br>"; // iconv_strlen compte seulement les caractéres affichés
   echo strlen($phrase) ."<br>";      //  strlen utulise le nombre d'octet utilisé par chaque  caractére 


   $phrase2 = "étés";

 echo iconv_strlen($phrase2) ."<br>";// il compte que les lettre 
 echo strlen($phrase2) ."<br>"; //  il compte les lettre plus les accentees



//  02- substring
// fonction prédéfinie qui permet de sélectionner une chaine de caractéres à des endrois précis et supprimés le reste
// elle prend 3 paramétres . La chaine à décuper, le point de départ et le point d'arrivée
//  je veux conserver la premiére moitié de ma chaine de caractéres



   $phrase ="lepolespoissyimane";


  echo substr($phrase, 0,18)."<br>";
//   ça commence toujoure par 0 comme premier caractére 


 echo substr($phrase, 0,-4) ."<br>"; // ici substr prendra tous les caractére sauf 4 derniers


//  03- date()
// celle ci permet de récupérer l'anné en cours 

echo date("d/m/y"). "<br>";

echo "&copy;" .date('Y') . "imane"  . "<br>";

// echo date("D-M-Y"); ou echo date ("D/M/Y");



// 04- empty, contrairement à isset , la fonction vérifier si la variable (qui existe ) contient une valeur 

//    $phrase3= ""; La variable n'a pas de contanu
      $phrase3= "  ";  // La variable à raçu du contenu (un espace)

if(empty($phrase3)){
      echo " La variable n'a pas de contenu <br>";
}else{
      echo " La variable à reçu  de contenu";

}


