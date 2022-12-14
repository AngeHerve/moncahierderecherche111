<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing-in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
   <main class="bg-sign-in d-flex justify-content-center align-items-center">
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="MCR text-start ms-3 ps-1" >MCR</h1>
        <div>
          <h2 class=" sign-in text-uppercase">connexion</h2>
        <p>Entrer vos informations pour accéder à votre compt</p>
        </div>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "please enter your email or password"){
              echo '<div class="alert alert-danger" role="alert">
            s\'il vous plait entrez votre email ou mot de passe 
          </div>';
            }
            elseif($_GET['error'] == "email or password not found"){
              echo '<div class="alert alert-danger" role="alert">
              email ou mot de passe invalide
          </div>';
            }
          }    
        ?>
        <form method="POST" action="login.php" enctype="multipart/form-data">
          <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php  if(isset($_COOKIE['email'])){echo $_COOKIE['email']; }?>">
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Mot de Passe:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>">
          </div>
          <div class="mb-3 form-check d-flex gap-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Se Souvenir de Moi</label>
  </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">connexion</button>
          <p class="mt-4">Mot de Passe Oublié? <a href="resetpass.php">Reset Password</a></p>
          
        </form>
        <button href="" class="btn-register btn btn-success mb-3">Créer un Compt</button>
     </div>

   </main>

          <div class="bg"></div>

   <div class="register d-flex justify-content-center align-items-center">
   <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
       <div>
           <h2 class=" sign-in text-uppercase">sign up</h2>
       </div>
       <form method="POST" id="signup" action="createaccout.php">
           <div class="mb-3 mt-3 text-start">
               <label class="label-signup" for="username">Pseudo: <span class="valid"></span></label>
               <input type="text" class="form-control" id="username" placeholder="Entrez le pseudo" name="username">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="email">Email: <span class="valid"></span></label>
               <input type="email" class="form-control" id="Email" placeholder="Entrez l'Email" name="email">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="pwd">Créer un Mot de Passe: <span class="valid"></span></label>
               <input type="password" class="form-control" id="Pwd" placeholder="Créer un Mot de Passe" name="pass" autocomplete="on">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="conPwd">Confirmer le Mot de Passe: <span class="valid"></span></label>
               <input type="password" class="form-control" id="conPwd" placeholder="Confirmer le Mot de Passe" name="conPass" autocomplete="on">
           </div>
           <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">sign up</button>
           <p class="mt-4">vous avez un compt? <a href="index.php">Connexion</a></p>
       </form>
   </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="./js/validation.js"></script>
</body>
</html>