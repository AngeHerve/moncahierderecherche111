<?php
 $con = mysqli_connect("localhost","root","","min_crud");

 if(!$con){
     echo"Connection fail".mysqli_connect_error();
 }

 if(isset($_POST['paye'])){
    $choix = $_POST['choix'];
    $num = $_POST['numero'];
    if(strlen($num)==10){
        $que = "INSERT INTO `payement`(`choix_ab`, `numero` ) VALUES ('$choix','$num')";
        if( mysqli_query($con,$que)){

        echo' <h3>Payement Reussi !!! <a href="#">retour</a></h3> ';
        }else{
            echo "<h4>Echec du payement</h4>";
        }
    }else{
        echo "<h4>Numero Invalide</h4>";
    }

 }else{
        
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payement</title>
</head>

<link rel="stylesheet" href="style.css">
<body>
    <div>
        <form action="" method="POST">    
            <h2>MTN MOMO</h2>
                <label for="">choix d'abonnement</label><br>
                <select name="choix" id="" require>
                <option value="" ></option>
                <option value="1000">SEMAINE 1000fcfa</option>
                <option value="3000">MOIS 3000fcfa</option>
                </select><br>
                <label for="">Numero de payement</label><br>
                <input type="number" name="numero"  id="" maxlength="10"  require><br>
                <button type="submit" name="paye">Valider</button>
        </form> 
    </div>
</body>
</html>