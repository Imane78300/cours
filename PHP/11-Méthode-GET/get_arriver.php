<?php

// ce code n'est valable qu esi on veut récupérer les infos sur la même page
if($_GET){
    
 echo $_GET['produit'] ." à la ". $_GET ['variete'] . '<br>';
 echo "Vendu au prix de " . $_GET['prix']. "€, aujourd'hui seulement !";

}

