<?php

    $loginDB="root";
    $passwordDB= "";
    $DBname= "afs";
    $serveurName= "localhost";

    //  mysqli_connect = c'est un laisser passé pour accéder plus tard a la BDD = la base de donner 
     
    //  on respecte toujour l'ordre de fonction
    // en commence toujour par le nom du serveur car lui il vas rajouter http// ... puis login password et nome de la base de donner
    /*
    parametre1  = $serveurName 
    parametre2  = $loginDB
    parametre3  = $passwordDB 
    parametre4  =  $DBname 
    
    */ 

    $db_connect = mysqli_connect( $serveurName ,$loginDB ,$passwordDB , $DBname );
     


    






?>