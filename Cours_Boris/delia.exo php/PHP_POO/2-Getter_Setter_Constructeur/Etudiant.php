<?php

class Etudiant{

     // propriété privée
     private $prenom;
     public function __construct($arg) {
        // __construct : méthode appéle automatiquement lors d'une instruction de la classe ('new').On ne peut pas éclarer 2 constructeur en PHP.
        
        echo "Instanciation, nous avons réçu l'information suivante : $arg";
        $this->setPrenom($arg);

    }
    public function setPrenom($arg){
        $this->prenom =$arg;
    }
    public function getPrenom(){
        return $this->prenom;
    }


}

$etudiant1 = new Etudiant('Jeremie');//__construct est appélée automatiqueement,nous avons mis un argument aprés le nom classe qui attéérit directement dans le constructeur.

echo '<br>prenom : ' .$etudiant1->getPrenom();
// __construct sera équivalant de init avec session_start(), connesion à la bdd,autoload, etc
// __construct c'est une méthode magique














?>