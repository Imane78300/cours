<?php 
// vérifier si le formulaire et bien remplie 

if(!empty($_POST)){
    extract($_POST);                       

    $image=$_FILES['image']['name'];


    if(!empty($title)&& !empty($description)&& !empty($price)&&  !empty($stock)&& !empty($image)){
         echo "formulaire bien rempli ! ";
    
         $iduser= $_SESSION['id_user'];// le créateur du produit est celui de la session connecté 
        // soit, $_SESSION.

        // $title= str_replace("'", "'", $title);
        // // pour quelle remplace un guiemmet par 2 ^pour ne pas avoir d'erreure sur le titre
        // $descreption = str_replace("'","'", $description);
        //  // pour quelle remplace un guiemmet par 2 ^pour ne pas avoir d'erreure sur la description



        $sqlProductInsert = "INSERT INTO `product`( `title`, `price`, `description`, `image`, `stock`, `id_user`, `discount`) VALUES ('$title','$price','$description','$image','$stock','$iduser','$discount')";

            echo $sqlProductInsert;

            if(mysqli_query($db_connect , $sqlProductInsert)){
                echo "Produit créé ";
    
            }else{
                 echo "Echec lors de la création ";
    

            // pour afficher l image 
            //  1- en commence par criéer  un sous dossier puis une variable ($folder) dansce cette exo , qui vas contenir le chemain du dossier qui vas enregistrer l'image ou plus tot le chemain de l'image 

            /* 2- puis une autre variable qui vas concaténer le chamain de l'image et la variable image  ($imgResult = $folder.$image;)
                 $tmpName = $_FILES['image']['tmp_name']; la on demade de chemain de la page qui est stoquer dans la variable $_FILES
                 $type = $_FILES['image']['type']; et la on demande le type de l'image qui aussi stoquer dans la variable $_FILES
            

            */  
            //  3- puis une condition dans la quelle on vas demander les genres d'image
      

            }

         $folder = "img/upload/";
         $imgResult = $folder.$image;
         // "../img/upload/nom_image.jpg"

         $tmpName = $_FILES['image']['tmp_name'];
         $type = $_FILES['image']['type'];

        // la fait une condition pour verifier le type de image 
        if($type == "image/jpeg" || $type == "image/png"  || $type == "image/webp"){
      
            if(move_uploaded_file( $tmpName,$imgResult)){
                echo "Image Uploadé avec succés ";
        
            }else{
                 echo "Echec de l'upload";
            }
    
    
    
        }else{
    
         echo " Mauvais format d'image, JPEG, PNG ou Webp only !";
    
        }

    }

}










?>