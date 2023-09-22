<?php 

// EXO  1 faire un boucle pour afficher des numéro 

for($a=4 ; $a<=12 ; $a++ ){
  echo  $a . "<br>";

}
// correction avec une autre manierre boucle while
   $i = 4;
   while ($i <= 12){
   echo $i ;
   echo "<br>";

    $i++;
  }


// *************************************************************************************************************************************************


//EXO  2 


/* en commence par créé une variable que en appele comme en veut par exemple ici c'est $number et en mit le mot clé fuction et display 
   puis en fait la condition if et en deffinit la variable $number puis en fait un echo pour afficher le resultat puis en mis un display
    de la variable number avec la condition que en veut appliqué 

*/
function display($number) {    
    if($number>=1){    
     echo "$number <br/>";    
     display($number-1);    
    }  
}    
    
display(10);


// correction 2 émé manierer

   function decrement($n){
     if($n > 0 ){
        print($n . "<br>");
        decrement($n-1);
    }
  }
 decrement(10);
 echo"<br><br>";

// ************************************************************************************************************************************************
// EXO 3 FIRE LE SAPIN 
  
/* la en commmence par créé une variabel que ne va appeller ligne que en vas laisser vide pui en vas fire la condition 
   dans la quel en ùis une variable $i qui vas pas depaser le 7 

*/ 
  $ligne= "";
  for($i=1 ; $i<7 ; $i++){
     $ligne= $ligne ."#";
      echo $ligne. "<br>";


  }



$ligne = "";
for($i= 1 ; $i<7 ; $i++){
    $ligne = $ligne ."*";
    echo $ligne. "<br>";


}



// 2émé manier 

   for($i=1 ; $i<=10 ; $i++){
     for($etoile =1 ; $etoile<=$i ; $etoile++){
     echo "*";
    }
     echo "<br>";
  }
//  ****************************************************************************************************************************************************

//  exo 4 

   for($line=1 ; $ligne<6 ; $ligne++){
      for($cellule =1 ; $cellule <6 ;$celllule++){
         echo $ligne * $cellule ."";
      }
      echo"<br>";
  }







?>