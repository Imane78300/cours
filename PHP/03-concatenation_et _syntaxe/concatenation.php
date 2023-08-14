<?php

// 1 concatenation simple

 

$prenom="Delia";

 

$nom= "Danciu";

 

 

//  il y a deux maniere de concatené en php

// d'abord la moin utilisés, avec une virgule

 

echo "Je suis", $prenom, " ", $nom ,'<br>';

 

// la plus utilisée, quasi tout le monde : le point

 

echo "je suis " . $prenom . " " . $nom . '<br>';

 

// 2 concatenation par affectation

 

$nombre ="Ko";


echo $nombre .=15;

