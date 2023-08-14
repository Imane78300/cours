<?php

// syntaxe au dessus pour ouvrire un passage php 
// il est conseillé de le laisser ouvert si on ne fait que du traitement PHP.
// c'est plus facil pour debug
// on peut aussi le fermer mais plus difficlle à corriger en cas de probléme





// instruction d'affichage trés souvent utilisé 



echo "Bonjour, Je suis Imane. <br>";


// le ; est un fin d'instuction , il est obligatoir pour signifier cet ordre au navigateur , sinon erreur php 
// une secobde instruction est possibme en PHP avec l emot print, mais il n'est pas  trées peu utilisé , dans paratiquement aucun script ou tutoriel 

?>

<!--  Passage contracté en PHP -->
<!-- il necessite pas d'echo, il est implicite, il ne sert que pour afficher -->


<?= "Nous somme lundi  <br>" ?>   <!-- le = segnifie echo ,c'est le passage contracté -->


<?php

// Affichage non conventionnell (print_r et var -dump)
// l'affichage conventionnellee ne sert que durant la période de développement du site. Il est utile pour le développeur , pas pour le visiteur du site .


// le jour ou le site est mis en ligne, il faut mettre tou sles print_r et var_dump en commentaire oou les supprimer !!!!!!!!!!!!


// je déclare un variable pour ensuite la tester 

$prenom='Imane';

// la balise <pre></pre> qui qui entoure le print_r est utule pour mieux lire les information que l'on veut récupérer


echo "<pre>";

     print_r(gettype($prenom));

echo "</pre>";

// les cOmmentaire en php 

// 1er type de commentaire 

/*
2eme type sur plusieur lignes
*/ 

#3éme type de commentaire 

// mix PHP et  HTML 


echo '<h1> Salut </h1>';
echo 'Nous somme <strong>lundi</strong><br>';
echo '<div class="heure">l\'ecol commence a 9h00 <br></div>';

?>

<!-- le syntaxes  en sessus ne sont pas tollerer , meme si elles fonctionnets. Elles alternant trop les passages d'une langague à l'autre 
C'est dit code "Sale  -->


<h1><?php echo "Bonjour" ;?></h1>
<?php echo "Nous somme" ?> <strong>lundi</strong> <?php echo "est il est 15h "; ?>

<!-- le code php n'est pas visble dans le code source de la page c'est la preuve que le navigateur ne peut pas gère ce language 
seulement le language front -->
