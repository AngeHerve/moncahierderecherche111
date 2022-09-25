<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <title>Connexion</title>
    <link rel="stylesheet" href="css/styl.css">

  </head>
<body>
<section class="bg-sign-in mtn">
<main class=" d-flex m-5 align-items-center">
  <div class="m-1">
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class=" Sc text-start ms-3 ps-1 text-primary"  >Se Connecter</h1>
       <div>
          <h2 class=" sign-in text-uppercase">Professeurs</h2>
      
        </div>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "please enter your email or password"){
              echo '<div sclass="alert alert-danger" role="alert">
           s\'il vous plait entrez un email ou un mot de passe
          </div>';
            }
            elseif($_GET['error'] == "email or password not found"){
              echo '<div class="alert alert-danger" role="alert">
              email ou mot de passe non reconnu
          </div>';
            }
          }    
        ?>
        <div class="container">
        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start form-group ">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php  if(isset($_COOKIE['email'])){echo $_COOKIE['email']; }?>">
          </div>
          <div class="mb-3 text-start form-group">
            <label for="pwd">Mot de Passe:</label>
            <input type="password" class="form-control" id="pwd" placeholder=" Enter password" name="pass" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>">
          </div>
          <div class="mb-3 form-check d-flex gap-2 form-group">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Se Souvenir de Moi</label>
  </div>
          <button type="submit" name="submit" class="col btn-register btn text-white w-100 text-uppercase">connexion</button>
          <p class="mt-4">Mot de Passe Oublié? <a href="resetpass.php">Réinitialiser</a></p>
        </form>  
        <a href="register.php" ><input type="submit" class="col btn-register btn mb-3 text-white" value="Créer un compte"/></a>
        </div> 
     </div>
     </div>
   </main>
   </section>

   <aside  class="mtn">
  <img src="assets\img\2.jpeg" alt="" class="g ">
        </aside> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="./js/validation.js"></script>
</body>
</html>