<?php
  $host= "localhost";
  $database="contacts_app";
  $user ="root";
  $password="";
  try{
    $conn= new PDO("mysql:host=$host; dbname=$database", $user, $password);
    echo ("exito");
  }
  catch(PDOException $e){
echo ("Error");
  }
    
  
?>
