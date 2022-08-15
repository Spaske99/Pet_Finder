<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "lost-pets";

    $conn = mysqli_connect ($serverName,$userName,$password,$dbName);

    if(!$conn){
        die("Conection faild" . mysqli_connect_eror());
    }
?>