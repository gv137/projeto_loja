<?php
require_once 'controller/cadastroController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $controller = new CadastroController();
    $controller->create($nome, $email, $senha);
}
?>
