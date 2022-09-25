<?php
    if(isset($_POST['submit'])){
        include './pages/connexion.php';
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conPass = $_POST['conPass'];
        if($pass === $conPass){
            var_dump($userName);
            $requete = $con->prepare("INSERT INTO users(username,Email,Password)
             VALUES('$userName','$email','$pass')");
            $requete->execute();
            header('location:prof_connexion.php');
        }
        else{
            header("location:prof_connexoin.php?error=password not found");
        }
    }
?>