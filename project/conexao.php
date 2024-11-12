<?php 

$hostname = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'loja_indie';

$conexao = new mysqli($hostname, $usuario, $senha, $db);

if($conexao->connect_error){
    echo "Falha ao conectar: (" . $conexao->connect_error . ") " .
    $conexao->connect_errno;
    exit();
}

?>