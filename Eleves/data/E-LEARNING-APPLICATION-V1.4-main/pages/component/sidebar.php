<?php  session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed ">
            <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
                <img class="rounded" src="../assets\img\Logo.jpeg" alt="img-admin" height="110" width="200" style=" margin-top:20px">               
            </div>
            <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-5  ">
                <ul class="d-flex flex-column list-unstyled">
                        <li class="h7"><a class="nav-link " href="dashboard.php"><i
                            class="fal fa-home-lg-alt me-2 text-dark"></i> <span class="text-white">Acceuil</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href="students_list.php"><i
                                class="far fa-graduation-cap me-2 text-dark"></i> <span class="text-white">Publier</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href="course.php"><i
                                class="fal fa-bookmark me-2 text-dark"></i> <span class="text-white"></span>Message</a></li>
                    <li class="h7"><a class=" nav-link text-white" href="payment_details.php"><i
                                class="fal fa-usd-square me-2 text-dark"></i> <span class="text-white">Gains</span></a></li>        
                </ul>
                <ul class="logout d-flex justify-content-start list-unstyled">
                    <li class=" h7 De"><a class="nav-link text-dark" href="../index.php"><i 
                    class="fal fa-sign-out-alt me-2 text-dark"></i><span>Déconnexion</span></a></li>
                </ul>
            </div>
        </div> 

