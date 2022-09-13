<?php 
    try {
        $con = new PDO("mysql:host=localhost;dbname=eclasse", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
       catch(Exception $e) {
        echo "Connection failed: " . $e->getMessage();
      }
?>