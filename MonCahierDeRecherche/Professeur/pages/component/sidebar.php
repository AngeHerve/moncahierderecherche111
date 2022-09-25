
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <title>Document</title>

    <style>
.img{
width: 200px;
height:100px;
margin-top:20px;
    
}
.bg-sidebar{
    background-color: #2071DB;
    transition:  0.6s ease-in-out;
    z-index: 1;
    width: 50px;
}
.bg-sidebar a:hover{
    
    background-color:#0000ff;
    border-radius: 5px;
    width: 160px;
   
}

    </style>

</head>
<body>
<?php  session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed ">
<div class="log d-flex justify-content-between">
                <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
            </div>
            <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
                <img  class="rounded img-fluid img" src="..\..\Logo.jpeg" alt="img-admin">               
            </div>
            <div class=" bg-list d-flex flex-column  align-items-center fw-bold gap-2 mt-5  ">
                <ul class="d-flex flex-column list-unstyled">
                        <li class="h7"><a class="nav-link " href="dashboard.php"><iconify-icon icon="ion:home" class="me-2 text-dark"></iconify-icon><span class="text-white">Acceuil</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href="publication.php"><iconify-icon icon="ant-design:camera-outlined" class="me-2 text-dark"></iconify-icon> <span class="text-white">Publication</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href="#"><iconify-icon icon="ep:chat-dot-round" class="me-2 text-dark"></iconify-icon></i></span>Message</a></li>
                    <li class="h7"><a class=" nav-link text-white" href="gain.php"><iconify-icon icon="fluent-emoji-high-contrast:money-bag" class="me-2 text-dark"></iconify-icon> <span class="text-white">Gains</span></a></li>        
                           
                </ul>
                <ul class="logout d-flex justify-content-start list-unstyled">
                    <li class=" h7 De"><a class="nav-link text-dark" href="../prof_connexion.php"><iconify-icon icon="bx:log-out-circle" flip="horizontal" class="me-2 text-dark"></iconify-icon><span>Déconnexion</span></a></li>
                </ul>
            </div>
        </div>
        
</body>
</html>