<?php
session_start();
include('config.php');

$username = "";
$email    = "";
$errors = array();

if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password_1)) {
    array_push($errors, "password is required");
  }

  if (count($errors) == 0) {
    $password = ($password_1);
    $query = "SELECT * FROM users WHERE Name_users='$username' AND Pwd_users='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
			$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }
}

?>
﻿<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="modi.css" />
  <style media="screen">
  .box1{
    border: 1px solid #c4c4c4;
    border-radius: 40px;
    margin-left: 30px
  }
  img{
    margin-right: 10px;
    position: absolute;
    margin-left: 800px;
  }
  </style>
</head>
<body>
  <div class="">
    <img src="2.jpeg" alt="">
  </div>
<form class="box1" action="" method="post" name="login">
	 <?php include('error.php') ?>
<h1 class="box-title">Se Connecter</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="password">
<button type="submit" value="Connexion " name="submit" class="box-button">Valider</button>
<p class="box-register">Vous êtes nouveau ici? <a href="conntion.php">Crée un compte</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>
