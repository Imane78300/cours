<?php 
     
/************************************************PARTI1**********************************************************************************************/  

        // print_r( $_POST );

        // echo $_POST['color'];
        
        /*si(pasvide(informationinput)){
            cree une variable$ 1 = qui vas contenire les informations de l'input['name']
            cree $ une variable 2 = fonction PHP ('cree un dossier/fichier.txt(mp3,json ect) ,'w'(donne les droit =>) https://www.php.net/manual/fr/function.fopen.php)
            fichier ecrit moi($ 2, $ 1)
            fichier ferme ($ 2)

            cree $ 3 = stocker les donné qu'on a enregistré dans  le chemin du fichier cree precedement
            
        }*/

        if( !empty($_POST) ){
            // pour changer la coleur 
            $color = $_POST['color'];
            $fileColor = fopen( 'admin/color.txt' , 'w');
            fwrite( $fileColor, $color );
            fclose( $fileColor );

        }

        $colorHeader = file_get_contents('admin/color.txt');


/*****************************************************PARTI2**********************************************************************************************/ 
        // echo $colorHeader;
     
        
        if( !empty( $_POST ) ){

            if( !empty( $_POST['websiteName']) && !empty( $_POST['title'] ) && !empty( $_POST['subtitle'] ) ){
                $nomdusite =  $_POST['websiteName'];
                $titre =  $_POST['title'];
                $soustitre = 

// créér un tableau 
                $table = array("NomDuSite" =>  $_POST['websiteName'], "Titre" => $_POST['title'], "SousTitre" => $_POST['subtitle'],
                 "image" => $_FILES['image'] ['name']);

// convertire un tableux en json 

                $tableJson = json_encode($table);

                // print_r($table);
                // echo "<br>";
                // print_r($tableJson);

                $fileJson = fopen("admin/table.json", "w");
                fwrite( $fileJson, $tableJson );
                fclose( $fileJson );


            }

        }

      
        $contenu = file_get_contents('admin/table.json');
        $tablePHP = json_decode($contenu, true);
        // print_r($tablePHP);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"> <?php echo $tablePHP['NomDuSite']; ?> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5" style="background-color: <?php echo $colorHeader; ?> !important;" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"> <?php echo $tablePHP['Titre']; ?> </h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php echo $tablePHP['SousTitre']; ?></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">

                <?php 
                
                echo "Formulaire TEST";
                 
                ?>

                <!-- >> Formulaire << -->
                <form method="POST" id='form_user'>
                    <label for="email">Email : </label>
                    <input type="email" id="email" name="email" placeholder="insérer votre Email @">
                        <br>
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" placeholder="votre prénom">
                        <br>
                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname">
                        <br>
                    <input type="submit" id="validate" name="validate" value="Je m'inscris">
                </form>
                <!-- --Formulaire-- -->

                <!-- Formulaire Perssonalisation -->
                <form enctype="multipart/form-data" method="POST" id="form_perso">
                    <label for="color">Couleur du header : </label>
                    <input type="color" id="color" name="color">
                    
                    <br>
                    
                    <label for="website">Nom du site</label>
                    <input type="text" id="website" name="websiteName">
                    
                    <br>
                    
                    <label for="title">Titre</label>
                    <input type="text" id="title" name="title">
                    
                    <br>
                    
                    <label for="subtitle">Sous-Titre</label>
                    <input type="text" id="subtitle" name="subtitle">
                    
                    <br>
                    
                    <label for="image">Image du produit</label>
                    <input type="file" id="image" name="image">

                    <input type="submit" value="Mettre à jour">
                </form>
                
                <?php 

                // $_POST - Formulaire 
                // $_FILES - Fichier
 
               
  // on veut mettre du html en php en doit mettre cette formule 
                    echo "<pre>";
                    print_r( $_FILES );
                    echo "</pre>";


                    // en criée le chemain de l' image
                    // stoqué le lien de l'image dans une variable que en appelle comme en veut 
                       $uploadImage = "assets/images/";
                       $uploadFile  =  $uploadImage.$_FILES['image']['name'];
                        //  "assets/images/nomimage.jpj";

                       if (move_uploaded_File( $_FILES['image']['tmp_name'], $uploadFile)){
                        echo "Image Niquel ! ";

                    }else{
                          echo "!!!! Image haker !!!!";
                    }


                    // echo $_POST['email'];

                    // SI mon prénom fait moins de 5 caractères 
                    // Afficher un méssage d'erreur

                    if( !empty( $_POST ) ){
                        $name = $_POST['firstname'];
                        
                        // echo strlen($name);
    
                        if( strlen($name) < 5 ){
                            echo "<p style='color:red'>Erreur, le prénom est trop petit</p>";
                        }else{
                            echo "<p style='color:green'>Le prénom est niquel !</p>";
                            $actual_date = date('[d-m-Y H:i:s]');
                            $file = fopen('log/data.txt','a+');
                            $log = "L'utisateur :".$_POST['email']." a réussi à s'inscrire ".$actual_date;
                            fwrite($file, $log.PHP_EOL);
                            fclose($file);
                        }
                    }
                    

                ?>
  
               
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/ <?php  echo $tablePHP['image']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
