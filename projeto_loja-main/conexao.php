<?php 

$hostname = 'localhost';
$usuario = 'root';
$senha = '';
$bancodedados = 'lojaIndie';

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

if($conexao->connect_error){
    echo "Falha ao conectar: (" . $conexao->connect_error . ") " .
    $conexao->connect_errno;
    exit();
}
?>