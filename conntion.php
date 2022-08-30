<?php

session_start();
include('config.php');
// initializing variables
$username = "";
$email    = "";
$errors = array();

if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $numero = mysqli_real_escape_string($conn, $_POST['num']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE Name_users='$username' OR email_users='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = ($password_1);//encrypt the password before saving in the database
      $query ="INSERT INTO `users`( `Name_users`, `Pwd_users`, `num_users`, `email_users`) VALUES ('$username',' $password','$numero','$email')";
    mysqli_query($conn, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
<link rel="stylesheet" href="modi.css">
<style media="screen">
body{
  margin: 0;
  padding: 0;
}
  img{
    position: absolute;
    margin-top: -20px;
    opacity: 3;
  }
  .box{
    margin-left: 600px;
  }
</style>
</head>
<body>
  <div class="ima">
    <img src="3.jpeg" alt="">
  </div>
  <form class="box" action="conntion.php" method="post">
    <?php include('error.php') ?>
      <h1 class="box-title">S'inscrire</h1>
  	<input type="text" class="box-input" name="username" value="<?php echo $username; ?>" placeholder="Nom d'utilisateur" required />
  	<input type="password" class="box-input" name="password_1" placeholder="Mot de passe" required />
    <input type="password" class="box-input" name="password_2" placeholder="Comfirmé Mot de passe" required />
  	<input type="number" class="box-input" name="num" placeholder="Numéro MTN" required />
      <input type="text" class="box-input" name="email" value="<?php echo $email; ?>" placeholder="Adresse Email" required />
      <input type="submit" name="submit" value="Valider" class="box-button" />
      <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
  </form>

</body>
</html>
