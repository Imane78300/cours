<?php

/*

EXIRCICE :
     Créez une classe Membre, avec les propriétés psudo et mdp
     le psudo doit être inférieur à 15 caractéres et supérieur à 0 ET QUE CE SOIT SRING !!
     
     
     =>OBJECTIF : afficher le psudi et le mdp

*/ 
// 1 je declare la class 

class Membre{// =  méthode
    // des propriéter 
     private $pseudo;
     private $mdp;

// $arg = arguments
    public function setPseudo($arg){
      if(is_string($arg) && (strlen($arg) >0 && strlen($arg) < 15)){
        $this->pseudo = $arg;
    
    
      }
    /*  if(is_string($arg)){
            if(strlen($arg)< 0 && strlen($arg) < 15){
               $this->pseudo = $arg
        
        }
            }
    */
    }
   
    public function getPseudo(){
        return $this->pseudo;
    }
    
    public function setMdp($arg){
        $this ->mdp = $arg;
    }
    
    public function getMdp(){
       return $this->mdp;
    }

}

// -------------------------------------------------------------------------------

$membre1 = new Membre;

$membre1->setPseudo('Marco');
$membre1->setMdp('Polo');

echo 'Pseudo : ' . $membre1->getPseudo(). '<br>';
echo 'Msp : '    . $membre1->getMdp().    '<br>';













?>