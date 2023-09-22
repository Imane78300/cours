<?php

// $sqlSelecProduct =" SELECT * FROM product";  // on prépare en String , une requette SQL 
// une nouvalle requette pour associer les 2 tableau user et tableau  product 

$idprd = $_GET['idproduct'];// on va chercher l'info dans l'url, soit : modifier_produit.php?idproduit=4 / abreviataion  idproduit = $idprd

$sqlSelecProduct ="SELECT * FROM `product` WHERE `id_product` = $idprd";
/*
La clause WHERE va nous permettre de rajouter un conditionnement à une requête SQL. On va ainsi pouvoir ne sélectionner que des valeurs égales, supérieures ou inférieures à une certaine valeur.
*/ 
// il sert a rasembler 2 tableau 
$tableSelectProduct = mysqli_query($db_connect ,$sqlSelecProduct ); 
//  la variable $db_connect pour la connexion puis on execute la requette SQL, et on  stoke le résultat dans une variable $tableSelectProduct

$product = mysqli_fetch_all( $tableSelectProduct, MYSQLI_ASSOC );
// un tableau multi-dimensionnelle contenant toute la table product


 print_r($product);





?>