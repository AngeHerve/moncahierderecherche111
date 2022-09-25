<?php
if (isset($_POST['submit'])){
    include 'connexion.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $requete = "SELECT * FROM users WHERE username = '$username' and Email = '$email'";
    $statment = $con -> prepare($requete);
    $statment -> execute();
    $result = $statment -> fetch();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset-password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/styl.css">
</head>
<body class="container d-flex justify-content-center align-items-center">
<form method="POST" action="" enctype="mutipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pseudo</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entrer l'Email</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="email">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">réinitialiser le mot de passe</button>
</form>
</body>
</html>