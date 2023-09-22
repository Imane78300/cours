<?php
// en vérifier si le formiulaire et bien remplie
$idprd = $_GET['idproduct'];
if( !empty($_POST) ){
    extract($_POST);
    $image = $_FILES['image']['name'];
    $iduser = $_SESSION['id_user'];

    if(!empty($title) && !empty($price) && !empty($stock) && !empty($description)&& !empty($image) ){
    
        $sqlUpdate = "UPDATE product SET `title` =  '$title', `price`= '$price' , `description` = '$description', `image`= '$image',  `stock` = '$stock' , `id_user` = '$iduser', `discount`= '$discount' WHERE `id_product`= $idprd";

         echo $sqlUpdate ;
         mysqli_query($db_connect , $sqlUpdate);
         


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









?>