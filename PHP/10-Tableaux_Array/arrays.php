<?php


// une variable permet de stoker  des valeurs 

$listePrenom="Asuma,Naruto,Kazuto,Hanita";

echo $listePrenom .'<br>' ;

$tableauPrenom = array("Asuna","Naruto","Hanita","Kazuto",15);

echo "<pre>" ; print_r($tableauPrenom); "</pre>";

// le var_dump affiche le nombre de caractére et leure genre par exemple string et leur identifient le lenghth de chaque mots  ...
// (starlen au lieu ivonv_starlen,affiche la longueur de en fonction du nombre d'octet utulisé par la variable
echo "<pre>" ; var_dump($tableauPrenom); "</pre>";


echo "<br>";
echo $tableauPrenom[1]."<br>";

// autre syntaxe pour declarer un tabaleau 
// elle est plus pratique que la premiére pour ajouter des éléments au tableau au fur a muesur de notre code si on ne les connait pas tous au départ


$listePays[] = "France";
$listePays[] = "japan";
$listePays[] = "Espagne";
$listePays[] = "Italie" ;
$listePays[] = "Maroc";
$listePays[] = "Roumanie";


// boucle foreach adapté aux tableau

foreach($listePays as $indice => $valeur){
     echo "<p>" .$valeur ."a pour indice ".$indice  . "</p>";

}

// echo $listePays[2];

// foreach varsion ul /li

echo "<ul>" ;
   foreach($listePays as $indice => $valeur){
      echo"<li> La valeur " .$valeur ."a pour indice" .$indice ."</li>" ;
}

echo "</ul>";


// premet d'afficher le tableau en chaine de caractére; sépare chaque elemnets avec le 1ere arguments de la fonction, ici c'est le tiret "-"
   echo "<p>".implode('-',$tableauPrenom) ."</p>";


// Count et sizeof 


// sizeof () fonction est un alias de la fonction count()
// les 2 renvoie le nombre d'élements d'un tableau
// siezof()  prend un temp d'exécution plus long
echo count ($tableauPrenom) . '<br>'  ;
echo sizeof ($tableauPrenom) . '<br>' ;


