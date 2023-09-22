<?php

 

// On prépare en String, une requête SQL

$sqlSelectProduct = "SELECT * FROM `product`";

 

// on execute la requête SQL, et on stock le résultat

$tableSelectProduct = mysqli_query($db_connect,$sqlSelectProduct);

// dans une variable $tableSelectProduct

$product = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC);

 

// print_r($product);

 

 

 

?>