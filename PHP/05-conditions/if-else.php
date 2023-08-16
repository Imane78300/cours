

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-else</title>
    <style>
        /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
    <div class="navbar">
  <div class="dropdown">
    ass="dropdown">
    <button class="dropbtn">Variables et constantes
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../02-variables et costante/variable.php">Variables</a>
      <a href="../02-variables et costante/constantes.php">Constantes</a>
</div>
 </div>

<div class="dropdown">
    <button class="dropbtn">concatenation et synthaxe
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../03-concatenation_et _syntaxe/concatenation.php">concatenation</a>
      <a href="../03-concatenation_et _syntaxe/syntaxes_quotes.php">syntaxes</a>
</div>
 </div>
<div class="dropdown">
    <button class="dropbtn">opérateur-arithmetique
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../04-opérateur-arithemtique/arithmetique.php">arithmetique</a>
      <a href="../04-opérateur-arithemtique/opérateur-affectation.php">opérateur</a>
</div>
   </div>


<div class="dropdown">
    <button class="dropbtn">condition switch if-else
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../05-conditions/switch.php">switch</a>
      <a href="../05-conditions/if-else.php">if-else.php</a>
</div>

 </div>

<div class="dropdown">
    <button class="dropbtn">Fonction
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../06-fonctions/exo-tva.php">exo-tva</a>
      <a href="../06-fonctions/predefinies.php">predefinis</a>
      <a href="../06-fonctions/utilisateur.php">utilisateur</a>
</div>

 </div>

<div class="dropdown">
    <button class="dropbtn">porté des variable 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../07-porté-des-variables/global-local.php">global et local</a>
</div>

 </div>



  </div>
</div>
    </div>

    </html>

    <?php



// je declare 5 variable que je vais tester


$a= 22;
$b= 33;
$c= 44;
$d= 55;
$e= 66;

// 01-if else simple
// le if va tester (ce qu'on lui propose entre les paranthése)
// si c'est vari (true ) il éxécute ce qui est dans le bloc  d'instructions du else

if($a < $b){
     echo "vrai,  $a est bien inferieur à $b <br>";

}else{

     echo "Faux, $a n'est pas inférieur à $b ";
}


// en php on n'est pas obligé de coder le else.
// on peut tester qlq chose si c'est vrais, on execute ce qui esr dans le bloc d'intruction
// mais si c'st faut, si on ne rentre pas dans ce cas de , figure on continue simplement a executer la suite du code


// if($b < $c){
//      echo "Vrai $b est bien inférieur à $c <br>"
// }

// 02- avce && (and)
// avec &&, les deux test doivent etre True, sinon , on rentre dans le else(le False)

if($a < $b && $b >$c){
   echo "Vrai, les deux affirmation sont exactes";
}else{ 
    echo "Faux, une des daux affirùmation n'est pas vérifier <br>";

}


// 03-  ||  (or)
// avec || (or) une seule de deux conditions vérifiées suffisent a entrer dans le TRUE (le bloc d'instruction )

if($a < $b || $b >$c ){
    echo "Vrai, une des deux affirmations est axecte <br>";
}else{
  echo "Faux , aucune des deux affiramtion n'est varifier ";

}


// 04- avec XOR (ou exclusif)
// XOR exige q'une selu des deux, affiramtion soit execte .Si le sdeux sont exactes ou les deux fausses, on entre dans le else


if($a < $b XOR $b > $c ){
    echo "Vrai, une des deux affirmations est axecte <br>";
}else{
  echo "Faux , aucune des deux affiramtion  sont exactes <br> ";

}

// 05- avec if/elseif/else 
/*condition avec trois possibilités. Si la premiere n'est pas vérifier , on entre dans la seconde (elseif). Si cette derniere est toujour fausse ,
 on entre dans le else */ 

 if ($a > $b ){
  echo "$a est bien qupérieur à $b ";
}elseif($a != 22){
  echo  " Vrai, $a est différent de 22";
}else{
   echo " Faux aucune des deux affirmation n'est  vrai <br>";
}


// 06-condition contractée (applée aussi ternaire )
// la condition  contractée est utilisée quand on doit coder en PHP dans un bloc HTML
// elle permet une syntaxe plus condensée 
/*if ($a < $b ){
     echo "Vrai $a bien inferieur à $b
}else{
      echo $a n'est pas inferieur à $b 
}
*/ 

//  la ternaire ci-dessous est équivalente de la condition mise ne commentaire au desssus

//  entre les penrethése, on écrit toujour ce que l'on veut tester 
// apres le ? on ecrit le bloc d'instruction du if 
//  apres le : on ecrit le bloc d'instructiopn du else 

  echo ($a < $b) ? "Vrai $a est bien inférieur à $b <br>" : "Faux  ";



//   07-if/else avec == et ===


$var = 100;
$var2 = "100";

//  == ne teste que le valeure 


if($var == $var2){
  echo "Vrai les deux variable ont la même valeur <br> ";
}else{
 echo "Faux  les deux variable sont differente "  ;
 
}

// === ne  teste que le type et la valeur 



if($var === $var2){
  echo "Vrai les deux variable ont la même valeur et le même type <br>  ";
}else{
 echo "Faux elles ont la même valeur masi des types différents <br>    "  ;
}

// 08- if(isset)/else
// isset() est une fonction prédéfinie pour tester si une variable existe , à été declarée avant le script
// c'est trés utile pour savoir si on continue à derouler le code, à l'écuter ou stopper avec un message d'erreur 

if(isset($test)){
   echo "La variable test ne existe pas ";
}else{
   echo "La variable test n'existe pas <br>";
}

$test = TRUE; 

// code de la même  condition en version  contractée, en ternaire (utile lorsque l'on est dans un bloc HTML)

   echo(isset($test)) ? "La  variable test existe <br>" :  "la variable test n'existe pas ";

?>