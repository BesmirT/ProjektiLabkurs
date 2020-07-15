<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=labkurs", "root" , "");
    echo "database connect";    
}catch(PDOException $pdo){
    die("Unsuccessful connection");
    echo "database not connect";
}
?>








