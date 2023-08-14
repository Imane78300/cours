<?php


// sa fonction similaire a celle d'une variable, elle stoke un evaleur récupérable.Par contre , cette valeur ,ne sera pas modifiable pas la suite.

// une constante se declare avec le mot clé define 

// elle prend daux arguments . Le nom de la constante (par conevention, en majuscule). Le seconde argument est la valeur de la constante 


define('VILLE','poissy');

echo VILLE . '<br>';

// tenter de redrefinier ce valeut comme en dessous générera un eerreur php 

/* il sera utule de stocker une valeur que l'on sait fixe, non variable, dans une constante, par exemple , la valeur de l'Url de site. 
On pourra la stoker avec difine ('URL', '')*/


// define('VILLE' ,'Paris');
// echo VILLE . '<br>';
// en peut pas mettre de fois la même variable cela donne un warning


?>



<?php


/* les constantes magiques sont des constantes déjà codées mise à notre disposition 
(il y'en a beaucoup : https://www.php.net/manual/fr/language.constants.magic.php)*/

// cette constante donne le chemin physique jusqu'au fichier (file)

echo __FILE__ . '<br>';
// celle-ci donne le chemin physique jusqu'au dossier
echo __DIR__ . '<br>';
// cette dernière donne la ligne où elle est codée
echo __LINE__ . '<br>';






?>