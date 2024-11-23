<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbdados = "login";

$conn = new mysqli($servername, $username, $password, $dbdados);

if ($conn -> connect_error) {
    die("Falha na conexão: ". $connect_error);
}
?>