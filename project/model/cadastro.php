<?php
require_once 'conexao.php';

class cadastro {
    private $conn;

    public function_construct() {
        $conexao = new conexao();
        $this->conn = $conexao->getConnection(); 
    }

    public function create($nome, $email, $senha){
        $query = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        return mysqli_query($this->conn, $query);
    }
}

?>