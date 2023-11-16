<?php 
ini_set('display_errors', 'On'); ini_set('html_errors', 0); error_reporting(-1);

$host = "localhost";
$user = "root";
$pass = "admin";
$database = "starshop";

$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>