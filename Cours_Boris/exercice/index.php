<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <h2>Premier cours !</h2>

    <style>
        h1{
            color:red;
        }

        .col{
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
        }
    </style>

    <script>
        let toto = "toto";
        console.log(toto);
    </script>

    <?php

use LDAP\Result;

        $prenom = " Boris<br>";
        echo $prenom . "<br><br>";

        $age = 19; //int
        echo $age . "<br><br>";

        $vrai = TRUE; //bool
        echo $vrai . "<br><br>";

        $float = 19.99; //float
        echo $float . "<br><br>";

        echo "<hr>";

        if($age >= 18){
            echo "l'utilisateur est majeur <br><br><br>";
        }else{
            echo "<br> L'utilisateur est mineur";
        }

        for($i=1; $i<=10;$i++){
            echo "<div>Produit numero " .$i. "</div>";
        }

        echo "<hr>";

        $color = array('red','blue','orange',99);
        print_r($color);
        echo "<br><br>";
        var_dump($color);
        echo "<br><br>";

        echo "<hr>";

        foreach($color as $c){
            echo "<br><br>" .$c;
        }

        echo "<hr>";

        for($o=0; $o<3;$o++){ // ici nous somme obliger de modifier le nombre  du milieu a chaque ajout dans le tableaux
            echo"<br><br>" .$color[$o];
        }

        echo "<hr>";

        for($o=0; $o<count($color);$o++){
            echo"<br><br>" .$color[$o];
        }

        echo "<hr>";



        $nbrDiv = 4;
        $color = array('red','blue', 'green', 'yellow');

        
    //    for($nbrDiv=0; $nbrDiv<4;$nbrDiv++){     ce que j'ai fait est pas reuusis
    //         echo "<div class=col ><br>" .$nbrDiv. "<br></div>";
    //     }

        for($i = 0; $i< $nbrDiv; $i++){
            echo"<div class='col' style='background-color:" .$color[$i]."'></div>";
        }

       

        // creer 4 bloc html 50px largeur 50px longueur CSS
        // avec comme back ground color les valeur du tableau color
         echo "<hr>";

        function verifAge( $age){
            // si $age est sup ou egal a 18
            if( $age >= 18){
                echo"ok";
            }else{
                echo"refusé";
            }
        }

        verifAge(22);
        echo"<br>";
        verifAge(16);
        echo"<br>";
        echo"<br>";
        echo"<br>";

        echo "<hr>";

        // cree une fonction initiale qui prend en parametre votre nom & prenom et qui renvoie la premiere de chaque chaine
        // exemple

        function nameInit($prenom, $nom){

            echo substr($prenom, 0, 1); //le premier chiffre et la position de ce qu'on veut recupere et le 1 le nombre de lettre a recupere ici donc juste la premiere
            echo substr($nom, 0, 1);

            //methode express et + simple
            echo $prenom[0]; //abcdef -> la premiere lettre soir a = 0
            echo $nom[0];
        }

        nameInit("Boris","Aubrun");
        echo"<br>";
        nameInit("Jalal", "Rabeh");
        echo"<br>";
        nameInit("Mathieu", "Leroux");
        echo"<br>";
        
        echo "<hr>";

        /*resultat : BA
                     JR
                     ML
        */


        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        function dice(){
            $result = random_int( 0 , 20 );
            echo $result;

            if( $result == 20){
            echo "reussite";
            }elseif($result == 0){
            echo "<br>échec";
            }else{
            echo "<br>".$result;
            }
        }

        dice();

        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "<hr>";
        //cree une fonction qui prend en parametre "couleur"
        // largeur devra etre entre 10px et 140px
        // longueur devra etre entre 10px et 140px
        // couleur defini par nos soin
        // qui aura oiur bute de creer un bloc html (div) avec les dimension precedement donnée via les parametres)

        function createDiv($bgcolor){
            $longueur = random_int( 10 , 140 );
            $largeur = random_int( 10 , 140 );
            echo "<div style='width:" .$largeur. "px;height:".$longueur."px; background-color:".$bgcolor."'></div>";   
        }

        createDiv('red'); //resultat : un bloc rouge

        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "<hr>";

        //Exo bonus
        // creer une fonction

        function calculette($nombre1, $nombre2, $operateur){
            if($operateur == '+'){
                $result = $nombre1 + $nombre2;
                echo $result;
            }elseif($operateur == '-'){
                $result = $nombre1 - $nombre2;
                echo $result;
            }elseif($operateur == '*'){
                $result = $nombre1 * $nombre2;
                echo $result;
            }elseif($operateur == '/'){
                $result = $nombre1 / $nombre2;
                echo $result;
            }else{
                echo "Error calcul";
            }
        }

        calculette(577,33,'*');
        echo "<br>";
        calculette(11,5,'-');
        echo "<br>";
        calculette(200,5,'/');
        echo "<br>";
        calculette(5,3,"+");
        echo "<br>";
        calculette(5,9,"u");



        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<hr>";

        

        
    ?>
</body>
</html>