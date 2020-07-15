<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=labkurs", "root" , "");  
    echo"databseconenct";  
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}