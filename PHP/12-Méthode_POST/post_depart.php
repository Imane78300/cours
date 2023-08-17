[11:45] Fatima Boubkry

<!-- un formulaire codé seulement en HTML et CSS na pas d'utilité, on doit lui ajouter un traitement PHP pour pouvoir recuperer les infos renseignées dedans et les utiliser plus tard. c'est PHP qui va rendre dynamique le formulaire sinon, ce n'est qu'un simple affichage pour le formulaire soit connecter a la methode POST il faut absolumet écrire dans la balise form methode=POST , action qui sert à autre chose on verra ca plus tard.-->

 

<form method=POST action="">

    <!-- dans les attributs du champs Prénom ci dessous, seul name=prenom est important, obligatoire en PHP, pour que les informations puissent être récupérer et envoyées en BDD. For (dans label et id dans input n'ont aucune importance pour PHP et l'envoi en BDD. Ils sont par contre utile en affichage pour l'UX, améliore l'expérience utilisateur) -->

    <!-- L'attribut name est indispensable pour que les données puissent être envoyées en BDD -->

 

    <label for="prenom">Prénom</label>

    <input type="text" id="prenon" name="prenom" placeholder="Votre prenom">

    <br><br>

    <label for="description">Description</label>

    <textarea name="description" id="description" cols="15" rows="3" placeholder="Votre description"></textarea>

    <br><br>

    <label for="annee">Année de naissance</label>

    <select name="annee" id="annee">

        <?php

        for ($annee = date('Y'); $annee >= date('Y') - 100; $annee--) {

            echo "<option> $annee </option>";

        }

        ?>

    </select>
    <br><br>
    <input type="submit" value="Soumettre">

</form>

 

<!-- si je n'écris pas cette condition if($_POST), j'aurais droit aux warning, undifined key prenom, key description etcc... 
C'est normal, au premier chargement de la page, le formulaire est vide, aucune info n'a ancore transité d'ou le undifined key -->

 

<!-- Ci dessous, syntaxe contractée pour une condition if(). Elle permet de générer plus rapidement du code HTML que si on était dans
 un grand passage PHP nécessitant beaucoup d'echos -->

 

 

<?php if ($_POST) : ?>

    <!-- J'ai besoin de la superglobale $_POST pour récupérer les infos qui ont transité dans le formulaire. Je crochète ensuite 
    à l'indice qui m'interesse(cet indice existe car on l'a renseigné pour l'atribut name dans le formulaire, d'ou l'utilité de name) -->

 

    <ul>
        <li>prénom : <?= $_POST['prenom'] ?> </li>
        <li>Description : <?= $_POST['description'] ?></li>
        <li>Année de naissance : <?= $_POST['annee'] ?></li>
    </ul>

    <!-- la syntaxe contractée if() necessite pour fermer endif sinon erreur PHP -->

<?php endif;  ?>