<!-- une sesion sert a conserver des informations . On prut ouvrie une seson ppour l'utilisateur 
qui à mis  un produit dans sont panier mais en envoire pas cette information en BDD car il n'est pas defenitive . 
Peut être v'a t'il suppprimer cette produit de sont panier ou ajouter un 2émé produit ect
  -->

  <?php



// pour que un sesion puisse être débutée et que l'on puise récuperer ses  information, il faut  declarer en haut du fichier , avant 
// chose (doctype etc) une session_start




session_start();

$_SESSION['prenom'] = "Delia";
$_SESSION['statut'] = "admin";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>
<body>
    <button><a href="session_arrivee.php">Aller ver le profil</a></button>
</body>
</html>