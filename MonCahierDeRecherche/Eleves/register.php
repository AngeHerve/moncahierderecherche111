<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Enregistrement</title>
</head>
<body>
    <div class="bg-sign-up">
<div class=" regi d-flex  align-items-center">
   <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
       <div>
           <h2 class=" sign-in text-uppercase text-primary">Enregistrement</h2>
       </div>
       <form method="POST" id="signup" action="createaccout.php">
           <div class="mb-3 mt-3 text-start">
               <label class="label-signup" for="username">Pseudo: <span class="valid"></span></label>
               <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="email">Email: <span class="valid"></span></label>
               <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="email">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="pwd">Créer un Mot de Passe: <span class="valid"></span></label>
               <input type="password" class="form-control" id="Pwd" placeholder="Enter password" name="pass" >
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="conPwd">Confirmer le Mot de passe : <span class="valid"></span></label>
               <input type="password" class="form-control" id="conPwd" placeholder="Confirm password" name="conPass" >
           </div>
           <button type="submit" name="submit" class="btn btn-register text-white w-100 text-uppercase">confirmer</button>
           <p class="mt-4">Vous avez un compte? <a href="eleves_connexion.php">Se Connecter</a></p>
       </form>
   </div>
   </div>
   <div>
    <img src="files\3.jpeg" alt="">
   </div>
   
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="./js/validation.js"></script>
</body>
</html>