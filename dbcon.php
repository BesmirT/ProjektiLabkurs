<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=labkurs1", "root" , "");  
  
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}