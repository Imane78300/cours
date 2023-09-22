<?php

    if(isset($_POST['submit'])){
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $somme = $nombre1 + $nombre2;
        echo "La somme de $nombre1 et $nombre2 est : $somme";
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la somme</title>
</head>
<body>
    <form method="post" action="">
        <label for="nombre1">Nombre 1 :</label>
        <input type="text" name="nombre1">
        <br>
        <label for="nombre2">Nombre 2 :</label>
        <input type="text" name="nombre2">
        <br>
        <input type="submit" name="submit" value="Calculer">
    </form>
</body>
</html>