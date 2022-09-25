<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/styl.css">
</head>
<body>
  <?php
    session_start();
    include 'connexion.php';
    $_SESSION["id"]= $_GET['id'];
    $id = $_SESSION["id"];
    $statement = $con -> prepare("SELECT * FROM form_prof WHERE id = $id");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50 form_update">


<form method="POST" action="update.php" enctype="multipart/form-data">
                                 
                                  <div class="">
                                    <label for="matiere" class="col-form-label">Matière</label>
                                    <input type="text" class="form-control" id="matiere" name="matiere" value="<?php echo $table['matiere']?>">
                                  </div>
                                  <div class="">
                                    <label for="niveau" class="col-form-label">Niveau</label>
                                    <input type="text" class="form-control" id="niveau" name="niveau" value="<?php echo $table['niveau']?>">
                                  </div>
                                  <div class="">
                                    <label for="titre" class="col-form-label">Titre:</label>
                                    <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $table['titre']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Exercice:</label>
                                    <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img">
                                  </div>

                                  <div class="">
                                    <label for="img1" class="col-form-label">Correction:</label>
                                    <input type="file" class="form-control" id="img1" accept=".jpg,.png,.jpeg" name="img1">
                                  </div>
                                  <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-warning">Modifier</button>
                              </div>
                                </form>
</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>