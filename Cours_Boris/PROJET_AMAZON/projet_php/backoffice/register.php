<?php
// on fait appele à un fichier php 
require_once("lib/db.php");

//  DB. PHP nous connect à  la BDD et nous donne carte blanche pour faire des requetes SQL

 

if(!empty($_POST)){

    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['repeat_password'])){

        // verifier si le champ password et repeat_password sont édentique et qu'il font un max de taille 8 caractére en moins 
        if($_POST['password'] == $_POST['repeat_password'] && strlen($_POST['password']) >= 8 ){

            extract($_POST);
            // il transforme notre $_POST 
            // ou lieu de faire $_POST['firstname'] -> $firstname directement il créé une variable avec tout les caractéres existant 
            $passwordCrypted = md5($password);

            $sqlslect = " SELECT * FROM user WHERE email = '$email' " ;
            //  $sqlslect est une variable qui accueille une chaine de caractére resseblant à une requête SQL 
            $tableUser = mysqli_query($db_connect ,$sqlslect );

            // mysqli_query() est une fonction qui permet à l'aide de la variable $db_connect et de la requette SQL 
            // précédante, d'executer la requete SQL (Select / insert /update ou delete)

            // en verifier si l'email est deja utiliser ou pas 
            if( mysqli_num_rows($tableUser) == 0 && filter_var($email , FILTER_VALIDATE_EMAIL)){
                // si il ya 0 correspondance Alors l'email est donc bien vierge et peut être créer 
                // sinon lemail est déja existant

                // echo "<pre style='color:white';>";
                // print_r($_POST);
                // echo"</pre>";
                
                $date= date('Y-m-d H:i:s');
                $statut = 0 ;
                // la requett SQL en peut  la recupurrer sur la base de donner
                $sqlInsert= "INSERT INTO `user`( `firstname`, `lastname`, `email`, `password`, `date_register`, `user_statut`) VALUES ('$firstname' ,' $lastname' , '$email' , '$passwordCrypted'  ,'$date' , '$statut')";
                // echo  $sqlInsert;
                mysqli_query($db_connect, $sqlInsert);

                // echo $sqlInsert;

                // pour nous envoyer vers une page de connexion 

                header('Location: login.php');

            }else{
        
                echo "ERREUR EMAIL DEJA EXISTANT";
    
            }  
      }  
   }
}
 
















?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" 
                                            placeholder="First Name"  name="firstname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" 
                                            placeholder="Last Name" name="lastname" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" 
                                        placeholder="Email Address"  name="email" >
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" 
                                            id="exampleInputPassword" placeholder="Password" name="password"z>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="repeat_password"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <input type="submit" value="Register Account" href="login.php" class="btn btn-primary btn-user btn-block" name="envoie_creation"> 
                                </a>
                                <hr> 
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>