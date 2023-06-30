// navigation avec lien savtif sur la page en cours

// 1-ajouter l 4id #active _nav sur la balise <nav>

// -2 vérifier que la classe .active est bien dans le fishier css

// -3 crée la fonction setActive () pour pour ajouter la classe .activ sur le lien URL en cours



function setActiv(){

    // on cilee les balises <a> enfants de L' ID #activ_nav et elles seront stokées dans un tableau ARRAY
     nav_a = document.getElementById("activ_nav").getElementsByTagName("a");

    //  je fait une boucle aui parcours toute la longeur du tableau avec la popriété .lenght

       for (var i = 0; i < nav_a.length; i++) {
        // document.location renvoie des informations sur l'URL en cours de consultation
        // indexOf renvoie la position d'une string dans une chaine de caratères (si le mot ou bout de mot recherché n'est pas trouvé indexOf renvoie -1, s'il trouve il renvoie la position)
        // donc ici, nous examinons l'URL de la page active pour valider si dans cette URL le lien de ma balise <a> existe, si oui indexOf renvoie un chiffre forcément supérieur à 0
        
        if (document.location.href.indexOf(nav_a[i].href) >= 0) {
            // dès lors, j'ajoute la classe .activ au lien en cours
            nav_a[i].className = "activ";
        }
    }
}

/*
 * Navigation avec les liens actifs sur la page en cours
 *
 * 4- Enfin, j'appelle ma fonction au chargement de ma page
 */
window.onload = setActiv();