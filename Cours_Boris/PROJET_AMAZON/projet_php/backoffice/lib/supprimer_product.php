<?php 

// un indesponsable pour faire la requete SQL 

require_once('db.php');

$idprduit = $_GET['idproduct']; // id du programme

// 1) requete SQL delete
$sqlDeleteProduct ="DELETE FROM product WHERE `id_product` = $idprduit ";
if(mysqli_query($db_connect, $sqlDeleteProduct)){
   
    echo "Le produit a bien été supprimé";
    header('Location: ../index.php');

}else{

    echo "Echec lors de la suppression du produit";


}


// 2) rediction sue page deashboard













?>