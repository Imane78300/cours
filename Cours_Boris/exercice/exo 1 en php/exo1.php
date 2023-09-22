<?php 

$a = 2;
$b = 12;
$r = $a +$b;

// 1ere possibilite : afficher les differente variables separes par des point 
// l'echapement \ donne a guillemet sa signification littérale 


echo $a . "+" . $b ."=" . $r. "" .  "\"by echo\"";
echo "<br><hr>";


echo "\$a" , "+" , "\$b", "=" , $r , "\"by echo\"";
echo "<br><hr>";

// 2éme possibilité : on met l'ensemble des variable dans une seule chaine.

echo "$a+$b=$r \" by echo\" ";
echo "<br><hr>";

echo "\$a+\$b=$r \" by echo \" ";
echo "<br><hr>";

// 3émé possibilité : on peut faire des concaténations

echo $a."+".$b."=".$r."\" by echo\"";
echo "<br><hr>";

echo "\$a"."+"."\$b"."=".$r."\" by echo \" ";
echo "<br><hr>";


// **************************************PRINT***********************************************************

print "PRINT <br>";
print "$a+$b=$r \" by print \"";
print "<br>";


print "\$a+\$b=$r \" by print \"";
print "<br><hr>";


// on peut faire des concatenation 

print "Concatenation <br>";

print $a."+".$b."=".$r." \"by print\"";
print "<br><hr>";


$ch ="les chaine de caractére ";
echo ucwords($ch);

$titre1="Strecture de base ";
$titre2 = "les classes";
$page1="1";
$page2="5";
echo "<br>";
echo "<pre><br>";

// on complet par des espaces pour la premiére ligne jusqu'à arriver à 20 caractéres
// pour les numéro de page on compléte dur le coté gauche

echo str_pad("chapitre ", 20 , " ").str_pad("Page",20," ",STR_PAD_LEFT),
"<br>";


?>