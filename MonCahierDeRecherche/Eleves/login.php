<?php
        session_start();
        if(isset($_POST['submit'])){
          include 'conixion.php';
          $email = $_POST['email'];
          $password = md5($_POST['pass']);

          $requete = "SELECT * FROM user WHERE Email = '$email' and Password = '$password'";
          $statment = $con -> prepare($requete);
          $statment -> execute();
          $result = $statment -> fetch();
          if($result['Email'] === $email && $result['Password'] === $password){
            $_SESSION['name'] = $result['username'];
            $_SESSION['email'] = $result['Email'];
            $_SESSION['password'] = $result['Password'];
            if(isset($_POST['check'])){
                setcookie('email',$_SESSION['email'],time() + 3600);
                setcookie('password',$_SESSION['password'],time() + 3600);
            }
            header("location:./pages/dashboard.php");
            }
            else if(empty($email) || empty($password)){
                header("location:eleves_connexion.php?error=please enter your email or password");
            }
            else
            {
                header("location:eleves_connexion.php?error=email or password not found");
            }
      }?>