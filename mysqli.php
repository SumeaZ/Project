<?php
    $servername = "localhost";
    $dbname = "project";  // Emri i bazës së të dhënave
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed: " . mysqli_connect_error());
    }
    echo "Suksese";
?>
