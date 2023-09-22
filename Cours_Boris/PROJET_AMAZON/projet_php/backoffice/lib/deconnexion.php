<?php 

session_start();// on vas manipuler la SESSION, on doit l'appler 
session_unset();//unset va vider tout les donnés de la variable $_SESSION 
session_destroy();// va détruire la variable $_SESSION et du coup la session elle même .
header('Location: ../index.php');// petit redirection sue la page d'acceuil du site 





?>
