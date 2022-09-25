


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
        <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    </head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- fin sidebar -->

        <!-- debut contenu page -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
        ?>

            <!-- debut studient list table -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Historique de payement</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort text-dark"></i>
                    </div>
                </div>
            </div>
            <div class="table table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr class="py-3">
                            <th>N° Payement</th>
                        
                            <th>Type d'Abonnements</th>
                            
                            <th>N° Téléphone</th>
                        
                            <th>Date</th>
                        </tr>
                      <?php
                   
$conn=mysqli_connect("localhost", "root", "", "eclasse");

$sql = "SELECT * FROM payement";
$result = mysqli_query($conn, $sql);


                         while($row = mysqli_fetch_assoc($result))
                        { 

                        ?>
<tr>

<td><?php echo  $row['id_paye']?></td>

<td><?php echo  $row['choix_ab']?></td>
<td><?php echo  $row['numero']?></td>
<td><?php echo  $row['date_ab']?></td>
</tr>
          <?php } ?>              
                    </thead>
                    <tbody>
    
                    </tbody>
                </table>
            </div>
            
            <!-- fin student list table -->

        </div>
        <!-- fin contenu page -->
    </main>
     <script src="../js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>