<?php
    if(isset($_POST['submit'])){
        include 'conixion.php';
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conPass = $_POST['conPass'];
        if($pass === $conPass){
            var_dump($userName);
            $requete = $con->prepare("INSERT INTO user (username,Email,Password)
             VALUES('$userName','$email','$pass')");
            $requete->execute();
            header('location:eleves_connexion.php');
        }
        else{
            header("location:eleves_connexion.php?error=password not found");
        }
    }
?>