<?php
require_once 'model/cadastro.php';

class cadastroController{
    private $cadastro;

    public function_construct()
    $this->cadastro = new cadastro();
}

public function create($nome, $email, $senha){
    if ($this->cadastro->create($nome, $email, $senha)) {
        header("Location: index.php? message=Dados cadastrados com sucesso")
    }
} else {
    header("Location: index.php?message=Erro ao cadastrar dados")
}

?>