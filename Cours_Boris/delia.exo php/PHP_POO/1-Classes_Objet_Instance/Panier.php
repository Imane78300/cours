<?php
// POO = programation orientée objet

// Une classe permet de produire plusieures objets. Par convention, une classe sera nommée avec la première lettre en MAJUSCULE

class Panier{

    //Propriété publique
    public $nbProduit;// Cette propriété  public  qui stockera le nombre de produits dans le panier

    // Méthode publique
    public function ajouterArticle(){
        //traitements
        return "L'article à bien été ajouté !";// Cette méthode renvoie un message de confirmation
    }

    // Méthode protégée (accessible uniquement dans la classe et ses classes dérivées)
    protected function retirerArticle(){
        //traitements
        return "L'article à bien été retiré !";// Cette méthode renvoie un message de confirmation
    }


    // Méthode protégée (accessible uniquement dans la classe)
    private function affichageArticle(){
    // traitemets
     return "Voici les article"; // cette méthode renvoie un message de confirmation

    
    }
   
}

// -----------------------------------------------------------------------------------------------------------

$panier1 = new Panier ;//  new Panier <=> Instanciation(permet de déployer l'objet issue de la classe (ici, Panier) pemet de passer d'une classe à objet)
 // $panier1 représente l'objet issue de la classe 
var_dump($panier1);//var_dump affiche des informations sur l'objet,y compris son type, son nom de classe et sa reference.

$panier1->nbProduit = 5;//  on assigne la valeur 5 à la propriété publique $nbProduit de l'objet$panier1.

echo '<br>$panier1 :' .$panier1->nbProduit . 'produits <br>';//  on affiche la propriété publique $nbProduit de l'objet  $panier1

echo '<br>$panier1 :' .$panier1-> ajouterArticle(). '<br>'; // On appelle la méthode publique ajouterArticle() de l'objet $panier1 et afficher la méthode.

// echo '<br>$panier1 :' . $panier1-> retirerArticle() . '<br>'; On tente d'appler la méthode protégée retirerArticle(),ce ci génére erreur.

// echo '<br>$panier1 :' .$panier1-> affichageArticle(). '<br>'; On tente d'appler la méthode protégée affichageArticle(),ce ci génére erreur.

$panier2 = new Panier; // Création d'un nouvel objet $panier2 à partir de la Classe panier.
var_dump($panier2);

$panier2->nbProduit = 10;
echo '<br>$panier2 :'. $panier2->nbProduit .' produits <br>';// On affiche la propriété publique $nbProduit de l'objet $panier2

echo '<br>$panier1 :'. $panier1->nbProduit .' produits <br>';// On affiche la propriété publique $nbProduit de l'objet $panier1











 



 



