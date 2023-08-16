<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
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

<div class="dropdown">
    <button class="dropbtn">boucle
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../08-boucles/boucle.php">boucle</a>
</div>

 </div>
  </div>
</div>
    </div>
</html>

<?php


// j'initialise ma varibale $i en lui affectant la valeur 0
// souvent on initialllise par un 0 car le permier indice d'un tableau est l'indice 0 (les boucles servent beacoup à travailler sur les tableaux )
$i=0;

/*
 Dans la parenthése on donne la condition pour que la boucle puisse fonctionner (tant que la valeur de  $i ne dépasse pas 10)
       while($i <= 10){
        tant que la condition est respecter , on exécute ce qui est dans aprés echo)
        echo "Tour de boucle " . $i  ."---". '<br>';
        incrémentation de $i
        $i++
 }

*/ 


  while($i <= 10){
      if($i  == 10 ){
      echo "Tour de boucle " .$i . '<br>';
      }else{
      echo "Tour de boucle " .$i ."---". '<br>';
      
      }
      $i++;
  }

  
//  02 -do  while() pas trop utiliser , presque jamais 


 $i=0;


 do{
  echo "Tour de boucle " . $i . " *** " ."<br>" ;
   $i += 2;
}while($i <= 10);


// 03-boucle for()
  echo '<br>';


  for($i=0;$i <10; $i++){

    echo "ligne" .$i . '<br>';

  }

// 03 bis utilisation d'une for pour créer un sélecteur 

echo "<br>";
   echo "<form>";
      echo "<select>";
          echo "<option selected>Sélectionnez l'année</option>";
              for($annee = date('Y'); $annee>= date('Y')-100 ;$annee--){
                   echo "<option>". $annee."</option>";
                       }  
                           echo"</select>";

echo"</form>";




// 04- double for imbriquée
 
  echo '<br>';

    echo"<table border='1' style='border-collapse:collapse'>";
        echo "<tr>";
              for($i= 1 ; $i <= 10; $i++){
                    echo "<td> $i </td>";
                      }
                        echo "</tr>";
                              echo "</table>";
             
                echo "</br>";

echo"<table border='1' style='border-collapse:collapse'>";
          for($ligne= 0; $ligne <= 9; $ligne++){
              echo"<tr>";
            for($cellule = 0 ; $cellule <=9 ; $cellule++){
              echo "<td>".(10*$ligne+$cellule) +1 ."</td>";
            }
            //  si on a pas mit +1 il aurait commencer par 0 effet en ragoute 10 a chaque chiffre 
              echo"</tr>";
          
          }

?>