<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>

    </head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- debut sidebar -->

        <?php 
            include "component/sidebar.php";
        ?>
        <!-- fin sidebar -->

        <!-- debut content page -->
        <div class="container-fluid px">
        <?php 
            include "component/header.php";
        ?>
            <div class="cards row gap-3  mt-3">
                
                <!-- debut student list table -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Exercices Publiés</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                    <i class="far fa-sort text-dark"></i>
                    </div>
                   
                </div>
            </div> 
               
        </div>
        <!-- fin content page -->
        <div  class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Professeur</th>
                    <th>Titre</th>
                    <th>Niveau</th>
                    <th>Matière</th> 
                    <th>Exercices</th>
                    <th>Corrections</th>
                </tr>
                <?php
               include "conn.php";
                $req ="SELECT * FROM form_prof ORDER BY id DESC";
                $result = mysqli_query($conn, $req);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td style="text-align:center;">
                        <a href="avatar.jpg"> <img src="avatar.jpg" alt="" height="60px" width="60px"></a>
                    </td>

                    <td>
                        <?php echo $row['titre']; ?>
                    </td>
                    <td>
                        <?php echo $row['niveau']; ?>
               
                    <td>
                        <?php echo $row['matiere']; ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="../../Professeur/img/<?=$row['img']?>"> <img src="../../Professeur/img/<?=$row['img']?>" alt="" height="60px" width="100px"></a>
                    </td>
                    <td style="text-align:center;">
                        <a href="../../Professeur/img/<?=$row['img1']?>"> <img src="../../Professeur/img/<?=$row['img1']?>" alt="" height="60px" width="50px"></a>
                    </td>
                
                    <?php
                    }
                }
                    ?>
            </table>
        </div>
    </main>
    <script src="../../js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>