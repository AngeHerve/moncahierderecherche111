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
        <h1 class="E-classe text-start ms-3 ps-1" >E-classe</h1>
        <div>
          <h2 class=" sign-in text-uppercase">sign in</h2>
        <p>Enter your credentials to access your account</p>
        </div>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "please enter your email or password"){
              echo '<div sclass="alert alert-danger" role="alert">
            please enter your email or password
          </div>';
            }
            elseif($_GET['error'] == "email or password not found"){
              echo '<div class="alert alert-danger" role="alert">
              email or password not found
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
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>">
          </div>
          <div class="mb-3 form-check d-flex gap-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">sign in</button>
          <p class="mt-4">Forgot your password? <a href="resetpass.php">Reset Password</a></p>
          
        </form>
        <button href="" class="btn-register btn btn-success mb-3">Create Account</button>
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
               <label class="label-signup" for="username">username: <span class="valid"></span></label>
               <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="email">Email: <span class="valid"></span></label>
               <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="email">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="pwd">Create Password: <span class="valid"></span></label>
               <input type="password" class="form-control" id="Pwd" placeholder="Enter password" name="pass" autocomplete="on">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="conPwd">Confirm Password: <span class="valid"></span></label>
               <input type="password" class="form-control" id="conPwd" placeholder="Confirm password" name="conPass" autocomplete="on">
           </div>
           <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">sign up</button>
           <p class="mt-4">you have account? <a href="index.php">sign-in</a></p>
       </form>
   </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="./js/validation.js"></script>
</body>
</html>