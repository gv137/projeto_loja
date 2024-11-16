<?php
class Conexao {
    private $conn;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'lojaIndie';
        $username = 'root';
        $password = ''; 

        $this->conn = new mysqli($host, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Erro na conexão: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
