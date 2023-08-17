<?php

/*la méthode Get(Superglobale ) permet de c=véhiculer des informations dans l'Url pour les récupérer sr un autre fichier (ou a un endroit du même fichier 
) pour un affichege spéciale*/ 



// premiére exemple, je reccupére les informations sur  la même page 
// dans l'atribut href,d'abord j'indique le nom du fichier ou je veux info étant séparée de la précédente par un &
// target = '_blank' permet d'ouvrire la nouvele page dans un autre onglet 

if(!$_GET){

    echo "<button><a href='get_arriver.php?produit=Gateau&variete=Fraise&prix=12'target='_blanc'>Tester</a></button>";
}

