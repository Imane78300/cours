<?php

// $sqlSelecProduct =" SELECT * FROM product";  // on prépare en String , une requette SQL 
// une nouvalle requette pour associer les 2 tableau user et product 
$sqlSelecProduct ="SELECT * FROM `product` INNER JOIN `user` ON product.id_user = user.id_user";
/*
permet de retourner les données quand la condition est vraie dans les deux tables. Comme le montre le schéma, ce type de jointure va permettre de concaténer les tuples des 2 tables deux à deux si une condition est satisfaite.
*/ 
// il sert a rasembler 2 tableau 
$tableSelectProduct = mysqli_query($db_connect ,$sqlSelecProduct ); 
//  la variable $ db_connect pour la connexion puis on execute la requette SQL, et on  stoke le résultat dans une variable $tableSelectProduct

$product = mysqli_fetch_all( $tableSelectProduct, MYSQLI_ASSOC );
// un tableau multi-dimensionnelle contenant toute la table product


// print_r($product);
















?>