<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=labkurs", "root" , "");  
  
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}