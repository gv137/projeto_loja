<?php
require_once 'controller/cadastroController.php';

$controller = new cadastroController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $controller->create($nome, $email, $senha);
} else {
    require'view/cadastroTela.php';
}

?>