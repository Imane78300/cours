
<?php

if(!empty($_POST)){
  
    extract($_POST);
    // extract  transforme une clé du tableau $_POST en variable ayant le même nom.
    // cela nous facilite la tache ou lieu de faire a la main comme dans le commentaire si dessou
    // $_POST['email'] => $email
    // $_POST['password'] =>$password 

// verifier si les champs sont remplie
    if( !empty($email) && !empty($password) ){

        // $email="amouna.narimi@gmail.com"
        // $password = "12345678"
 
       
        $passwordCrypted = md5($password); // pour cripter le mot de pass 
    
//    en demande de stoker cette phrases dans une variable 

        $sqlSelectUser = "SELECT * FROM  user WHERE  email  ='$email' AND  password = '$passwordCrypted'"; // requette SQL écrite 
    
 // la en execute la phrase que on a stoker 
        $tableSlectUser = mysqli_query($db_connect, $sqlSelectUser); // Requete SQL executer
       
        $user = mysqli_fetch_assoc($tableSlectUser); // récupere l'xecution  de la requette SQL , puis la passe dans une fonction msqli fetch
        // assoc , pour convertir le resultat sous forme d'objet en tableau associatif 

        print_r($user);

        if(mysqli_num_rows( $tableSlectUser) == 1){// il me envoire le nombre de ligne dans ma base doner si le utilisateur existe déja 
            
            // IDENTIFIANT CORRECT   
//   en fesont cela en pert jamais les donner même si en quitte la page

        session_start();  //Obligatoir si en veut crèe une session
//    la session et comme une boite noir d'un avion il contien tout nos infot ;la ou en vas en peut les recupurer

            
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];        
            $_SESSION['email']= $user['email'];   
            $_SESSION['date_register']= $user['date_register'];
            $_SESSION['user_statut'] = $user['user_statut'];
            $_SESSION['image']= $user['image_user'];   // avatar
            // $_SESSION est un tableau , vous puvez mettre n'importe quel info dedans
            // tant que vous utilisez "session_start()" dans un fichier
            // $_SESSION existera toujour avec les donnée 
            
            if( $user['user_statut'] == 0 ){
            //    un utilisateur
            header('Location: ../index.php');
            // redigé sur index.php à la racine du projet

            }elseif($user['user_statut']== 1){
            //   un modérateur
            header('Location: ../index.php');
            // redigé sur index.php à la racine du projet
            
            
            }elseif($user['user_statut'] == 2){
            // un administrateur 
             header('Location: ./index.php');
            // redigé sur index.php dans backoffice ( le dashbord )
            
            }

          

        
        }else{
            //  MOT DE PASSS OU EMAIL EST INCORRECT 
            
             
            $imgError = "style='background-image:url(https://source.unsplash.com/oWTW-jNGl9I/600x800)'; ";
            $textError = "Email OU Mot de passe incorrect";

            

        
        }
        


 
        
    }

}


?>