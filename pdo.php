<?php
    $servername = "127.0.0.1";
    $dbname = "project"; 
    $username = "root"; 
    $password = ""; 

    try {
    
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password,
        array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
   
        echo "Është lidhur me sukses";
    }catch(PDOException $e){
        echo " Lidhja dështoi: " . $e->getMessage();
    }
?>