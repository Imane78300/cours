
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constantes</title>
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


// sa fonction similaire a celle d'une variable, elle stoke un evaleur récupérable.Par contre , cette valeur ,ne sera pas modifiable pas la suite.

// une constante se declare avec le mot clé define 

// elle prend daux arguments . Le nom de la constante (par conevention, en majuscule). Le seconde argument est la valeur de la constante 


define('VILLE','poissy');

echo VILLE . '<br>';

// tenter de redrefinier ce valeut comme en dessous générera un eerreur php 

/* il sera utule de stocker une valeur que l'on sait fixe, non variable, dans une constante, par exemple , la valeur de l'Url de site. 
On pourra la stoker avec difine ('URL', '')*/


// define('VILLE' ,'Paris');
// echo VILLE . '<br>';
// en peut pas mettre de fois la même variable cela donne un warning


?>



<?php


/* les constantes magiques sont des constantes déjà codées mise à notre disposition 
(il y'en a beaucoup : https://www.php.net/manual/fr/language.constants.magic.php)*/

// cette constante donne le chemin physique jusqu'au fichier (file)

echo __FILE__ . '<br>';
// celle-ci donne le chemin physique jusqu'au dossier
echo __DIR__ . '<br>';
// cette dernière donne la ligne où elle est codée
echo __LINE__ . '<br>';






?>
