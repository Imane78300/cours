<!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucfirst($_SESSION['firstname'])." ".strtoupper($_SESSION['lastname']) ?></span>

                               
                                <?php
                                if( !empty($_SESSION['image'] ) ){
                                
                                ?>
                                 <!-- image d'utilisateur en base de donnée -->
                                <img class="img-profile rounded-circle"src="img/avatar/<?php echo $_SESSION['image'];?>">


                                <?php 
                                  }else{
                                
                                ?>


                                 <!--Image d'utilisateur par défaut   -->
                                 <img class="img-profile rounded-circle"src="img/undraw_profile.svg">
                                



                                <?php 

                                }

                                ?> 

                             


                               
                                    
                            </a>