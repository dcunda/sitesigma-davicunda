<?php

$servername = "localhost";
$database = "sitesigma";
$username = "root";
$password = "";

// Criando conexão 
$conn = mysqli_connect($servername, $username, $password, $database);

// Checando conexão 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 

?>